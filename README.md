# 111% - Ngong Town Community Platform

A Laravel-powered community platform to connect the people of Ngong Town. It includes a business directory, matatu traffic updates, local events, school directories, and community posts — all styled with Bootstrap for a clean, mobile-friendly experience.

---

## 🌍 Features

- 🏪 **Business Directory** – Browse businesses listed in Ngong
- 🚐 **Traffic Updates** – Matatu and road traffic information
- 🎉 **Local Events** – Discover community events
- 🏫 **School Listings** – View schools around Ngong
- 🗣️ **Community Posts** – Let residents engage, post, and comment
- 🔐 **Role-Based Access** – Admins, Authors, Guests
- 🧱 **Bootstrap Styling** – Mobile-responsive UI using Bootstrap 5

---

## 🚀 Tech Stack

- Laravel 10.x
- PHP 8.x
- MySQL / MariaDB
- Bootstrap 5
- Blade Templating
- Laravel Auth (Login/Register)
- Role-based access (Super Admin, Admin, Author, Guest)

---

## 🛠️ Installation

1. **Clone the Repository**

```bash
git clone https://github.com/yourusername/ngong-community-platform.git
cd ngong-community-platform

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

DB_DATABASE=ngong_community
DB_USERNAME=root
DB_PASSWORD=yourpassword


✨ Future Plans
Add community post creation (for authors)

Real-time matatu tracking updates

Business submission forms

Chat/Forum feature for residents

🧑‍💻 Contributing
Pull requests welcome! To contribute:

Fork the project

Create your feature branch: git checkout -b feature/my-feature

Commit your changes: git commit -am 'Add my feature'

Push to the branch: git push origin feature/my-feature

Open a pull request

