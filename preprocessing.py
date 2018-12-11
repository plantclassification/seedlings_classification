import numpy as np
import glob
import cv2
import os
import matplotlib.pyplot as plt
import logging

# Input ( ,256,256,4) Output( ,12)

CLASS = {
    'Black-grass': 0,
    'Charlock': 1,
    'Cleavers': 2,
    'Common Chickweed': 3,
    'Common wheat': 4,
    'Fat Hen': 5,
    'Loose Silky-bent': 6,
    'Maize': 7,
    'Scentless Mayweed': 8,
    'Shepherds Purse': 9,
    'Small-flowered Cranesbill': 10,
    'Sugar beet': 11
}

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


class Preprocessing():
    def __init__(self):
        self.train_folder = '..\data\\train\\train'
        self.test_folder = '..\data\\test\\test'
        self.data_dict = {
            "image":[],
            "label":[]
        }
        self.test_dict = {
            "image": [],
            "label": [],
            'id':[]
        }
        pass

    @staticmethod
    def create_mask_for_plant(image):
        image_hsv = cv2.cvtColor(image, cv2.COLOR_BGR2HSV)

        sensitivity = 35
        lower_hsv = np.array([60 - sensitivity, 100, 50])
        upper_hsv = np.array([60 + sensitivity, 255, 255])

        mask = cv2.inRange(image_hsv, lower_hsv, upper_hsv)
        kernel = cv2.getStructuringElement(cv2.MORPH_ELLIPSE, (11, 11))
        mask = cv2.morphologyEx(mask, cv2.MORPH_CLOSE, kernel)

        return mask

    def segment_plant(self, image):
        mask = self.create_mask_for_plant(image)
        output = cv2.bitwise_and(image, image, mask=mask)
        return output

    @staticmethod
    def sharpen_image(image):
        image_blurred = cv2.GaussianBlur(image, (0, 0), 3)
        image_sharp = cv2.addWeighted(image, 1.5, image_blurred, -0.5, 0)
        return image_sharp

    def read_image(self):
        for class_folder in os.listdir(self.train_folder):
            class_path = os.path.join(self.train_folder, class_folder)
            for image_path in glob.glob(os.path.join(class_path,'*.png')):
                image = cv2.imread(image_path, cv2.IMREAD_COLOR)
                image = cv2.resize(image, (224,224))
                image_stack = self.segment_plant(image)
                image_stack = self.sharpen_image(image_stack)
                image_stack = cv2.cvtColor(image_stack, cv2.COLOR_RGB2GRAY)
                image_stack = np.reshape(image_stack, (224, 224, 1))
                input = np.concatenate((np.array(image), np.array(image_stack)), axis=2)

                self.data_dict['image'].append(input)
                self.data_dict['label'].append(class_folder)

        self.data_dict['image'] = np.array(self.data_dict['image']).swapaxes(1,3)
        self.data_dict['label'] = np.array([CLASS[i] for i in self.data_dict['label']])
        logging.debug(self.data_dict['label'].shape)
        logging.debug(self.data_dict['image'].shape)

        def one_hot(num_list, class_number):
            onehot_list = []
            for i in range(len(num_list)):
                one_hot_array = np.zeros(class_number)
                one_hot_array[num_list[i]] += 1
                onehot_list.append(one_hot_array)
            return np.array(onehot_list)

        #self.data_dict['label'] = one_hot(self.data_dict['label'], len(CLASS))
        logging.debug(self.data_dict['label'].shape)
        return self.data_dict

    def plot_image(self):
        for class_folder in os.listdir(self.train_folder):
            class_path = os.path.join(self.train_folder, class_folder)
            for image_path in glob.glob(os.path.join(class_path, '*.png')):
                image = cv2.imread(image_path, cv2.IMREAD_COLOR)
                plt.imshow(image)
                plt.title('Raw image')
                plt.show()
                image = cv2.resize(image, (256, 256))
                plt.imshow(image)
                plt.title('Reshaped image')
                plt.show()
                image_stack = self.segment_plant(image)
                image_stack = self.sharpen_image(image_stack)
                image_stack = cv2.cvtColor(image_stack, cv2.COLOR_RGB2GRAY)
                image_stack = np.reshape(image_stack, (256, 256, 1))
                plt.imshow(np.reshape(image_stack, (256, 256)))
                plt.title('Processed image')
                plt.show()
                break
            break

    def read_data_mini(self):
        for class_folder in os.listdir(self.train_folder):
            j = 0
            class_path = os.path.join(self.train_folder, class_folder)
            for image_path in glob.glob(os.path.join(class_path, '*.png')):
                image = cv2.imread(image_path, cv2.IMREAD_COLOR)
                image = cv2.resize(image, (224, 224))
                image_stack = self.segment_plant(image)
                image_stack = self.sharpen_image(image_stack)
                image_stack = cv2.cvtColor(image_stack, cv2.COLOR_RGB2GRAY)
                image_stack = np.reshape(image_stack, (224, 224, 1))
                input = np.concatenate((np.array(image), np.array(image_stack)), axis=2)
                self.data_dict['image'].append(input)
                self.data_dict['label'].append(class_folder)
                j += 1
                if j > 9:
                    break
        self.data_dict['image'] = np.array(self.data_dict['image']).swapaxes(1,3)
        self.data_dict['label'] = np.array([CLASS[i] for i in self.data_dict['label']])
        logging.debug(self.data_dict['label'].shape)
        logging.debug(self.data_dict['image'].shape)
        def one_hot(num_list, class_number):
            onehot_list = []
            for i in range(len(num_list)):
                one_hot_array = np.zeros(class_number)
                one_hot_array[num_list[i]] += 1.
                onehot_list.append(one_hot_array)
            return np.array(onehot_list)
        #self.data_dict['label'] = one_hot(self.data_dict['label'], len(CLASS))
        logging.debug(self.data_dict['label'].shape)
        print('minidataset generated:',self.data_dict['label'].shape)
        return self.data_dict

    def test_data_read(self):
        for image_path in glob.glob(os.path.join(self.test_folder, '*.png')):
            image = cv2.imread(image_path, cv2.IMREAD_COLOR)
            image = cv2.resize(image, (224, 224))
            image_stack = self.segment_plant(image)
            image_stack = self.sharpen_image(image_stack)
            image_stack = cv2.cvtColor(image_stack, cv2.COLOR_RGB2GRAY)
            image_stack = np.reshape(image_stack, (224, 224, 1))
            input = np.concatenate((np.array(image), np.array(image_stack)), axis=2)
            self.test_dict['image'].append(input)
            self.test_dict['id'].append(image_path.split('\\')[-1])


        self.test_dict['image'] = np.array(self.test_dict['image']).swapaxes(1,3)
        print('predictset generated:',self.test_dict['image'].shape)
        return self.test_dict

    def read_image_single(self, image_path):
        image = cv2.imread(image_path, cv2.IMREAD_COLOR)
        image = cv2.resize(image, (224, 224))
        image_stack = self.segment_plant(image)
        image_stack = self.sharpen_image(image_stack)
        image_stack = cv2.cvtColor(image_stack, cv2.COLOR_RGB2GRAY)
        image_stack = np.reshape(image_stack, (224, 224, 1))
        input = np.concatenate((np.array(image), np.array(image_stack)), axis=2)
        test_input = np.array([input]).swapaxes(1,3)
        return test_input


if __name__ == '__main__':
    preprocessing = Preprocessing()
    #preprocessing.test_data_read()
    #data = preprocessing.read_image()
    preprocessing.plot_image()
