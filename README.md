
# PHP Contact Form with HTML5 Email

![Screenshot_46](https://user-images.githubusercontent.com/47697490/111340713-141a6f00-86a3-11eb-8ab2-8f910f1820d5.png)
![Screenshot_45](https://user-images.githubusercontent.com/47697490/111339508-03b5c480-86a2-11eb-9172-1074e0c3dd50.png)

## Basic PHP Contact Form

### Prerequisites
XAMPP - Apache web server Code editor 127.0.0.1

# Database PhpMyAdmin
http://localhost/phpmyadmin/
### create a new data TABLE
``` SELECT * FROM `roman_data_table` ```
- SQL 
``` SELECT fname,lname,email,comment FROM roman_data_table ```

### create a Users name 
-privileges
- Add user account & password
``` roman_user_account ```

### + roman_data_table
SQL
```
CREATE TABLE roman_data_table(
PersonID int,
fname varchar(20),
lname varchar(20),
email varchar(20),
);
```
```
-$host = "localhost";
-$databasebUser= "roman_user_account";
-$databasePwd="123";
-$dataBaseName= "roman_official_database";
```
