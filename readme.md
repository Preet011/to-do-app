

## Overview
This project is a simple task manager built using PHP and the MVC (Model-View-Controller) pattern. It allows users to add and delete tasks and displays a list of tasks.

## Project Structure
- **config/**: Database configuration (`Database.php`).
- **controllers/**: Handles user inputs and interactions (`TaskController.php`).
- **models/**: Database interactions (`Task.php`).
- **views/**: HTML and PHP files to display content (`tasks.php`, `add_task.php`).
- **inc/**: Reusable header and footer files (`header.php`, `footer.php`).
- **public/**: Static files such as CSS and JavaScript (`css/style.css`, `js/scripts.js`).

## Setup
1. Clone the repository.
2. Import the provided SQL database into MySQL.
3. Update database settings in `config/Database.php`.
4. Run the application on a web server.

## Choices and Decisions
- **MVC Pattern**: Adopted to ensure a clean separation of concerns. This makes the codebase modular and easier to maintain.
- **Folder Structure**: Organized into distinct folders for configuration, controllers, models, views, and public assets to improve modularity and maintainability.
- **Database Configuration**: Encapsulated the database connection logic in the `Database.php` class for reusability and ease of management.
- **CSS and JavaScript**: Updated the CSS for a modern, clean look, and added JavaScript for better form validation and task deletion confirmation.

## Breakpoints and Challenges
- **File Paths and Includes**: Ensured correct file paths for include statements by using `__DIR__` for accurate relative paths.
- **CSS Not Applying**: Fixed the issue by verifying the correct path to the CSS file and ensuring it was linked properly in `header.php`.
- **JavaScript Integration**: Added classes to HTML elements. Ensured the script was correctly linked in `header.php`.

## Adaptation 
Instead of using Prisma, Yarn, Docker, React, and NestJS as specified in the original test instructions, I used technologies that I am more familiar with: 
- **PHP**: For server-side logic and handling HTTP requests. 
- **MySQL**: For database management.
- **JavaScript**: For client-side interactions. 
- **HTML & CSS**: For structuring and styling the web pages.
