Laravel CRUD Data Film

Aplikasi CRUD sederhana menggunakan Laravel 12 untuk mengelola data film, lengkap dengan upload poster, dan tampilan tabel.

Fitur Utama
Create (Tambah data film)
Read (Tampilkan data film)
Update (Edit data film)
Delete (Hapus data film)
Upload gambar/poster film
Tampilan tabel sederhana


Teknologi yang Digunakan
Laravel 12
PHP >= 8.3
MySQL

Cara Instalasi
1. Clone Repository
git clone https://github.com/tqikhsan-wq/Laravel-Crud-Data-Film-Sederhana.git
cd Laravel-Crud-Data-Film-Sederhana
2. Install Dependency
composer install
3. Copy File Environment
cp .env.example .env
4. Konfigurasi Database

Buka file .env, lalu ubah:

DB_DATABASE=film_db
DB_USERNAME=root
DB_PASSWORD=

Buat database di MySQL dengan nama:

film_db
5. Generate Key
php artisan key:generate
6. Migrasi Database
php artisan migrate
7. Storage Link (WAJIB untuk gambar)
php artisan storage:link
8. Jalankan Server
php artisan serve

Buka di browser:

http://127.0.0.1:8000

Struktur Database

Tabel films memiliki kolom

id
judul
genre
tahun_rilis
sutradara
negara
durasi
rating
deskripsi
poster

Struktur Folder Penting
app/Models/Film.php → Model Film
app/Http/Controllers/FilmController.php → Controller CRUD
resources/views/films/ → View (index, create, edit, show)
database/migrations/ → Struktur tabel database


Alur CRUD
Create → Tambah data film melalui form
Read → Menampilkan data dalam tabel
Update → Edit data film
Delete → Hapus data film
🖼️ Upload Gambar

Gambar disimpan di:

storage/app/public/posters

Ditampilkan dengan:

<img src="{{ asset('storage/' . $film->poster) }}">

Pastikan:

php artisan storage:link

