
# Library Management System

  Library Management System is a web application based on a PHP MINI framework, CSS and Bootstrap. The application is extremely simple to
  understand and easy to use with lots of features. There are two types of users:Admin and Student.The admin manages the
  student details as well as the books details like adding, editing, updating and deleting, and also register books to a
  particular student who borrows them. The student can login and check his/her personal details as well as the books details
  he/she borrowed from the library and the total charges to pay which are calculated automatically (NPR. 5 per day per book)
  after the returning date exceeds.

# How To Run The Project
  
  To run the project, you must have installed XAMPP and SQLyog database.
  
  - Start the XAMPP and SQL server.
  - Create a database named 'mini' and import sql file/run a script query 'mini-3' located inside the project folder.
  - Copy the project folder inside 'xampp/htdocs/'
  - Then you are ready to go, open a browser and go to URL "http://localhost/Library_Management_System/" 
  
   For Admin's Login, 
   	username = staff
	password = 12345

   For Student's Login, you have to sign up first. 
	Note: While signing up, you have to provide Student ID as well which you get only after the staff registers your
	details. You can't sign up without student ID.
	