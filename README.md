# Tasks for Today Management System

A Laravel application developed for IT0049 Technical Summative Assessment 3.

## Features

- Welcome page: displays only tasks scheduled for today.
- Task List: displays every task, ordered from earliest to latest date.
- Profile: displays the single user record.
- About: identifies the developer and describes the application.
- Shared navigation across all four pages.

## Requirements

- PHP 8.2 or a compatible newer version
- Composer
- MySQL

## Local Installation

1. Clone the repository and open a terminal in the project folder.

2. Install dependencies:

   ```bash
   composer install
   ```

3. Copy `.env.example` to `.env`.

   In Windows PowerShell:

   ```powershell
   Copy-Item .env.example .env
   ```

4. Create an empty MySQL database named `tasks_for_today`.

5. Configure these settings in `.env`:

   ```env
   APP_NAME="Tasks for Today"
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tasks_for_today
   DB_USERNAME=root
   DB_PASSWORD=
   SESSION_DRIVER=file
   CACHE_STORE=file
   QUEUE_CONNECTION=sync
   ```

   Adjust the database username and password for your installation.

6. Generate the application key and clear cached configuration:

   ```bash
   php artisan key:generate
   php artisan config:clear
   ```

7. Create the tables and insert sample records:

   ```bash
   php artisan migrate --seed
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

9. Open the address printed in the terminal.

## Routes

| Page | URL |
|---|---|
| Welcome | `/` |
| Task List | `/tasks` |
| Profile | `/profile` |
| About | `/about` |

## Database and Sample Data

The tasks table contains a title, status, task date, and timestamps.
The status defaults to `pending`.

The users table contains a unique username, full name, email, and timestamps.

TaskSeeder inserts eight tasks across yesterday, today, and tomorrow,
plus one user record. These dates are calculated when the seeder runs.

The application uses the Asia/Manila timezone.

## Checking the Date Filter

Immediately after seeding:

- Welcome displays four tasks for today.
- Task List displays all eight tasks across three dates.
- Profile displays one user.

Stored task dates do not change automatically. On a later date,
Welcome may display fewer tasks or an empty-state message.

To refresh the sample dates in a development database, run:

```bash
php artisan db:seed
```

## Project Structure

- Migrations define the tables.
- TaskSeeder populates the sample records.
- Task and User are Eloquent models.
- Controllers query records and pass them to Blade views.
- The shared Blade layout provides navigation and CSS.

The application pages use plain CSS and do not require an npm build.

## Environment Settings

The `.env` file is excluded from Git.
Configure production credentials separately on the hosting server.

## Live Website

http://tasksbuen.fwh.is
