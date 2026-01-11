# 🛠️ Online Technician Booking System

A full-stack **Online Technician Booking Web Application** developed using **PHP and MySQL**.  
This system allows users to register, login, book technicians for services, track orders, and enables administrators to manage service operations.

---

## 🚀 Features

### 👤 User Module
- User Registration and Login
- Service Booking Form
- View Technician List
- Order Submission and Tracking
- Secure Session Handling
- Logout Functionality

### 🛡️ Admin Module
- Admin Login Panel
- Dashboard Management
- View User Orders
- Technician Management
- Service Charge Management

### ⚙️ System Features
- PHP-based backend processing
- MySQL database integration
- Modular page structure
- Responsive UI assets
- Image upload support
- Secure authentication flow

---

## 🧰 Technology Stack

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** Apache (XAMPP / WAMP / LAMP)  

---

## 📂 Project Structure

```
OnlineTechnicianBooking/
├── Database/                 # Database files / SQL
├── admin/                    # Admin panel files
├── assets/                   # CSS, JS, images
├── db/                        # Database connection scripts
├── image/                     # Uploaded images
├── index.php                  # Homepage
├── login_form.php             # User login page
├── login_process.php          # Login logic
├── signup_form.php            # User registration page
├── signup_process.php         # Signup logic
├── dashboard.php              # User dashboard
├── order_form.php             # Service booking form
├── order_process.php          # Booking logic
├── technician_list.php        # Technician listing
├── admin_login_form.php        # Admin login page
├── admin_login_process.php     # Admin authentication logic
├── service_charge.php          # Service pricing
├── contact_us.php              # Contact page
├── session.php                 # Session management
├── header.php                  # Common header
├── footer.php                  # Common footer
├── style.php                   # Styling configuration
└── README.md                   # Project documentation
```

---

## 🛠️ Installation & Setup

### ✅ Step 1: Install Local Server

Install any PHP server:

- ✔️ XAMPP
- ✔️ WAMP
- ✔️ LAMP

Start:
```
Apache
MySQL
```

---

### ✅ Step 2: Clone or Copy Project

Place the project inside your server directory:

```
xampp/htdocs/OnlineTechnicianBooking
```

---

### ✅ Step 3: Database Setup

1. Open phpMyAdmin:
```
http://localhost/phpmyadmin
```

2. Create a database (example):
```
technician_booking
```

3. Import SQL file from:
```
Database/
```

4. Update database credentials inside:
```
db/
```

---

### ✅ Step 4: Run Application

Open browser:

```
http://localhost/OnlineTechnicianBooking/
```

---

## 👥 Default Functional Flow

1. User registers and logs in.
2. User browses technician list.
3. User submits booking order.
4. Admin logs in and manages orders.
5. Admin updates service charges and technicians.

---

## 🔐 Authentication

- User Login → `login_form.php`
- Admin Login → `admin_login_form.php`
- Session handled via `session.php`

---

## 🧪 Testing

- Create a new user account.
- Login and place an order.
- Login as admin and verify order management.
- Test logout and session handling.

---

## 📌 Notes

- Make sure Apache and MySQL services are running.
- Database must be correctly imported.
- File permissions may be required for image uploads.
- Works best on modern browsers.

---

## 🤝 Contributing

Contributions are welcome!

1. Fork the repository  
2. Create a new branch  
3. Commit your changes  
4. Push to GitHub  
5. Create a Pull Request  

---

## 📄 License

This project is open-source and intended for educational purposes.

---

## 👨‍💻 Author

Developed by **Debabrata Doloi**  
GitHub: UNICDEB  

