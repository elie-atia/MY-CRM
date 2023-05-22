# PHP CRM Project

This is a simple Customer Relationship Management (CRM) system built using PHP, jQuery, MySQLi, and AJAX.

## Directory Tree :cactus:
```bash
MY-CRM
├── app
│   ├── controllers
│   |   ├── CompanyController.php
│   |   └── InteractionController.php
│   ├── models
│   |   └── Company.php
│   └── views
│       └── header.php
├── config
│   └── database
│       └── db.php
├── core
│   ├── helpers
│   └── libraries
├── public
│   ├── assets
│   |   └── css
│   |   └── img
│   |   └── js
│   └── index.php
├── server
│   └── api
│       └── company.php
├── vendor
├── LICENSE
├── README.md
└── index.php
.
```


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
    -->run    use my_db;
    -->run    SHOW TABLES;
    -->connect via php file, using mysqli 
    -->Crud operation: CREATE TABLE, INSERT INTO, SELECT, UPDATE, DELETE FROM...
    --> run mysql server: open powershell as administrator and run this: 
                    - cd "C:\Program Files\MySQL\MySQL Server 8.0\bin" 
                    - mysqld


## To do

- [ ] Put in a separate page the form for adding a company (create the front view).  
- [ ] Do the same for the form of adding an interaction.  
- [ ] Do the same thing for the form for adding an email.  
- [ ] Modify the database to associate each user with predefined forms of mail (not common as there is currently).  
- [ ] In the send_mail page: display a form of mail by default.  
- [ ] In the send_mail page: retrieve the company_id from the query string of the url and put the email corresponding to the company in the "to" field.  
- [ ] In the send_mail page: implement the backend that sends the mails.  
- [ ] In the see-interaction page: display the interactions of the company_id (backend).  
- [ ] In the see-interaction page: display the last 10 interactions and add a "see more" button that loads the next 10 interactions (create the front view).  
- [ ] In the see-interaction page, add a switch, which allows you to put the last interactions in a table. in this same table, add sorting options (by date and event). Implement this optimally.  
- [ ] In the home page, also add trilling options in the companies table (filter by date and name).  
- [ ] Create a view for the crm admin, which allows to manage all users: display how many companies, form of email and interaction each user has.  


## References to build the view of this CRM
[Figma tutorial for Beginners: Complete Website from Start to Finish: https://www.youtube.com/watch?v=HZuk6Wkx_Eg]  
[generate color palettes: https://coolors.co/palettes/trending]  
[collections of images: for example: https://unsplash.com/collections/1414286/background-for-website]   [choose a font for the text: https://open-foundry.com/fonts]  