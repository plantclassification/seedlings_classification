import numpy as np
import torch
import torch.nn as nn
import torch.nn.functional as F
import torch.optim as optim
from preprocessing import Preprocessing
import torch.utils.data
import os
import torchvision.models as models
from torchsummary import summary


class CNN_NET(nn.Module):
    def __init__(self, in_channels, label_num, dropout_rate):
        super(CNN_NET, self).__init__()
        self.conv1 = nn.Conv2d(in_channels, 32, kernel_size=3)
        self.conv2 = nn.Conv2d(32, 64, kernel_size=3)
        self.conv2_drop = nn.Dropout2d(dropout_rate)
        self.conv3 = nn.Conv2d(64, 128, kernel_size=3)
        self.conv3_drop = nn.Dropout2d(dropout_rate)
        self.conv4 = nn.Conv2d(128, 128, kernel_size=3)
        self.conv4_drop = nn.Dropout2d(dropout_rate)
        self.linear1 = nn.Linear(18432,512)
        self.linear2 = nn.Linear(512, label_num)
        self.drop = dropout_rate

    def forward(self, x):
        x = F.relu(F.max_pool2d(self.conv1(x), 2))
        x = F.relu(F.max_pool2d(self.conv2_drop(self.conv2(x)), 2))
        x = F.relu(F.max_pool2d(self.conv3(x), 2))
        x = F.relu(F.max_pool2d(self.conv4_drop(self.conv4(x)), 2))
        x = x.view(-1, 18432)
        x = F.relu(self.linear1(x))
        x = F.dropout(x, p=self.drop, training=False)
        x = self.linear2(x)
        return F.log_softmax(x, dim=1)

def train(model, device, train_loader, optimizer, epoch):
    model.train()
    for batch_idx, (x, y) in enumerate(train_loader):
        x, y = x.to(device), y.to(device)
        optimizer.zero_grad()
        x = x.float()
        y = y.long()
        output = model(x)
        loss = F.nll_loss(output, y)
        loss.backward()
        optimizer.step()
        if batch_idx % epoch == 0:
            print('Train Epoch: {} [{}/{} ({:.0f}%)]\tLoss: {:.6f}'.format(
                batch_idx, batch_idx * len(x), len(train_loader.dataset),
                       100. * batch_idx / len(train_loader), loss.item()))

def test(model, device, test_loader):
    model.eval()
    test_loss = 0
    correct = 0
    with torch.no_grad():
        for x, y in test_loader:
            x, y = x.to(device), y.to(device)
            x = x.float()
            y = y.long()
            output = model(x)
            test_loss += F.cross_entropy(output, y, reduction='sum').item()
            pred = output.max(1, keepdim=True)[1]
            correct += pred.eq(y.view_as(pred)).sum().item()
    test_loss /= len(test_loader.dataset)
    print('\nDevelopment Set: Average loss: {:.4f}, Accuracy: {}/{} ({:.0f}%)\n'.format(
        test_loss, correct, len(test_loader.dataset),
        100. * correct / len(test_loader.dataset)))

def predict(model, device, inputs):
    model.eval()
    pred_list = []
    with torch.no_grad():
        for input in inputs:
            input = input[0]
            x = input.to(device)
            x = x.float()
            output = model(x)
            pred = output.max(1, keepdim=True)[1]
            pred = pred.cpu()
            preds = pred.numpy()
            for pred in preds:
                pred_list.append(list(pred)[0])
    return pred_list



