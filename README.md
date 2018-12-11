# Plant Seedlings Classification

This is a project for BU Class ECE601 Prodect Design.

the website is http://www.plantseeding.com/

## Website design

![draw](https://github.com/plantclassification/seedlings_classification/blob/website/p1.jpg)

This website is designed to classify the species of plant seedlings. We used html js, css, and php to build our web application and deployed it on Amzon web server. The photo is the index of the website.



## The main function
The main function, people could upload a photo of seedling, click the submit button, the image will be uploaded to a temporary location in 
server, php file of backend will check sth like the size and suffix of the image, because the machine learning program are written by 
python so if everthing is ok,backend php will call python file to predict the species of the seedling, and relocate to corresponding page. 
I used cookie buffer to transmit the outcome including which species it belongs to and the confidence coefficient from module to web page. 
Like that.  and consider the limited space of our server, we only store 60 images,After that backend will delete all images to release 
space. 

![draw](https://github.com/plantclassification/seedlings_classification/blob/website/p2.jpg)

## Other functions
We have desciptions of all 12 species. there are 12 static web pages, you can click it to get more information. 

![draw](https://github.com/plantclassification/seedlings_classification/blob/website/p3.jpg)

And, I also designed a message board for leaving message to us,we used mysql database to store messages. Which could help us improve our website.

![draw](https://github.com/plantclassification/seedlings_classification/blob/website/p4.jpg)


## Contact
if any question, please send us email:  lihaooo@bu.edu
