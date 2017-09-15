It is an open source web based patient management application. You are free to use for any purpose without any warranty and guarantee.

## Requirements And Technical Details

#### LAMP / WAMP Server Online/Offline
+ [How To Install Linux, Apache, MySQL, PHP (LAMP) stack on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu)
+ [WAMP Server Installation Guide for Windows 7 32/64 Bits](http://www.tutorialchip.com/php/wamp-server-installation-guide-for-windows-7-3264-bits/)

***Note:** Please find the related OS version video tutorials for installation on youtube or contact me through email.*

#### Framework

+ [Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications.](https://laravel.com/docs/5.4)
+ [Bootstrap is the most popular HTML, CSS, and JS framework](http://getbootstrap.com/)
+ [Bootswatch Theme](https://bootswatch.com/united/)
+ [jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library](http://jqueryui.com/themeroller/#!zThemeParams=5d000001001406000000000000003d8888d844329a8dfe02723de3e5701dc2cb2be0d98fe676bb46e85f3b85ff2d347a9c5170a6c17a4a3d926b08b9d199c4e573fcbf9cc1a2dd092a9d80b65cc27a41c959e1c11c3f58747718755b7fc90eb73b9c06df29f308cd295b41834e81e06bc171040b3fb939e3cffe02ad60b22eefb1243857d44b57a7ae82073629d27fa97cc0edcf793a9cb7175c405a0fa51e08df692bc77c30ef2c23740da336467993778516e3dda3f982563ac46b0ba5b9b64df82fbefdc978a60da222d6e19d42bb6f12585a895b8d4d97384e78a22fb35b74b6f91ae2aad36e8f5f86717bd8b72eba83277750c9414396c588e930448edf4accb116bad7cbea9aa63ceb2050de67c088b0dea8f499b926c049b66783237a4e8c78c4db65eec9b26b8ee132cb4a78d61368c6206680e917ce6d5ff259427d3c79d1dadee11c17d46588dd4bf09a21332ac25c72fd14407b609e8d4ffbf4a64651aff71655cfab38845646b86b9f101428244db7e76be5b1f2cf349e8ee6eccee38c4c953cd87dbf0295a5e2f3d7200606b00faf01a0a8f84eca9e6c9d81c04224a4a7a04b2f2bbfb8388d452da8b8eb8a27dca6d43d873825fb60e05fa5883e2ba01be09224a00857dcbb8909ab1f83d20dbc67fb7206d8d931b2ccf0c90a9ae4717bbbac54591f74b98362be6647704acbc4142dfead8079290ad3fc39e18983e13469399a4439a14e58ee84a79a7bc90b9198e57ac92bf73219860f69511830ffbcdea824)

#### Composer

+ [Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.](https://getcomposer.org/doc/00-intro.md)


## Installation

+ You can download the latest release code from release page on this [link](https://github.com/shanmuga-axatech/patient-management-system/releases/). 

+ Unzip the folder and move the code to the root folder of the server. Example in WAMP server **www** directory. 

+  Goto the root folder and install the PHP dependency packages
> php composer install

+ Configure the database details on this file on your directory
> https://laravel.com/docs/5.4/configuration

+ If you are deploying in the offline then goto the command line to the particular folder then execute the following commands
> php artisan migrate
> php artisan serve

+ Copy paste the below URL to the browser to see the application
> http://127.0.0.1:8000/

+ Also you can serve the project to a specific IP address using the following artisan command
> php artisan serve --host=xxx.xxx.xxx.xx --port=xxxx

+ You can create virtual host for public folder to create the custom domain URL
> https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-14-04-lts

## Home
After successful installation you can see the following screen on the browser window. On mobile browser visit the URL the observe the following home page.

### Desktop Home Page Design
![Desktop Navigation Page Design](https://user-images.githubusercontent.com/19265427/26876689-01931df6-4ba5-11e7-8569-881983c1d8e9.png)

### Mobile Home Page Design

![home](https://user-images.githubusercontent.com/19265427/26876705-0c65b2de-4ba5-11e7-960a-793fafd76b8c.png)

## Module 1: New Registration

User can register the details on this link

### Add New Registration

![add-register](https://user-images.githubusercontent.com/19265427/26876723-1a8ae8d4-4ba5-11e7-9cbd-a2fc6f97f8d2.png)

### List All Registration

![list-register](https://user-images.githubusercontent.com/19265427/26876727-1a924a20-4ba5-11e7-9b5a-a7e95388787c.png)

1. User can delete the patient registeration details
2. Patient complete details can be viewed by clicking on the view button
3. User can modify the existing details as they wish
4. Pagination provided to list more data

### Edit Registration

![edit-1-register](https://user-images.githubusercontent.com/19265427/26876724-1a8badaa-4ba5-11e7-84b7-b8be29eef778.png)

![edit-2-register](https://user-images.githubusercontent.com/19265427/26876725-1a8d5790-4ba5-11e7-99ad-63b5885ab2a9.png)

### View Registration

![view-register](https://user-images.githubusercontent.com/19265427/26876726-1a8f22fa-4ba5-11e7-9b16-1d3b66b88799.png)

## Module 2: Lab/Vitals

User can update the lab test details on this module.

- User has to select the patient details first

### Patient Search

![patient-search](https://user-images.githubusercontent.com/19265427/26876706-0c9bf556-4ba5-11e7-8fa2-07efe066806c.png)

### View Lab Details

![list-lab-vitals](https://user-images.githubusercontent.com/19265427/27117035-36ad14ea-50f2-11e7-9cba-c2472834ee32.png)

### Add Lab Details

![add-lab-vitals](https://user-images.githubusercontent.com/19265427/27117034-36a05912-50f2-11e7-9ee6-cd1285e08c14.png)

## Module 3: Visit Records

User can update their visit details on this module along with they can upload the lab test reports by image format. Also doctor notes can be included.

- User has to select the patient details first

### Patient Search

![patient-search](https://user-images.githubusercontent.com/19265427/26876706-0c9bf556-4ba5-11e7-8fa2-07efe066806c.png)

### View All Visit Records
User can download the existing uploads by clicking on the download link

![list-visit](https://user-images.githubusercontent.com/19265427/27117104-a308d886-50f2-11e7-9b94-c18e64b744e9.png)

### Add Visit Records

![add-visit](https://user-images.githubusercontent.com/19265427/27117103-a2b598e2-50f2-11e7-93e9-689d797cf67f.png)

## Module 4: Doctor Notes

Doctors can update the remarks and notes about the patient for a particular date

- User has to select the patient details first

### Patient Search

![patient-search](https://user-images.githubusercontent.com/19265427/26876706-0c9bf556-4ba5-11e7-8fa2-07efe066806c.png)

### View Notes

![list-dr-notes](https://user-images.githubusercontent.com/19265427/27117163-f2bd47ae-50f2-11e7-962d-d7b4a9259502.png)

### Add Notes

![add-dr-notes](https://user-images.githubusercontent.com/19265427/27117162-f2687a8a-50f2-11e7-8f8f-826a10a42f18.png)
