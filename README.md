# ☕ CoffeeBuddy

CoffeeBuddy is a web-based coffee ordering platform inspired by Swiggy, designed to provide a smooth user experience for browsing coffee shops, selecting products, and customizing with additional ingredients before checkout.

---

## 🚀 Features

### 👥 User Side
- Browse available coffee shops
- View and select coffee products from each shop
- Customize orders with additional ingredients (milk type, toppings, sugar, etc.)
- Add products to cart
- Place an order with selected add-ons
- Option to skip add-ons
- Responsive design compatible with mobile and desktop

### 🔐 Admin Side (assumed)
- Add/Edit/Delete Shops
- Add/Edit/Delete Products
- Manage Categories and Add-ons
- View Orders

---

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, Bootstrap 5, FontAwesome
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP / Apache (localhost)

---

## 📁 Project Structure

coffee-buddy/
├── admin/
│ └── [Admin Panel files for shop/product management]
├── user/
│ ├── nav1.php
│ ├── shop.php
│ ├── product.php
│ ├── additional.php
│ ├── process_selection.php
│ ├── thankyou.php
│ └── footer1.php
├── classes/
│ └── DataAccess.class.php
├── config/
│ └── autoload.php
├── uploads/
│ └── shop/
│ └── product/
├── assets/
│ ├── css/
│ └── img/
└── README.md


---

## 🔧 Setup Instructions

1. **Clone or download the repository**

2. **Configure database**
   - Create a MySQL database (e.g. `coffee`)
   - Import the database schema (provided as `coffee.sql`)
   - Update `config/autoload.php` with your DB credentials

3. **Run with XAMPP/WAMP**
   - Move the project folder to `htdocs`
   - Start Apache & MySQL via XAMPP
   - Visit: `http://localhost/coffee-buddy/user/shop.php`

4. **Login**
   - Dummy email: `sample@gmail.com`
   - You can replace session email in `shop.php` for testing purposes

---

## 📝 Notes

- All additional items selected during checkout are stored as comma-separated IDs in the database.
- Session variables are used for tracking the selected product ID and user email.
- Basic error handling is implemented for missing data, invalid sessions, and DB failures.

---

## 📌 TODO (Optional Enhancements)

- Add user authentication & registration
- Implement order history and tracking
- Enhance security with input validation & sanitization
- Integrate payment gateway
- Add image uploads via admin panel

---

## 🤝 Contributing

Feel free to fork this project and contribute. Pull requests are welcome!

---

## 📬 Contact

Project by: Pauljo George
Email: pauljogeorge45@gmail.com

