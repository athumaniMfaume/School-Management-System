School Management System

A web-based school management system built using Laravel 11 with AdminLTE template. This system helps schools manage students, teachers, courses, class assignments, exam results, fees, timetables, and announcements efficiently.

Features

School support

Student registration and management

Teacher registration and assignment to classes

Subject and course management

Class assignment and timetable management

Exam and student grade management

Fee management (heads, structures)

Announcement system for schools

Role-based access control (Admin, Normal User)

Uses AdminLTE for a responsive dashboard

Database Structure

The system includes the following tables:

academic_years – Academic year info

announcements – School announcements

assign_subject_to_classes – Subject-class assignments

assign_teacher_to_classes – Teacher-class assignments

cache – Laravel cache

cache_locks – Cache locks

classes – Class info

days – Days of the week

exams – Exams info

exam_results – Students exam grades

failed_jobs – Laravel failed jobs

fee_heads – Fee categories

fee_structures – Fee structures per class

jobs – Laravel queued jobs

job_batches – Job batches

migrations – Laravel migrations

password_reset_tokens – Password reset data

sessions – Laravel sessions

student_exam_grades – Student grades

subjects – Subject information

time_tables – Class timetables

users – User credentials and roles

Installation
Prerequisites

PHP 8.x

Composer

MySQL / MariaDB

Web server (Apache / Nginx)

Node.js & npm (for AdminLTE assets)

Steps

Clone the repository

git clone https://github.com/athumaniMfaume/School-Management-System.git
cd School-Management-System


Install dependencies

composer install
npm install
npm run dev


Copy environment file

cp .env.example .env


Generate application key

php artisan key:generate


Run migrations and seed default data

php artisan migrate --seed


Start the development server

php artisan serve

Default Login Credentials
Role	Email	Password
Admin	admin@gmail.com
	123

After login, Admin can manage students, teachers, classes, subjects, exams, fees, timetables, and announcements.

Usage

Admin Dashboard: Full access to manage users, students, teachers, courses, classes, exams, fees, timetables, and announcements.

User Dashboard: Limited access to view assigned information depending on role.

Technologies Used

Backend: Laravel 11

Frontend: Blade Templates, AdminLTE, HTML, CSS, JS

Database: MySQL

Version Control: Git & GitHub

GitHub Repository

https://github.com/athumaniMfaume/School-Management-System