if __name__ == '__main__':
    os.environ["CUDA_VISIBLE_DEVICES"] = "0"
    use_cuda = torch.cuda.is_available()
    print(use_cuda)

    model = CNN_NET(4,12,0).to('cuda')
    print(model)
    summary(model, (4,224,224))

    def pre_train(epochs=10):

        preprocessing = Preprocessing()
        data = preprocessing.read_image()
        data['image'] = torch.from_numpy(data['image'])
        data['label'] = torch.from_numpy(data['label'])
        train_set = torch.utils.data.TensorDataset(data['image'],data['label'])
        indices = np.random.randint(low=0,high=len(train_set)-1,size=len(train_set))
        test_sequence = torch.from_numpy(indices)
        test_set = torch.utils.data.Subset(train_set, test_sequence[0:400])
        train_set_split = torch.utils.data.Subset(train_set, test_sequence[400:])
        train_loader = torch.utils.data.DataLoader(dataset=train_set_split, batch_size=64, shuffle=True, num_workers=4)
        test_loader = torch.utils.data.DataLoader(dataset=test_set, batch_size=32)
        print('Total length: ', len(train_set))
        print('train_length:',len(train_set_split))
        print('test_length:',len(test_set))


        try:
            model.load_state_dict(torch.load('./model.pth'))
        except FileNotFoundError:
            print('Initialization')
        optimizer = optim.Adam(model.parameters())
        for epoch in range(epochs):
            train(model, 'cuda', train_loader, optimizer, epoch=10)
            test(model, 'cuda', test_loader)
            torch.save(model.state_dict(), './model.pth')

    def fine_tune(epochs=20, dropout=0.25, lr=1e-5):
        model = CNN_NET(4, 12, dropout).to('cuda')
        preprocessing = Preprocessing()
        data = preprocessing.read_image()
        data['image'] = torch.from_numpy(data['image'])
        data['label'] = torch.from_numpy(data['label'])
        train_set = torch.utils.data.TensorDataset(data['image'], data['label'])
        indices = np.random.randint(low=0, high=len(train_set) - 1, size=len(train_set))
        test_sequence = torch.from_numpy(indices)
        test_set = torch.utils.data.Subset(train_set, test_sequence[0:400])
        train_set_split = torch.utils.data.Subset(train_set, test_sequence[400:])
        train_loader = torch.utils.data.DataLoader(dataset=train_set, batch_size=64, shuffle=True, num_workers=4)
        test_loader = torch.utils.data.DataLoader(dataset=test_set, batch_size=32)
        print('Total length: ', len(train_set))
        print('train_length:', len(train_set_split))
        print('test_length:', len(test_set))

        try:
            model.load_state_dict(torch.load('./model.pth'))
        except FileNotFoundError:
            print('Initialization')
        optimizer = optim.Adam(model.parameters(), lr=lr)
        for epoch in range(epochs):
            train(model, 'cuda', train_loader, optimizer, epoch=10)
            test(model, 'cuda', test_loader)
            torch.save(model.state_dict(), './model.pth')


    def predict():

        INV_CLASS = {
            0: 'Black-grass',
            1: 'Charlock',
            2: 'Cleavers',
            3: 'Common Chickweed',
            4: 'Common wheat',
            5: 'Fat Hen',
            6: 'Loose Silky-bent',
            7: 'Maize',
            8: 'Scentless Mayweed',
            9: 'Shepherds Purse',
            10: 'Small-flowered Cranesbill',
            11: 'Sugar beet'
        }

        preprocessing = Preprocessing()
        model = CNN_NET(4, 12, 0).to('cuda')
        predict_data = preprocessing.test_data_read()
        predict_input = torch.from_numpy(predict_data['image'])
        predict_dataset = torch.utils.data.TensorDataset(predict_input)
        predict_set = torch.utils.data.DataLoader(predict_dataset, batch_size=32)
        model.load_state_dict(torch.load('./model.pth'))
        prediction = predict(model, 'cuda', predict_set)
        predict_data['label'] = prediction

        with open('submission.csv','w',encoding='utf-8') as f:
            f.write('file,species'+'\n')
            for i in range(len(predict_data['id'])):
                f.write(predict_data['id'][i] + ',' + INV_CLASS[prediction[i]] + '\n')

    #pre_train()
    #fine_tune(dropout=0.25, epochs=30)
    predict()

