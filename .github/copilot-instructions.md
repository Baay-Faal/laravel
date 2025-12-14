# AI Coding Agent Instructions for This Project

Welcome to the Laravel-based project! This document provides essential guidelines for AI coding agents to be productive in this codebase. Follow these instructions to understand the architecture, workflows, and conventions specific to this project.

---

## Project Overview

This project is built using the Laravel framework, a PHP-based web application framework known for its elegant syntax and robust features. Key components include:

- **Controllers**: Located in `app/Http/Controllers/`, these handle HTTP requests and responses.
- **Models**: Found in `app/Models/`, these represent the application's data structure and interact with the database.
- **Views**: Stored in `resources/views/`, these define the user interface.
- **Routes**: Defined in `routes/web.php` for web routes and `routes/console.php` for console commands.
- **Migrations**: Located in `database/migrations/`, these manage database schema changes.

---

## Developer Workflows

### Running the Application
- Use the built-in Laravel development server:
  ```bash
  php artisan serve
  ```
  This starts the application at `http://localhost:8000`.

### Running Tests
- Feature and unit tests are located in `tests/Feature/` and `tests/Unit/` respectively.
- Run all tests:
  ```bash
  php artisan test
  ```

### Database Migrations
- Apply migrations to update the database schema:
  ```bash
  php artisan migrate
  ```
- Rollback the last migration:
  ```bash
  php artisan migrate:rollback
  ```

---

## Project-Specific Conventions

### Naming Conventions
- **Controllers**: Use singular names (e.g., `ServiceController`).
- **Models**: Use singular names (e.g., `Reservation`, `Service`).
- **Migrations**: Use descriptive names (e.g., `create_users_table`, `add_role_to_users_table`).

### Code Organization
- Keep business logic in models or dedicated service classes (e.g., `app/Models/Service.php`).
- Use controllers primarily for request handling and delegating tasks.

### Styling
- Follow PSR-12 coding standards for PHP.
- Use Laravel's Blade templating engine for views.

---

## Integration Points

### External Dependencies
- **Composer**: Manages PHP dependencies. See `composer.json` for the list of packages.
- **NPM**: Manages frontend dependencies. See `package.json` for the list of packages.

### Key Configuration Files
- `config/app.php`: Application configuration.
- `config/database.php`: Database connection settings.
- `vite.config.js`: Frontend build tool configuration.

---

## Examples

### Adding a New Route
1. Define the route in `routes/web.php`:
   ```php
   Route::get('/example', [ExampleController::class, 'index']);
   ```
2. Create the corresponding controller in `app/Http/Controllers/`.

### Creating a Migration
1. Generate the migration:
   ```bash
   php artisan make:migration create_example_table
   ```
2. Define the schema in the generated file in `database/migrations/`.

---

For further details, refer to the [Laravel documentation](https://laravel.com/docs).