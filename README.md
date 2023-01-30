# GCP VM Lampstack
## Basic LAMP stack environment built using the following:
- Linux
- Apache
- MySQL
- PHP

First create a virtual machine through Compute Engine on GCP.

Recommend using https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04 to create the basis of your lamp stack.

The main points are:

Install Apache2

        sudo apt install apache2

Install mysql-server

        sudo apt install mysql-server

Install PHP

        sudo apt install php libapache2-mod-php php-mysql

Create a virtual host for your domain

        sudo mkdir /var/www/your_domain


# Oxford Dictionary Search bar

Find a .sql file or make one of your own to import onto the VM. In this case I used: https://sourceforge.net/p/mysqlenglishdictionary/code/ci/master/tree/dictionaryStudyTool.sql

Made an index.php file in /var/www/mydomain/ in virtual machine and included html to design the search bar page.

Made a search.php file in /var/www/mydomain/ to define the function of the search bar and connect it to my mysql database. It will match databse entries with a given word or phrase and displays the results. I followed the guide from: https://owlcation.com/stem/Simple-search-PHP-MySQL
