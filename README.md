# burger-hub
Food ordering Website(Non-responsive).
Main file:login.php
Technologies used:HTML5,CSS3,BOOTSTRAP5,PHP,MYSQL
User will login first then can access to other pages.
Cart cannot be empty.
PHP mailer is used to send order details to admin gmail.
Customer Record will be saved in MYSQL database in a way like:
When customer login his name table will be made in database and when 
the order will be confirmed his username(unique) table will be made in database and all the 
order record will be copied in that table and name table 
data will be delete to show the cart empty(after order confirmation).
When user logouts ,his name table will be deleted but username table(contains all order details of that customer) will remain in database.
Admin can see all order details using admin.php.
