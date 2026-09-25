# Personal Task Manager

Project Code: WST21-PM-2026-SF  
Student Name: Andemar Gabriana  
Course & Year: BSIT 2026  
Database Used: SQLite

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status (Pending / Completed)

## Requirements
- PHP 8.0 or newer
- Composer
- SQLite PHP extension

## Installation on Windows
```cmd
git clone https://github.com/andemargabiana-collab/laravel-personal-task-manager.git
cd laravel-personal-task-manager
composer install
copy .env.example .env
php artisan key:generate
if not exist database mkdir database
type nul > database\database.sqlite
php artisan migrate
php artisan serve
```
Open http://127.0.0.1:8000.

This project uses Laravel routes, a controller, an Eloquent model, a migration, and Blade views. Laravel 9 is used so it works with PHP 8.0.
