# HRM Final

HRM Final is a Laravel-based human-resource management project, likely representing a final iteration of an HRM workflow.

## Features

- HRM workflow foundation
- Employee and administrative data management
- Database-backed records
- Final/project-ready HR management structure

## Modules

- Employee module: staff records and profile data
- HR module: leave, attendance, payroll, or related HR workflows when present
- Admin module: dashboards, settings, and record management
- Auth module: users, roles, and protected routes
- Reporting module: summaries, filters, and exports

## System Architecture

The application follows Laravel MVC architecture. Controllers coordinate HR actions, models persist employee/HR records, Blade/Vite assets render views, and database migrations define the schema. Optional services can handle notifications, reporting, or imports.

## Getting Started

```bash
git clone https://github.com/NahinAhmed28/hrm_final.git
cd hrm_final
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```
