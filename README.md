# Student CRUD Application

A simple Laravel-based CRUD (Create, Read, Update, Delete) application for managing student records.

## Features

- Add new students
- View list of all students
- Edit existing student information
- Delete students
- Form validation
- Responsive design with Tailwind CSS

## Requirements

- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL or another supported database

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd CRUD_APP
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install Node.js dependencies:
   ```bash
   npm install
   ```

4. Copy the environment file and configure:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configure your database in `.env` file.

6. Run migrations:
   ```bash
   php artisan migrate
   ```

7. Build assets:
   ```bash
   npm run build
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

- Visit `http://localhost:8000` to view the student list
- Click "Add New Student" to create a new record
- Use "Edit" and "Delete" buttons in the table for modifications

## Technologies Used

- Laravel 11
- Tailwind CSS
- MySQL
- Vite

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
