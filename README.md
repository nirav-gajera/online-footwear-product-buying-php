# 🦶 Shoeholic - Online Footwear E-Commerce Platform

<div align="center">

![License](https://img.shields.io/badge/License-Open%20Source-blue)
![PHP](https://img.shields.io/badge/PHP-v7.0+-purple)
![MySQL](https://img.shields.io/badge/MySQL-v5.7+-red)
![Status](https://img.shields.io/badge/Status-Active-brightgreen)

**A responsive core PHP e-commerce platform specializing in footwear products with multiple categories and brands**

[Features](#-features) • [Tech Stack](#-tech-stack) • [Installation](#-installation) • [Project Structure](#-project-structure) • [Usage](#-usage) • [Contributing](#-contributing) • [Contact](#-contact)

</div>

---

## 📋 Table of Contents
- [Overview](#overview)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Requirements](#-requirements)
- [Installation](#-installation)
- [Project Structure](#-project-structure)
- [Key Modules](#-key-modules)
- [Database Setup](#-database-setup)
- [Configuration](#-configuration)
- [Usage Guide](#-usage-guide)
- [API Endpoints](#-api-endpoints)
- [Contributing](#-contributing)
- [License](#-license)
- [Contact](#-contact)

---

## Overview

**Shoeholic** is a fully functional e-commerce web application built with **Core PHP** designed specifically for selling footwear products online. The platform features a complete shopping experience with product browsing, cart management, checkout, user authentication, and an administrative dashboard for managing products, orders, users, and categories.

### ✨ Key Highlights
- **Responsive Design**: Mobile-friendly interface that works seamlessly across all devices
- **Secure Authentication**: User registration, login, and password management with OTP verification
- **Complete E-commerce Workflow**: From product discovery to order confirmation
- **Admin Dashboard**: Comprehensive management system for administrators
- **Multiple Payment Support**: Ready for payment gateway integration
- **Product Management**: Categories, subcategories, brands, and detailed product listings
- **Order Tracking**: Users can view their order history and status

---

## 🎯 Features

### 👥 User Features
- **User Authentication**
  - Registration with email validation
  - Secure login/logout functionality
  - Password reset with OTP verification
  - Account profile management

- **Shopping Experience**
  - Browse products by category and brand
  - Advanced product filtering and search
  - Product comparison feature
  - Wishlist/Favorites management
  - Shopping cart with add/remove functionality
  - Checkout process

- **Order Management**
  - Place orders
  - View order history
  - Track order status
  - Order details view

- **User Account**
  - Edit profile information
  - Manage addresses
  - View order history
  - Wishlist management

- **Contact & Feedback**
  - Contact us form
  - Customer feedback system
  - Multiple support pages

### 🛠️ Admin Features
- **Dashboard & Reports**
  - Admin dashboard overview
  - Order reports with acceptance/rejection
  - User activity reports
  - Sales analytics

- **Product Management**
  - Add/edit/delete products
  - Manage product images
  - Manage categories and subcategories
  - Manage brands

- **Order Management**
  - View all orders
  - Accept/reject orders
  - View detailed order information
  - Generate order reports

- **User Management**
  - View registered users
  - User reports
  - Manage user accounts

- **Content Management**
  - Upload product gallery images
  - Manage website content

---

## 🛠 Tech Stack

### Backend
- **PHP 7.0+** - Server-side scripting language
- **MySQL 5.7+** - Database management system
- **Core PHP** - No frameworks (pure PHP)

### Frontend
- **HTML5** - Markup structure
- **CSS3** - Styling and responsive design
- **JavaScript & jQuery** - Client-side interactivity
- **Bootstrap** - Responsive UI framework (implied from structure)

### Libraries
- **PHPMailer** - Email sending functionality
- **jQuery** - JavaScript library for DOM manipulation

### Tools & Utilities
- **SQL Database** - shoeholic.sql / shoe_holic.sql

---

## ⚙️ Requirements

Before you begin, ensure you have the following installed:

- **PHP 7.0 or higher**
- **MySQL Server 5.7 or higher**
- **Apache Web Server 2.4+**
- **Browser**: Modern web browser (Chrome, Firefox, Safari, Edge)
- **Text Editor/IDE**: VS Code, PHPStorm, or Sublime Text
- **Git** (optional, for version control)

---

## 📦 Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/nirav-gajera/online-footwear-product-buying-php.git
cd online-footwear-product-buying-php
```

### Step 2: Setup Web Server
1. Copy the project folder to your web server root:
   - **Apache (XAMPP/WAMP)**: Copy to `htdocs/` or `www/`
   - **Access URL**: `http://localhost/online-footwear-product-buying-php/`

### Step 3: Create Database
1. Open **phpMyAdmin** (typically at `http://localhost/phpmyadmin`)
2. Create a new database named `shoeholic`
3. Go to the Import tab
4. Select and import the database file:
   - Either `shoeholic/shoeholic.sql` or `shoeholic/shoe_holic.sql`
5. Click Import

### Step 4: Configure Database Connection
Update the database credentials in the configuration files:

**File**: `shoeholic/config/conn.php` or `shoeholic/config/connection.php`
```php
<?php
$host = 'localhost';
$dbname = 'shoeholic';
$user = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}
?>
```

### Step 5: Set File Permissions
```bash
chmod 755 shoeholic/Images/
chmod 755 shoeholic/Client1/Images/
chmod 755 shoeholic/admin/Images/
```

### Step 6: Access the Application
- **Client Side**: `http://localhost/online-footwear-product-buying-php/shoeholic/Client1/index.php`
- **Admin Panel**: `http://localhost/online-footwear-product-buying-php/shoeholic/admin/login.php`

---

## 📁 Project Structure

```
online-footwear-product-buying-php/
│
├── shoeholic/                          # Main application folder
│   ├── config/                         # Configuration files
│   │   ├── conn.php                    # Database connection
│   │   └── connection.php              # Alternative connection file
│   │
│   ├── Client1/                        # Client-side (User Interface)
│   │   ├── index.php                   # Home page
│   │   ├── login.php                   # User login
│   │   ├── register.php                # User registration
│   │   ├── shop.php                    # Product listing
│   │   ├── product details.php         # Product detail page
│   │   ├── cart.php                    # Shopping cart
│   │   ├── checkout.php                # Checkout process
│   │   ├── account.php                 # User account
│   │   ├── myorder.php                 # User orders
│   │   ├── wishlist.html               # Wishlist page
│   │   ├── contactus.php               # Contact form
│   │   ├── feedback.php                # Feedback form
│   │   ├── aboutus.php                 # About page
│   │   ├── forgot_password.php         # Forgot password
│   │   ├── resetpassword.php           # Password reset
│   │   ├── header.php                  # Header component
│   │   ├── footer.php                  # Footer component
│   │   ├── logout.php                  # Logout functionality
│   │   ├── Images/                     # Product images
│   │   ├── assets/                     # CSS, JS, fonts
│   │   ├── lib/                        # Third-party libraries
│   │   └── PHPMailer/                  # Email library
│   │
│   ├── admin/                          # Admin Panel
│   │   ├── index.php                   # Admin dashboard
│   │   ├── login.php                   # Admin login
│   │   ├── logout.php                  # Admin logout
│   │   ├── connection.php              # Database connection
│   │   │
│   │   ├── Area.php                    # Delivery area management
│   │   ├── areainsert.php              # Add area
│   │   ├── areadelete.php              # Delete area
│   │   ├── areaupdate.php              # Update area
│   │   │
│   │   ├── brand.php                   # Brand management
│   │   ├── brandinsert.php             # Add brand
│   │   ├── branddelete.php             # Delete brand
│   │   ├── brandupdate.php             # Update brand
│   │   │
│   │   ├── category.php                # Category management
│   │   ├── categoryinsert.php          # Add category
│   │   ├── categorydelete.php          # Delete category
│   │   ├── categoryupdate.php          # Update category
│   │   │
│   │   ├── sub-category.php            # Subcategory management
│   │   ├── sub-categoryinsert.php      # Add subcategory
│   │   ├── sub-categorydelete.php      # Delete subcategory
│   │   ├── sub-categoryupdate.php      # Update subcategory
│   │   │
│   │   ├── product.php                 # Product management
│   │   ├── productinsert.php           # Add product
│   │   ├── productdelete.php           # Delete product
│   │   ├── productupdate.php           # Update product
│   │   │
│   │   ├── gallery.php                 # Gallery management
│   │   ├── galleryinsert.php           # Add gallery images
│   │   ├── gallerydelete.php           # Delete gallery images
│   │   ├── galleryupdate.php           # Update gallery images
│   │   │
│   │   ├── order.php                   # Order management
│   │   ├── order detail.php            # Order details
│   │   ├── order_accept.php            # Accept order
│   │   ├── order_reject.php            # Reject order
│   │   │
│   │   ├── user.php                    # User management
│   │   ├── User1.php                   # User details
│   │   │
│   │   ├── contact.php                 # Contact inquiries
│   │   ├── feedback.php                # User feedback
│   │   │
│   │   ├── Reports/                    # Report generation
│   │   │   ├── orderreport.php         # Order reports
│   │   │   └── userreport.php          # User reports
│   │   │
│   │   ├── upload.php                  # File upload handling
│   │   ├── profile.php                 # Admin profile
│   │   ├── resetpassword.php           # Password reset
│   │   ├── header.php                  # Admin header
│   │   ├── footer.php                  # Admin footer
│   │   ├── Images/                     # Admin images and brand logos
│   │   ├── assets/                     # Admin CSS, JS
│   │   ├── lib/                        # Libraries
│   │   └── PHPMailer/                  # Email library
│   │
│   ├── Images/                         # Shared images folder
│   ├── shoeholic.sql                   # Database backup file
│   └── shoe_holic.sql                  # Alternative database backup
│
└── README.md                           # This file
```

---

## 🎯 Key Modules

### 1. **Authentication Module**
- User registration and email verification
- Secure login system
- Forgot password with OTP
- Session management
- Admin authentication

### 2. **Product Management**
- Product catalog with categories and subcategories
- Brand management
- Product details and specifications
- Image gallery for products
- Inventory management

### 3. **Shopping Cart & Checkout**
- Add/remove items from cart
- Update quantity
- Calculate totals and tax
- Checkout with delivery address
- Order confirmation

### 4. **Order Management**
- Order placement and tracking
- Order history for users
- Admin order acceptance/rejection
- Order details view
- Order status tracking

### 5. **User Account Management**
- Profile update
- Address management
- Order history
- Wishlist/Favorites
- Account settings

### 6. **Admin Dashboard**
- Product CRUD operations
- Category/Subcategory management
- Brand management
- Delivery area management
- User management
- Order management and reporting
- Gallery management

### 7. **Communication**
- Contact form submission
- Customer feedback system
- Email notifications (via PHPMailer)

---

## 🗄️ Database Setup

### Database Files
Two database backup files are available:
- `shoeholic/shoeholic.sql`
- `shoeholic/shoe_holic.sql`

### Key Tables
The database includes the following main tables:
- `users` - User accounts and profiles
- `products` - Product information
- `categories` - Product categories
- `subcategories` - Product subcategories
- `brands` - Brand information
- `orders` - Order records
- `orderdetails` - Order line items
- `cart` - Shopping cart items
- `wishlist` - User wishlist items
- `feedback` - Customer feedback
- `contact` - Contact inquiries
- `admin` - Administrator accounts
- `gallery` - Product gallery images
- `area` - Delivery areas

### Import Database
```sql
-- Import using MySQL command line
mysql -u root -p shoeholic < shoeholic/shoeholic.sql

-- Or use phpMyAdmin GUI
```

---

## ⚙️ Configuration

### Database Configuration
Edit the connection files to match your environment:

**Path**: `shoeholic/config/conn.php`
```php
$host = 'localhost';
$dbname = 'shoeholic';
$user = 'root';
$password = '';
```

### Email Configuration
For PHPMailer setup, configure SMTP settings in relevant email sending files:
```php
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'your-email@gmail.com';
$mail->Password = 'your-password';
```

### File Upload Configuration
Ensure the following directories have proper write permissions:
- `shoeholic/Images/`
- `shoeholic/Client1/Images/`
- `shoeholic/admin/Images/`

---

## 🚀 Usage Guide

### For Users (Client Side)

#### 1. **Browse Products**
   - Visit the homepage
   - Navigate to Shop section
   - Filter by category, brand, or price
   - View detailed product information

#### 2. **User Registration**
   - Click on "Register" or "Sign Up"
   - Fill in the registration form
   - Verify email address
   - Set password

#### 3. **Login**
   - Click "Login"
   - Enter email and password
   - Access your account dashboard

#### 4. **Shopping**
   - Click "Add to Cart" on products
   - View cart items
   - Update quantities
   - Proceed to checkout

#### 5. **Checkout**
   - Review cart items
   - Enter delivery address
   - Select payment method
   - Confirm order

#### 6. **Account Management**
   - View profile information
   - Update account details
   - View order history
   - Manage wishlist

#### 7. **Contact & Support**
   - Use "Contact Us" form for inquiries
   - Submit feedback and suggestions
   - View FAQ and About Us

### For Administrators (Admin Panel)

#### 1. **Login to Admin**
   - Navigate to `/shoeholic/admin/login.php`
   - Enter admin credentials
   - Access admin dashboard

#### 2. **Manage Products**
   - Go to Products section
   - Add new products
   - Edit existing products
   - Delete products
   - Upload product images

#### 3. **Manage Categories**
   - Create categories
   - Create subcategories
   - Edit categories
   - Delete categories

#### 4. **Manage Brands**
   - Add new brands
   - Upload brand logos
   - Update brand information
   - Delete brands

#### 5. **Manage Orders**
   - View all orders
   - Accept or reject orders
   - View order details
   - Generate reports

#### 6. **Manage Users**
   - View registered users
   - View user details
   - Generate user reports
   - View user activity

#### 7. **View Reports**
   - Order reports
   - User reports
   - Sales analytics
   - Generate custom reports

---

## 📡 API Endpoints

### Authentication
- `POST /shoeholic/Client1/login.php` - User login
- `POST /shoeholic/Client1/register.php` - User registration
- `POST /shoeholic/Client1/forgot_password.php` - Forgot password
- `GET /shoeholic/Client1/logout.php` - User logout

### Products
- `GET /shoeholic/Client1/shop.php` - Get all products
- `GET /shoeholic/Client1/products.php` - Get filtered products
- `GET /shoeholic/Client1/product%20details.php?id=X` - Get product details

### Shopping Cart
- `POST /shoeholic/Client1/cart%20insert.php` - Add to cart
- `GET /shoeholic/Client1/cart.php` - View cart
- `POST /shoeholic/Client1/cartdelete.php` - Remove from cart

### Orders
- `POST /shoeholic/Client1/checkout.php` - Create order
- `GET /shoeholic/Client1/myorder.php` - View user orders

### User Account
- `GET /shoeholic/Client1/account.php` - View account
- `POST /shoeholic/Client1/account.php` - Update account

---

## 🤝 Contributing

We welcome contributions from the community! Here's how you can help:

### Steps to Contribute
1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/AmazingFeature`)
3. **Commit** your changes (`git commit -m 'Add some AmazingFeature'`)
4. **Push** to the branch (`git push origin feature/AmazingFeature`)
5. **Open** a Pull Request

### Areas to Contribute
- Bug fixes and improvements
- Feature enhancements
- Code optimization
- Documentation improvements
- Localization/Translation
- UI/UX improvements
- Security enhancements

### Coding Standards
- Follow PSR-12 PHP coding standards
- Write clear, readable code
- Add comments for complex logic
- Test your changes before submitting
- Write meaningful commit messages

---

## 📄 License

This project is open source and available under the MIT License.

---

## 📞 Contact & Support

### Get in Touch
- **Instagram**: [@mr._nirav_09](https://www.instagram.com/mr._nirav_09/)
- **GitHub**: [@nirav-gajera](https://github.com/nirav-gajera)
- **Email**: Contact via GitHub

### For Detailed Documentation
Please visit Instagram profile for complete project documentation and support.

### Issues & Bugs
- Report issues on GitHub Issues
- Provide detailed description and screenshots
- Include steps to reproduce the bug

---

## 🌟 Features Roadmap

- [ ] Mobile application (iOS/Android)
- [ ] Payment gateway integration (Stripe, PayPal)
- [ ] Advanced analytics dashboard
- [ ] Email notifications enhancement
- [ ] API versioning
- [ ] Coupon and discount system
- [ ] Review and rating system
- [ ] Inventory management
- [ ] Multi-language support
- [ ] Dark mode theme

---

## 📊 Statistics

- **Repository Stars**: ![Stars](https://img.shields.io/github/stars/nirav-gajera/online-footwear-product-buying-php)
- **Repository Forks**: ![Forks](https://img.shields.io/github/forks/nirav-gajera/online-footwear-product-buying-php)
- **Repository Watchers**: ![Watchers](https://img.shields.io/github/watchers/nirav-gajera/online-footwear-product-buying-php)

---

<div align="center">

### Made with ❤️ by Nirav Gajera

**If you find this project helpful, please consider giving it a ⭐ on GitHub!**

[Back to Top](#-shoeholic---online-footwear-e-commerce-platform)

</div>
