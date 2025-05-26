# 📄 Digital Resume Builder - Laravel

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-blue)

A no-login-required resume builder that generates professional PDF resumes from SQL database.

![App Screenshot 1](public/rb1.png)
![App Screenshot 2](public/rb2.png)
![App Screenshot 3](public/rb3.png)
![App Screenshot 4](public/rb5.png)
![App Screenshot 5](public/rb6.png)
![App Screenshot 5](public/rb7.png)


## ✨ Key Features

- 🚀 **Instant resume creation** (no authentication)
- 📑 **5 professional templates** with PDF download
- 🛢️ **SQL database** (MySQL/MariaDB/PostgreSQL)
- 📱 **Fully responsive** design
- ➕ **Dynamic sections** (add unlimited entries)

## 🛠️ Tech Stack

- **Backend**: Laravel 10
- **Database**: MySQL
- **PDF Generation**: DomPDF
- **Frontend**: Tailwind CSS + Alpine.js

## 🚀 Installation

```bash
# 1. Clone repository
git clone https://github.com/yourusername/resume-builder.git
cd resume-builder

# 2. Install dependencies
composer install
npm install && npm run build

# 3. Configure environment
cp .env.example .env
php artisan key:generate

# 4. Configure database (.env)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=resume_builder
DB_USERNAME=root
DB_PASSWORD=

# 5. Migrate database
php artisan migrate

# 6. Run development server
php artisan serve



erDiagram
    RESUMES ||--o{ EDUCATION : has
    RESUMES ||--o{ EXPERIENCE : has
    RESUMES ||--o{ PROJECTS : has
    RESUMES ||--o{ SKILLS : has
    RESUMES {
        string session_id
        string full_name
        string email
        string phone
        text summary
        timestamps
    }
    EDUCATION {
        string session_id
        string institution
        string degree
        string year
    }
 🌐 Routes
URL	Description
/	Welcome page
/resume/create	Resume form
/resume/show/{session_id}	View generated resumes
/resume/download/{session_id}/{template}	Download PDF