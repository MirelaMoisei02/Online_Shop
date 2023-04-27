# Online Makeup Shop

### Introduction

This project is a web-based application that enables customers to browse through a range of products, log in to their accounts, and allows administrators to manage product inventory.


### Technologies used
HTML5 <br />
CSS <br />
JavaScript <br />
MySQL <br />
PHP <br />
  

### Before running the project

  you need to:
* create minimum 5 records in product table 
* create minimum 1 record in admin table
* create 2 folders named "photos" and "uploads"
* add some pictures in folder "photos" in jpg format
* change the name of the jpg format to match the name of the pictures placed in the "photos". You only need to change in cart.html and Product_Details.html.
    

### How to run the project

I used XAMPP with Apache and MySQL module. Here is the database I created:

Name of Database: shop_db

product table: product_data
| attributes | type |
| ---------- | ---- |
| id_p | INT(8)	Primary key |
| image_p | LONGBLOB |
| name_p | VARCHAR(50) |
| price_p | VARCHAR(50) |
| amount_p | INT(8) |
| link_p | VARCHAR(100) |

user table: user_data
| attributes | type |
| ---------- | ---- |
| id_u | INT(8)	Primary key |
| username_u | VARCHAR(50) |
| email_u | VARCHAR(50) |
| password_u | VARCHAR(50) |

admin table: adm_data
| attributes | type |
| ---------- | ---- |
| id_a | INT(8)	Primary key |
| username_a | VARCHAR(50) |
| password_a | VARCHAR(50) |
              

### Licence

  XAMPP GPL
