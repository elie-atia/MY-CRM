# PHP CRM Project

This is a simple Customer Relationship Management (CRM) system built using PHP, jQuery, MySQLi, and AJAX.

## Setup

To run this project locally, follow the steps below:

1. Clone or download this repository to your local machine.  
2. Set up a local web server (like WAMP, XAMPP, MAMP, LAMP) or use the PHP Server extension in Visual Studio Code.  
3. Move the project to the web server's root directory.  
4. Create a MySQL database.  
5. Update the database configuration in `config/database/db.php` file with your database details.  
6. Start your web server.  
7. Open a web browser and navigate to `http://localhost/your-directory-name`.  



## Features

- Fetch and display contacts from the database.  
- Add new contacts.  
- Update existing contacts.  
- Delete contacts.  


## Technologies Used

- Backend: PHP  
- Database: MySQLi  
- Frontend: HTML, CSS, JavaScript (with jQuery and AJAX)  


## License

MIT

## Usefull commands

    -->open mysql shell. 
    -->run:   \sql 
    -->run:   \connect elie@localhost
    -->run    CREATE DATABASE my_db;
    -->run    SHOW DATABASES;
    -->connect via php file, using mysqli 
    -->Crud operation: CREATE TABLE, INSERT INTO, SELECT, UPDATE, DELETE FROM...
    --> run mysql server: open powershell as administrator and run this: 
                    - cd "C:\Program Files\MySQL\MySQL Server 8.0\bin" 
                    - mysqld