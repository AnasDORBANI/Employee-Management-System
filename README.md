<br />
<p align="center">
   <img src="https://github.com/AnasDORBANI/Employee-Management-System/blob/main/images/banner.png" alt="banner">
</p>

<!-- TABLE OF CONTENTS -->
# Table of Contents

* [About the Project](#about-the-project)
* [Folder Structure](#folder-structure)
* [Requirements](#requirements)
    * [Use an All-in-One package](#use-an-all-in-one-package)
    * [Database Configuration](#database-configuration)
* [Usage](#usage)
    * [After installing All-In-One package](#after-installing-all-in-one-package)
    * [What can I do with this site](#what-can-i-do-with-this-site)
* [Used Language and Frameworks](#used-language-and-frameworks)
* [Contributing](#contributing)
* [Contact](#contact-us)


# About the Project

This is an employee management system based on html, bootstrap, js, php and mysql, there goal is to manage employees by adding new employees, editing there infos if it's wrong, and at last removing non-existing employees.

# Folder structure

use tree command in your terminal to see the folder structure.

```bash
tree
```
```bash
.
├── images
│   └── banner.png
├── main
│   ├── addEmpl.php
│   ├── addForm.php
│   ├── allEmpls.php
│   ├── delEmpl.php
│   ├── editEmpl.php
│   ├── editForm.php
│   ├── footer.php
│   ├── formAddEmpl.php
│   ├── header.php
│   ├── index.php
│   ├── login.html
│   ├── logout.php
│   ├── mysqlConnect.php
│   ├── selectEmpl.php
│   ├── selectEmpls.php
│   └── verif.php
└── README.md

2 directories, 18 files
```

# Requirements

## Use an All-In-One package

All-in-one packages are available for Windows which contain Apache, PHP, MySQL, and many other dependencies in a single installation file such as XAMPP, WampServer and LAMP.

## Database Configuration
Launch your server then go to your **phpmyadmin** page in your browser then setup your database like below.

Fisrt you need to create **GRH** DataBase,
```
CREATE DATABASE GRH;
```
then create the main tables. 
We have **Users** table for login
```
CREATE TABLE `GRH`.`Users` ( `numUser` INT NOT NULL AUTO_INCREMENT , `login` VARCHAR(100) NOT NULL , `password` VARCHAR(32) NOT NULL , `type` ENUM('AD','US') NOT NULL , PRIMARY KEY (`numUser`));
```
**NOTE:** create the users you want to login with and put a hashed password using md5 function.

and define services in the **Services** table
```
CREATE TABLE `GRH`.`Services` ( `numServ` INT NOT NULL AUTO_INCREMENT , `designationServ` VARCHAR(100) NOT NULL , `descriptionServ` VARCHAR(100) NOT NULL , PRIMARY KEY (`numServ`));
```
end last you need to create **Employes** table
```
CREATE TABLE `GRH`.`Employes` ( `code` INT NOT NULL AUTO_INCREMENT ,  `nom` VARCHAR(100) NOT NULL ,  `prenom` VARCHAR(100) NOT NULL ,  `sexe` ENUM('M','F') NOT NULL ,  `adresse` TEXT NOT NULL ,  `dateNaissance` DATE NOT NULL ,  `numServ` INT NOT NULL ,    PRIMARY KEY  (`code`), FOREIGN KEY (`numServ`) REFERENCES `Services`(`numServ`) ON DELETE RESTRICT ON UPDATE RESTRICT);
```

# Usage

## After installing All-In-One package

Move this repository in your **htdocs** folder, after that put the URL below in your browser

```
http://localhost/Employee-Management-System/main/
```
## What can I do with this site

This site helps you to manage your employees by creating a simple user interface where you can add new employees, edit their information and finally remove your old employees who are no longer working with you.

# Used Language and Frameworks
[![General badge](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](#used-language)
[![General badge](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](#used-language)
[![General badge](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)](#used-language)
[![General badge](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](#used-language)
[![General badge](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](#used-language)
[![General badge](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](#used-language)


<!---->

# Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

# Contact Us
[![General badge](https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:anasdorbani@gmail.com)
[![General badge](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/anas-dorbani)
