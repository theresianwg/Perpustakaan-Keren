# Perpustakaan-Keren

## Laravel Route, Controller, dan Middleware
Digunakan untuk mengatur routing utama dari website. Dapat dilihat pada 
- routes/web.php
- routes/auth.php

## Request, Validation, dan response
Digunakan untuk memvalidasi value yang didapat dari input. Dapat dilihat pada
- app/http/controllers/AdminBooksController.php
- app/http/controllers/AdmiCategoriesController.php
- app/http/controllers/AdmiStudentController.php
- app/http/controllers/BookUserController.php
- app/http/controllers/StudentBookController.php

## Model, Eloquent, dan Query Builder
Digunakan untuk mengatur representasi database dengan menggunakan Object Relational Model milik laravel. Digunakan pada 
- app/Models/Book.php
- app/Models/BookUser.php
- app/Models/Category.php
- app/Models/User.php

## Authentication dan Authorization
Digunakan untuk mengatur autentikasi dan role user dalam menggunakan aplikasi. Untuk route dapat dilihat pada
- routes/auth.php

## View dan Blade Component 
Digunakan untuk membuat tampilan lebih dinamis dan meringkas code html. Dapat dilihat pada 
- resources/views/components/

## Laravel Cache
Digunakan untuk penggunaan sesi selanjutnya agar waktu yang diperlukan lebih singkat
Laravel Cache ini diimplementasikan pada bagian berikut
- Controller
- Events
- Listeners
- Models
- Provider

## Localization
Localization berfungsi untuk menyesuaikan bahasa yang digunakan sesuai dengan bahasa dari lokasi penggunanya. Localization sementara hanya menyimpan untuk bahasa Inggris dan Indonesia.
Localization di simpan dalam bagian berikut
- resources/viws/lang
- web
- middleware
- localization controller
- kernel

## Command and Scheduling
Command yang digunakan betujuan untuk melakukan pengecekan apabila ada pelajar yang meminjam buku melebihi batas waktu pengembalian dan belum dikembalikan. Sedangkan scheduling digunakan untuk menjalankan command tersebut setiap hari pada jam 07.00
Command and Scheduling di simpan dalam bagian berikut
- app/console/commands
- kernel

## Event and Listener
Event dan listener digunakan untuk melakukan aksi reaksi terhadap suatu kejadian. Event digunakan pada dalam command yang akan mentrigger event apabila ada buku yang belum dikembalikan dan telah melebihi batas waktu pengembalian. Listener digunakan untuk mengirimkan email kepada pelajar apabila event tersebut di trigger
Event and Listener di simpan dalam bagian berikut
- app/event
- app/listener
- app/providers/eventserviceproviders

## Feature Testing and Unit Testing
Pada proses testing dengan unit testing kami melakukan test pada tampilan form login, duplicate user dan delete user. Sedangkan untuk fitur testing kami menggunakan browser test dan menguji pada user admin seperti dapat melakukan login dan melihat list buku, melakukan penolakan peminjaman buku, melihat kategori, melakukan persetujuan registrasi siswa. 
Feature Testing dan Unit Testing disimpan dalam bagian berikut
- tests/Unit
- tests/Feature
- tests/Browser
