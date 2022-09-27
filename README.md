# Blood-Donation-&-Management-System

A Blood Bank and Donor management system where the Donors can register themselves and the person in need of blood can contact the right donor. The admin has access to all the details.

# Instructions for running the Project

1. Install XAMPP or WAMPP.

2. Open XAMPP Control panal and start apache and mysql.
     
3. Download and Extract files in C:\xampp\htdocs..

4. Open any browser

5. Open link localhost/phpmyadmin

6. From the sidebar, Create a new database named as (blood_bank_database)

7. After creating database import the blood_bank_database.sql file in it present in the sql folder.

8. From the browser Go to http://localhost/BDMS/index.php to open User layout. 
     
# Admin Panel
   Open browser and type http://localhost/BDMS/admin/login.php to open Admin Login Panel.
   
   Enter Below Credentials to login to the Admin Panel.<br>
   <b> Username = </b> drdo<br>
   <b>Password = </b> drdo
   
# Error resolving

If you get an error of missing php environment variable, check if php is present in the environment variable by typing command php -v in the command prompt. If not then add the path of php folder present in xampp to the environment variable in the settings
