# Foodtopia_College_Project
College Project 3rd semester(Software Enginnering and Project Management) 
Welcome!!!
Foodtopia is an ambitious web based project which will host a variety of restaurants and cuisines all over our college campus. Foodtopia introduces you to new restaurants and 
dishes as well as letting you to order items while relaxing in your hostel room. It will notify you when your order is ready so that you don’t have to wait and stand infront of 
the restaurant while it is being cooked, which is great as it will prevent a possibility of a crowd in this pandemic.

Steps to install:
1) First install Xampp from this link: https://www.apachefriends.org/download.html
2) After downloading, go to the directory in which Xampp is downloaded. And then, copy the "Foodtopia_PHP" folder of the repository and paste in the "htdocs" folder. And copy the 
"foodtopia" folder located in the "Database" folder in the repository in "mysql/data" folder.
3) Now, open the Xampp interface in Administrator Mode and click on the Config button of MySQL and then on "my.ini" option. "my.ini" file opens in notepad. 
Go to line 20 (Can be some other line also) and change the port to 8086, like this:

"#password = your_password


port = 8086

…"

Also, change the port to 8086 on line 28 of my.ini file, like this:

"# The MySQL server

[mysqld]

port= 8086

…"

Now, go to xampp\phpMyAdmin (Your directory where Xampp is installed. It can be different for your computer, depends on where you have installed the Xampp). Open the 
"config.inc.php" file.

Below the user, password and extension lines at the top of the file(below line 23), add this line:

$cfg['Servers'][$i]['port'] = 8086;

Save the changes.


3) Open the Xampp server and start the Apache server and MySQL.
4) On the url type box of the browser, type "Foodtopia_PHP". A link to "Start Page.php" appears. Click on it. This will start the web application and we are ready to go.



