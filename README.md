# Kontinentalist Tech Assesment - Task 2

This is a simple RESTful API built with **Laravel 12 Slim**. It allows you to create, read, update, and delete posts. Each post contains a title and content, and all API operations can be tested using Postman.


## 🚀 Features

- RESTful API endpoints for managing blog posts
- Supports full CRUD (Create, Read, Update, Delete)
- Built with Laravel 12 Slim
- Tested using Postman with JSON payloads


## 🛠 Tech Stack

- [PHP ≥ 8.2](https://windows.php.net/download)
- [Composer](https://getcomposer.org/download)
- [MySQL](https://dev.mysql.com/downloads/installer)
- [Postman](https://www.postman.com/downloads)


## 📦 Setup Instructions

🛠️ You can run these commands using Bash, your VSCode terminal, Git Bash, or any terminal that supports PHP & Composer.

### 1. Clone the Repo

```bash
git clone https://github.com/Dexter-Wong/posts-api.git
cd posts-api
```

### 2. Install Dependencies

Make sure you have Composer installed
- Run `composer install`

### 3. Create `.env` File

```bash
cp .env.example .env
```
Update your database config in .env, for example:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=posts_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate app key

- Run `php artisan key:generate`

### 5. Run Migrations

- Run `php artisan migrate`

### 6. Start the Laravel server

- Run `php artisan serve`

- The API will be available at `http://127.0.0.1:8000/api/posts`


### 🔎 API Endpoints:

| Method | Endpoint            | Description        |
|--------|---------------------|--------------------|
| GET    | `/api/posts`        | Get all posts      |
| POST   | `/api/posts`        | Create a new post  |
| GET    | `/api/posts/{id}`   | Get a single post  |
| PUT    | `/api/posts/{id}`   | Update a post      |
| DELETE | `/api/posts/{id}`   | Delete a post      |

### Required headers for POST/PUT

| Key           | Value              |
|---------------|--------------------|
| `Content-Type` | `application/json` |
| `Accept`       | `application/json` |

### 💡 Example POST Body:

```terminal
{
  "title": "Sample Title",
  "content": "This is the content of the post."
}
```

## Notes

- All routes are prefixed with /api

- CSRF protection is disabled for API routes
