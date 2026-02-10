# ReliaNT – Business Website (PHP)

## 📌 Project Overview

This project is a **PHP-based business website** created for a **sole proprietorship**.  
The goal was to design and implement a **clean, functional, and easily deployable** website using a traditional web stack, focusing on clarity, maintainability, and real-world usability.

The project serves both as a **practical production-style website** and as a **portfolio project**, demonstrating the ability to build and structure a complete small-scale web application from scratch without relying on heavy frameworks.

The website is fully functional in its intended scope and reflects a conventional, well-understood approach to web development.

---

## 🌐 Website Description

The site provides basic informational and business-related pages, such as:
- Company / personal introduction
- Services and offers
- Packages and details
- References
- Contact functionality

The emphasis is on **simplicity and reliability**, following established patterns commonly used in small business websites.

---

## 🎯 Project Goals

- Create a real-world business website using PHP
- Practice server-side rendering and page-based site structure
- Implement database-backed content handling
- Apply a traditional LAMP-style workflow
- Build a presentable portfolio project with practical value

This project prioritizes **functionality and clarity** over experimental or cutting-edge solutions.

---

## 🧰 Tech Stack

- **Backend:** PHP (vanilla, no framework)
- **Frontend:** HTML, CSS, JavaScript (vanilla)
- **Database:** MySQL / MariaDB
- **Assets:** Custom CSS, fonts, images

No external frameworks were used to keep the system transparent and easy to understand.

---

## 🗂️ Project Structure

```
reliant-sm_site/
│
├── index.php          # Main landing page
├── about-us.php       # Introduction / about page
├── offers.php         # Services and offers
├── packages.php       # Packages and pricing
├── details.php        # Detailed descriptions
├── references.php     # References / previous work
├── config.php         # Configuration and database connection
├── mySQL_functions.php# Database helper functions
├── main.js            # Frontend interaction logic
├── css/               # Stylesheets
├── imgs/              # Image assets
├── fonts/             # Font files
└── template/          # Reusable layout components
```

The structure follows a **clear separation of concerns**, making the project easy to extend or maintain.

---

## ▶️ How to Run

### Requirements
- PHP 7.4 or newer (PHP 8.x recommended)
- MySQL or MariaDB
- Web server (Apache / Nginx)  
  *(or PHP built-in server for local testing)*

### Local Run (PHP built-in server)

```bash
php -S 127.0.0.1:8000
```

Then open:

```
http://127.0.0.1:8000/index.php
```

### Configuration

Edit `config.php` and provide the correct database credentials and site settings before running the project.

---

## 🧪 Testing

No automated tests are included.  
The website was tested manually in a browser during development.

---

## 🐞 Known Limitations

- No automated input validation or security hardening for all endpoints
- Error handling and logging are minimal
- No admin interface for managing content
- No automated deployment or CI setup

These limitations are acceptable for the project’s intended scope but should be addressed before production use.

---

## 🔧 Possible Improvements

- Introduce prepared statements (PDO) for improved database security
- Add input validation and sanitization
- Create an admin panel for content management
- Add logging and basic monitoring
- Provide a database schema file for easier setup
- Add automated tests

---

## 👤 Author

**Zupán Milán**  
PHP / Web Development portfolio project

---

## 📜 Notes

This project was created as a **realistic small business website** using traditional web technologies.  
The focus is on **solid fundamentals, maintainable structure, and practical applicability**, rather than modern frameworks or experimental design.
