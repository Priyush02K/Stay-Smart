# 🏨 StaySmart - Hotel Management System

A scalable and dynamic **Hotel Management System** built with **PHP & MySQL**, designed to manage hotels, rooms, bookings, and users effectively. Includes **admin and sub-admin dashboards**, real-time booking status, data export, and 24/7 AI Chatbot Guest Support.

---

## 📌 Key Features

- 🏢 Admin & Sub-Admin Panels
- 🛏️ Manage Hotels and Rooms
- 📅 Booking Management (New, Accepted, Rejected)
- 🔐 User Authentication
- 📄 Generate Reports (PDF & Excel)
- 🔁 Real-time Booking Status Updates
- 🤖 24/7 AI Chatbot for Guest Support
- 👤 Account Settings (Profile, Password, Logout)
- 📊 Dashboard with Stats (Hotels, Rooms, Bookings)
- 📬 Contact Form & Booking Status Checker

---

## 🔧 Admin Panel Modules

- **Dashboard**: Overview of key stats (rooms, hotels, admins, bookings)
- **Hotels**: Add, edit, delete, and update hotel status
- **Rooms**: Link rooms to hotels, manage room info, pricing, view, etc.
- **Bookings**: Manage all bookings, export data
- **Reports**: Generate booking reports between date ranges
- **Sub-Admins**: Manage admin roles & access control
- **Account Settings**: View profile, change password, logout

---

## ⚙️ Technologies Used

- 💻 PHP (Core Logic)
- 🗄️ MySQL (Database)
- 🎨 HTML, CSS, Bootstrap (Frontend)
- 📊 JavaScript (UI Interactions)
- 🧠 OpenAI API (Chatbot Integration)
- 📑 DOMPDF, PHPSpreadsheet (PDF & Excel Generation)

---

## 🚀 Installation Guide

1. **Clone the repository**
   ```bash
   git clone https://github.com/Priyush02K/Stay-Smart.git
   cd staysmart-hotel-management
2. Import the Database
Create a MySQL database named staysmart_db

Import the .sql file from /database/staysmart_db.sql into phpMyAdmin or using CLI

3. Configure config.php or .env
Edit the database connection settings as follows:
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'staysmart_db');

4. Run the Project
Start Apache and MySQL using XAMPP, MAMP, or any local server

Navigate to http://localhost/staysmart in your browser
---



## 📸Screenshots

##
Dashboard	Room Management	Booking Reports

Reports

📹 Live Demo
🎥 Watch the working demo here:
🔗 YouTube Demo Link


🤝 Contributing
Pull requests are welcome! Feel free to fork the repository and submit improvements.

📜 License
MIT License.
You are free to use, modify, and distribute this project for personal or educational purposes.

