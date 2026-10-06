# 🌍 Tour and Travel

A dynamic **Tour and Travel Management System** developed using **PHP and MySQL**. The project provides a platform for users to explore travel destinations, register and log in, make bookings, submit reviews, and manage their profiles.

It also includes an **Admin Dashboard** for managing destinations, users, bookings, reviews, and contact messages.

## ✨ Features

### 👤 User Features

* User registration and login
* Email verification
* User profile management
* Browse travel destinations
* Explore different tour categories
* Book tour packages
* Submit reviews
* Contact the travel service
* View travel information and packages

### 🧑‍💼 Admin Features

* Admin dashboard
* Manage users
* Add and manage destinations
* Delete destinations
* Manage tour bookings/orders
* Manage customer reviews
* Manage contact messages
* Upload destination images

### 🌎 Travel Features

* Historical tours
* Weekend tours
* Holiday tours
* Special tours
* Featured destinations
* Top travel deals
* Destination gallery
* Tour package information

## 🛠️ Technologies Used

* **PHP**
* **MySQL**
* **HTML5**
* **CSS3**
* **JavaScript**
* **Bootstrap**
* **Swiper.js**
* **Font Awesome**
* **XAMPP / Apache**
* **Git & GitHub**

## 🗄️ Database

The project uses **MySQL** for storing application data.

The database SQL file is included in:

```text
Database/
└── travel.sql
```

The database is used for managing information such as:

* Users
* Destinations
* Bookings
* Reviews
* Contact messages

## 📁 Project Structure

```text
Tour-and-Travel/
│
├── Database/
│   └── travel.sql
│
├── dashboard/
│   ├── AddDestination.php
│   ├── AddReviews.php
│   ├── DestinationControl.php
│   ├── Order_list.php
│   ├── Users.php
│   ├── contact_list.php
│   ├── destination_delete-inline.php
│   ├── sidenav.php
│   └── style.css
│
├── css/
├── js/
├── image/
│
├── about.php
├── book.php
├── config.php
├── contact.php
├── destination.php
├── footer.php
├── gallery.php
├── index.php
├── login.php
├── navbar.php
├── register.php
├── update_profile.php
└── verifymail.php
```

## ⚙️ Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/tamanna141101/Tour-and-Travel.git
```

### 2. Move the Project

Place the project folder inside your XAMPP `htdocs` directory:

```text
xampp/
└── htdocs/
    └── Tour-and-Travel/
```

### 3. Start XAMPP

Start the following services from XAMPP Control Panel:

* **Apache**
* **MySQL**

### 4. Create the Database

Open **phpMyAdmin** and create a database named:

```text
tra
```
