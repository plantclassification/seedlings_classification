# Plant Seddlings Classification

This is a project for BU Class ECE601 Prodect Design.

https://trello.com/b/aS5tuQDa/seed

http://www.plantseeding.com/

Amazon Web Service(AWS)

We choose the AWS as our web service by the following steps:
- We applied our web domain name "www.plantseeding.com"
- Launch an EC2 instance on AWS, choose the Ubuntu server as our  Amazon Machine Image(AMI)
- Configure Security Group of SSH, HTTP and RDP
- Create a new key and one elastic IP to associated with this instance
- Analysize the DNS of our web and and associated the elastic IP with it
- Then we connect to the Ubuntu AMI in our terminal by ssh -i "key.pem" ubuntu@ec2-elastic-ip.compute-1.amazonaws.com
- Install apache + mysql + php on the linux system
- Replace the html file of our own one by scp -i key.pem -r index_new.html ubuntu@ip:~

You can see here for how we connect to the visual machine on AWS and manage our database by mysql:
![draft](https://user-images.githubusercontent.com/43126280/47623515-e8ee4f80-dae8-11e8-931f-65f94731676b.png)
