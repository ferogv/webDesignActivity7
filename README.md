# Robotics School Platform (Activity 7 & Homework 6)

## 📌 Project Description
This Laravel 7 project models a small robotics school platform with users, groups, courses, and robotics kits. It demonstratesdatabase design with Eloquent ORM, migrations, seeders, and factories.  

---

## 📊 Deliverables

- **ER Diagram**  
  ![ER Diagram](docs/ER_diagram.png)  
  *(exported as PNG, also available in `/docs/` folder)*

- **Database Export**  
  SQL file with all tables and relationships:  
  [`database/export/activity7.sql`](database/export/laravel.sql)

- **GitHub Repository**  
  This repository contains:
  - Laravel 7 project (`activity7`)
  - Models, Controllers, and Migrations
  - Relationships defined in Eloquent
  - SQL export and ER diagram

---

## 🗂️ Project Structure
activity7/ ├── app/Models/         # User, Group, Course, RoboticsKit ├── app/Http/Controllers/ ├── database/migrations/ # All migration files ├── database/export/     # activity7.sql ├── docs/                # ER diagram (PNG/PDF) ├── routes/ └── README.md


---

## 🚀 How to Run
1. Clone the repository:
   ```bash
   git clone https://github.com/<your-username>/activity7.git
   cd activity7
2. Install dependencies:
   ```bash
    composer install
    npm install
3. Configure .env with your database credentials.
4. Run migrations:
   ```bash
    php artisan migrate