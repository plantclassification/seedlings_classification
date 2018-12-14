import numpy as np
import torch
import torch.nn as nn
import torch.nn.functional as F
import torch.optim as optim
from preprocessing import Preprocessing
import torch.utils.data
import os
from model import CNN_NET, train, test, predict_1
import argparse
import math


if __name__ == '__main__':
    parser = argparse.ArgumentParser()
    parser.add_argument('-f', type=str, help='add path')
    args = parser.parse_args()
    image_path = args.f
    device = 'cpu'
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
    data = preprocessing.read_image_single(image_path=image_path)
    model = CNN_NET(4, 12, 0).to(device)

    predict_input = torch.from_numpy(data)

    model.load_state_dict(torch.load('./model.pth', map_location='cpu'))
    prob, prediction = predict_1(model, 'cpu', predict_input)
    print(INV_CLASS[prediction[0][0]])
    print(math.exp(prob.item()))
    #print('We believe the plant belongs to {class_name}. The confidence is {prob}'.format(class_name=INV_CLASS[prediction[0][0]],prob=prob.item()))