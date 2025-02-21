# HOTEL BOOKING AND CANCELLATION SYSTEM

![Screenshot from 2025-02-21 07-06-33](https://github.com/user-attachments/assets/5634ecc9-b2de-41de-b188-640af87e9725)

# Overview

![Screenshot from 2025-02-19 17-41-45](https://github.com/user-attachments/assets/16575d16-5f5a-4422-a9df-b8488956cceb)


This project is a Laravel-based hotel booking system designed for efficient room reservations, cancellations, and management of hotel operations. The system provides a seamless experience for customers and administrators.

# Features

Hotel Dashboard:

Overview of key metrics and system activities.

User Management:

Manage customer and admin accounts, roles, and permissions.

Room Management:

Add, update, and manage hotel room availability.

Booking Management:

Book rooms, manage reservations, and track booking details.

Cancellation Management:

Handle room cancellations with appropriate refund policies.

Payment Integration:

Secure online payment processing for bookings.

Customer Feedback:

Collect and manage customer reviews and ratings.

Reports & Analytics:

Generate reports on booking trends and revenue.

Settings:

Manage system-wide settings and configurations.

![Screenshot from 2025-02-21 07-14-14](https://github.com/user-attachments/assets/b749015c-8a46-430a-93d1-91beb63ca2f6)

# Technologies Used

Backend: Laravel (PHP framework), Flask (Machine Learning predictions)

Frontend: Blade Templates, Bootstrap

Database: MySQL

Authentication: Laravel Auth

Payment Gateway: Stripe/PayPal (Optional)

Deployment: Apache/Nginx Server

# Installation

## Prerequisites

PHP 8.x

Composer

MySQL Database

Laravel 10+ (Recommended)

Node.js & npm (for frontend assets)

# Steps

Clone the repository:

git clone https://github.com/MuchiriKinyua/Hilton-Hotel-Management-System

cd project-directory

Install dependencies:

composer install
npm install && npm run dev

Set up environment variables:

cp .env.example .env
php artisan key:generate

Configure database in .env and run migrations:

php artisan migrate --seed

Start the development server:

php artisan serve

# Usage

Access the system via http://127.0.0.1:8000/

Register as a customer or log in as an admin

Browse available rooms and make a booking

Manage bookings and cancellations

Process payments securely


