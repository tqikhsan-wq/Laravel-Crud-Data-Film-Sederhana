# Laravel CRUD Data Film

Aplikasi CRUD sederhana berbasis Laravel 12 untuk mengelola data film.
Mendukung fitur tambah, tampil, edit, hapus data, serta upload poster.

---

## Deskripsi

Project ini dibuat untuk pembelajaran dasar Laravel, khususnya implementasi CRUD (Create, Read, Update, Delete) dengan database MySQL.

---

## Fitur

* Menambahkan data film
* Menampilkan data film dalam tabel
* Mengedit data film
* Menghapus data film
* Upload poster film
* Notifikasi setelah aksi berhasil

---

## Teknologi

* Laravel 12
* PHP >= 8.3
* MySQL
* Blade Template

---

## Instalasi

1. Clone repository

```
git clone https://github.com/tqikhsan-wq/Laravel-Crud-Data-Film-Sederhana.git
cd Laravel-Crud-Data-Film-Sederhana
```

2. Install dependency

```
composer install
```

3. Copy file environment

```
cp .env.example .env
```

4. Konfigurasi database pada file `.env`

```
DB_DATABASE=crud_datafilm
DB_USERNAME=root
DB_PASSWORD=
```

Pastikan database `crud_datafilm` sudah dibuat di MySQL.

5. Generate application key

```
php artisan key:generate
```

6. Jalankan migrasi database

```
php artisan migrate
```

7. Buat symbolic link untuk storage

```
php artisan storage:link
```

8. Jalankan aplikasi

```
php artisan serve
```

Akses di browser:

```
http://127.0.0.1:8000
```

---

## Struktur Folder

* app/Models/Film.php
* app/Http/Controllers/FilmController.php
* resources/views/films/
* database/migrations/

---

## Struktur Tabel

Tabel `films` memiliki kolom:

* id
* judul
* genre
* tahun_rilis
* sutradara
* negara
* durasi
* rating
* deskripsi
* poster
* timestamps

---

## Upload Gambar

File disimpan di:

```
storage/app/public/posters
```

Ditampilkan di view dengan:

```
<img src="{{ asset('storage/' . $film->poster) }}">
```

---

## Catatan

* Jangan upload file `.env` ke repository
* Pastikan menjalankan `php artisan storage:link`
* Gunakan `multipart/form-data` untuk form upload
* Pastikan database sudah tersedia sebelum migrate

---


