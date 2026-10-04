# Medicine-Availability-Enquiry-System
Student Name: Vidhi Mahale
Roll no : MLU24F167 
Section : C3
Subject/Course: Database Management Systems (DBMS Mini Project)
Department: Computer Science and Engineering (AIML)
Development Environment: PHP, MySQL, HTML5, CSS3, XAMPP (macOS)

# Medicine-Availability-Enquiry-System


A web-based database application built using PHP and MySQL to manage and track patient enquiries for medicine availability.

## Tech Stack
* **Frontend:** HTML5, CSS3
* **Backend:** PHP
* **Database:** MySQL
* **Server:** XAMPP (Apache & MySQL)

## Features
* Interactive form for registering medicine enquiries.
* Database storage for patient details, medicine names, dosage, and quantities.
* Tabular view of all submitted records.
* Dynamic search functionality by patient name or medicine name.

## File Structure
* `config.php` - Database connection configuration
* `index.php` - Main enquiry form interface
* `save.php` - Handles form submissions and SQL insertion
* `view.php` - Displays all recorded enquiries
* `search.php` - Search and filter enquiries
* `style.css` - UI layout and custom styling
* `database.sql` - Database schema and sample data

## Database Setup
1. Open phpMyAdmin and create a database named `medicine_db`.
2. Import or run the SQL queries provided in `database.sql`.
3. Move the project folder to `htdocs` and access it via `http://localhost/Medicine_Enquiry/`.
