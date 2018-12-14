# Models
We have tried different kinds of models.  
DenseNet2.py shows how we use pretrained model of DenseNet  
pretrained.py shows how we use Inception V-3 in which we get best 96.85% on kaggle  
preprocessing.py shows preprocess part.  
predict.py is used for predict one picture.

We have tried different kinds of tricks.  
Oversampling algorithm SMOTE, which can boost our score for about 0.5.  
renormalize to 1, which can boost accuracy for about 0.1.  
| Model | Trick | Results on kaggle submission |
| :------: | :------: | :------: |
| Inception V-3 | None | 96.12 |
| Inception V-3 | SMOTE | 96.73 |
| Inception V-3 | SMOTE+normalize | 96.85 |
| DenseNet169 | None | 95.85 |
| Our own CNN model | None | 73.84 |






Inception V-3 with pre-trained model. The article can be found here
https://arxiv.org/abs/1512.00567. License can be found here,
https://pytorch.org/docs/stable/torchvision/models.html?highlight=inception%20v3#torchvision.
models.inception_v3.
Inception V-3 contains 22 layers. Each layer contain convolutional layer with core 1x1, 3x3 or 5x5,
maxpooling layer and batch normalization layer. The whole structure can be seen in the following.
The advantage of Inception V-3 is fast and fewer parameters compared with VGG. This model can
work very fast(2 minutes per epoch training on 1060 GPU) and reach 95.8% test accuracy on
Kaggle.
3.3. We also try DenseNet-169 because it can boost score by 1 percent compared with Inception
V-3. The paper can be found here. https://arxiv.org/pdf/1608.06993.pdf
License can be found here.
https://pytorch.org/docs/stable/torchvision/models.html?highlight=densenet161#torchvision.m
odels.densenet161
DenseNet is raised in 2017 on CVPR. So it is a more SOTA one compared with Inception V-3 and
VGG. It has two basic features.
1. It can alleviate gradient vanishing in deep neural network. Each layer will use features in all
previous layers, so when doing back propogation, each layer will receive all gradients in former
layers, so it can alleviate gradient vanishing problems.
2. Because many features are re-used, small convolution cores can be used to substitute big cores, leading to fewer parameters.
Following is the structure of DenseNet, we use 169 version because it can provide higher
accuracy.
