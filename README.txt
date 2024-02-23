INSTRUCTIONS: HOW TO SETUP THE DATABASE?

#1:	create a database with the name "schoolmanagementsystem"
	/*note: you can copy and paste names to reduce errors with misspelled names*/

#2:	create a user named "EDUprojectADMI" to access the DB
	/*connect to your MySQL database server using a MySQL client like "mysql" command-line tool or MySQL Workbench*/
	/*copy and run the commands below to create the user and grant priveleges to them for the DB we created earlier*/

	CREATE USER 'EDUprojectADMIN'@'localhost' IDENTIFIED BY 'EDUAdmin';
	ALTER USER 'EDUprojectADMIN'@'localhost' IDENTIFIED WITH mysql_native_password BY 'EDUAdmin';
	USE schoolmanagementsystem;
	GRANT ALL PRIVILEGES ON schoolmanagementsystem.* TO 'EDUprojectADMIN'@'localhost';
	FLUSH PRIVILEGES;
	

#3	/*check if all privileges have been granted correctly*/
	SHOW GRANTS FOR 'EDUprojectADMIN'@'localhost';


INSTRUCTIONS: HOW TO RUN THE APP?

in your VS code project terminal preferebly, run the code below

composer install	/*to install the composer dependencies*/
php artisan migrate	/*to migrate the tables*/
php artisan db:seed	/*Run seeder*/

php artisan serve	/*to finally, run the project, It will start the application and give you a URL*/