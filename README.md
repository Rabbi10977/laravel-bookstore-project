📚 Laravel Bookstore Application


This is a Bookstore Management System built with Laravel. It allows users to view, search, add, update, and delete books from the inventory. The application features a clean and responsive UI for managing a list of books with essential metadata such as title, author, stock, price, and ISBN.

![rabbi laravel](https://github.com/user-attachments/assets/9aa528a4-136f-4d46-acb9-1bb87d134ba2)


🚀 Features
✅ Core Functionalities
Book Listing
Displays all books in a table format with columns: ID, Title, Author, ISBN, Stock, Price.

Search Functionality
A search bar to filter books by title, author, or other attributes.

Add New Book
A New Book button to open a form where a new book can be added.

Update Book
Each book has an Update button to edit book details.

Delete Book
Each book has a Delete button to remove it from the system.

View Book Details
A Details button shows full information about the book.

🛠️ Tech Stack
Backend: Laravel 10+

Frontend: Blade Templates, Tailwind CSS / Bootstrap (optional)

Database: MySQL / SQLite

Authentication: Optional (can be added with Laravel Breeze or Jetstream)

⚙️ Setup Instructions
1. Clone the Repository
bash
Copy
Edit
git clone https://github.com/your-username/laravel-bookstore.git
cd laravel-bookstore

3. Install Dependencies
bash
Copy
Edit
composer install
npm install && npm run dev

5. Configure Environment
bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Edit the .env file to match your database credentials.


7. Run Migrations
bash
Copy
Edit
php artisan migrate
8. Seed Database (Optional)
You can add some sample books for testing.

bash
Copy
Edit
php artisan db:seed

6. Serve the Application
bash
Copy
Edit
php artisan serve
Visit http://localhost:8000 in your browser.


📂 Folder Structure
pgsql
Copy
Edit

app/
├── Http/
│   └── Controllers/
│       └── BookController.php
resources/

├── views/
│   ├── books/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   └── show.blade.php

routes/

└── web.php 

📝 License
This project is open-source and available under the MIT License. 
