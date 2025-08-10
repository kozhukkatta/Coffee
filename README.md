☕ CoffeeBuddy
CoffeeBuddy is a basic PHP & MySQL coffee ordering platform (about 80% complete) inspired by Swiggy.
It allows users to browse coffee shops, view products, customize orders with add-ons, and place an order.

🚀 Current Features (Implemented)
👥 User Side
Browse available coffee shops

View and select coffee products from each shop

Customize orders with add-ons (milk type, toppings, sugar, etc.) or skip customization

Add products to cart and proceed to checkout

Responsive layout for mobile and desktop

🔐 Admin Side (Basic)
Add/Edit/Delete Shops

Add/Edit/Delete Products

Manage Categories and Add-ons

View Orders

🛠️ Tech Stack
Frontend: HTML5, CSS3, Bootstrap 5, FontAwesome

Backend: PHP (Core PHP, no framework)

Database: MySQL

Server: XAMPP / Apache (localhost)

📁 Project Structure
pgsql
Copy
Edit
coffee-buddy/
├── admin/                  # Admin panel files
├── user/                   # User-facing pages
├── classes/                # Data access class
├── config/                 # Configuration & DB connection
├── uploads/                # Uploaded images
├── assets/                 # CSS & images
└── README.md
🔧 Setup Instructions
Clone or download the project

Create a MySQL database (e.g., coffee)

Import the provided coffee.sql

Update config/autoload.php with DB credentials

Move the folder to htdocs and run via XAMPP/WAMP

Access: http://localhost/coffee-buddy/user/shop.php

📌 Notes
Additional items are stored as comma-separated IDs in the database

Session variables track product ID and user email

Some features and security measures are still pending (about 20% remaining work)

🚧 Remaining Work (20% Pending)
User authentication & registration

Order history & tracking

Payment gateway integration

Input validation & sanitization

Image upload in admin panel

📬 Contact
Project by: Pauljo George
Email: pauljogeorge45@gmail.com

