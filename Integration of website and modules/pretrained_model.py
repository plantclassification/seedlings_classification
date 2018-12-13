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




def train(model, device, train_loader, optimizer, epoch):
    model.train()
    for batch_idx, (x, y) in enumerate(train_loader):
        x, y = x.to(device), y.to(device)
        optimizer.zero_grad()
        x = x.float()
        y = y.long()
        output = model(x)
        loss = F.cross_entropy(output, y)
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

def predict(model, device, input):
    model.eval()
    with torch.no_grad():
        x = input.to(device)
        x = x.float()
        output = model(x)
        pred = output.max(1, keepdim=True)[1]
    return pred


if __name__ == '__main__':
    os.environ["CUDA_VISIBLE_DEVICES"] = "0"
    use_cuda = torch.cuda.is_available()
    print(use_cuda)
    device = 'cuda'
    model = models.vgg16(pretrained=False)
    model.features[0] = torch.nn.Conv2d(4, 64, kernel_size=(3, 3), stride=(1, 1), padding=(1, 1))
    model.classifier[0] = torch.nn.Linear(in_features=25088, out_features=512, bias=True)
    model.classifier[3] = torch.nn.Linear(in_features=512, out_features=512, bias=True)
    model.classifier[6] = torch.nn.Linear(in_features=512, out_features=12, bias=True)
    print(model)


    preprocessing = Preprocessing()
    data = preprocessing.read_image()
    data['image'] = torch.from_numpy(data['image'])
    data['label'] = torch.from_numpy(data['label'])
    train_set = torch.utils.data.TensorDataset(data['image'],data['label'])
    indices = np.random.randint(low=0,high=len(train_set)-1,size=len(train_set))
    test_sequence = torch.from_numpy(indices)
    test_set = torch.utils.data.Subset(train_set, test_sequence[0:400])
    train_set_split = torch.utils.data.Subset(train_set, test_sequence[400:])
    train_loader = torch.utils.data.DataLoader(dataset=train_set_split, batch_size=32, shuffle=True, num_workers=0)
    test_loader = torch.utils.data.DataLoader(dataset=test_set, batch_size=64)
    print('Total length: ', len(train_set))
    print('train_length:',len(train_set_split))
    print('test_length:',len(test_set))

    model.cuda()
    summary(model,(4,224,224))

    try:
        model.load_state_dict(torch.load('./vgg.pth'))
    except FileNotFoundError:
        print('Initialization')
    optimizer = optim.Adam(model.parameters())
    for epoch in range(20):
        train(model, device, train_loader, optimizer, epoch=10)
        test(model, device, test_loader)
        torch.save(model.state_dict(), './model.pth')


    # INV_CLASS = {
    #     0: 'Black-grass',
    #     1: 'Charlock',
    #     2: 'Cleavers',
    #     3: 'Common Chickweed',
    #     4: 'Common wheat',
    #     5: 'Fat Hen',
    #     6: 'Loose Silky-bent',
    #     7: 'Maize',
    #     8: 'Scentless Mayweed',
    #     9: 'Shepherds Purse',
    #     10: 'Small-flowered Cranesbill',
    #     11: 'Sugar beet'
    # }
    #
    # preprocessing = Preprocessing()
    # model = CNN_NET(4, 12).to('cuda')
    # predict_data = preprocessing.test_data_read()
    # predict_input = torch.from_numpy(predict_data['image'])
    # model.load_state_dict(torch.load('./model.pth'))
    # prediction = predict(model, 'cuda', predict_input)
    # prediction = prediction.cpu()
    # prediction = list(prediction.numpy())
    # predict_data['label'] = prediction
    #
    #
    # with open('submission.csv','w',encoding='utf-8') as f:
    #     f.write('file,species'+'\n')
    #     for i in range(len(predict_data['id'])):
    #         f.write(predict_data['id'][i] + ',' + INV_CLASS[prediction[i][0]] + '\n')