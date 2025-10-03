<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📚 Sistem Perpustakaan
- Sistem Perpustakaan adalah aplikasi berbasis Laravel 12 yang digunakan untuk mengelola kegiatan perpustakaan seperti:
- Manajemen data buku 📖
- Manajemen anggota 👥
- Peminjaman & pengembalian buku 🔄
- Perhitungan denda keterlambatan 💰
- Manajemen backup database 💾
- Aplikasi ini dibuat agar pengelolaan perpustakaan menjadi lebih mudah, efisien, dan terorganisir.

---

# ✨ Fitur Utama
- ✅ Manajemen Buku – Tambah, ubah, hapus, dan lihat daftar buku
- ✅ Manajemen Anggota – Kelola data user/anggota perpustakaan
- ✅ Peminjaman Buku – Proses peminjaman dengan tanggal pinjam & kembali
- ✅ Pengembalian Buku – Perhitungan otomatis keterlambatan dan denda
- ✅ Denda – Tercatat otomatis jika ada keterlambatan
- ✅ Backup Database – Fitur untuk backup, restore, download, dan hapus file backup
- ✅ Autentikasi & Role – Hak akses Admin dan User dengan middleware role
- ✅ UI Responsif – Menggunakan Bootstrap 5 & Blade template

---

# 🛠️ Teknologi
- Framework: Laravel 12
- Bahasa: PHP 8.3
- Database: MySQL
- Frontend: Bootstrap 5, Blade Template
- Library Pendukung: Carbon, Eloquent ORM
- Server Dev: Laragon

---

# ⚙️ Instalasi
### 1. Clone Repository
```bash
git clone https://github.com/adam-miftah/sistem-perpustakaan.git
cd sistem-perpustakaan
```
### 2. Install Dependencies
```bash
composer install
npm install && npm run dev
```
### 3. Setup Environment 
Salin file .env.example menjadi .env lalu sesuaikan konfigurasi database:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistem_perpustakaan
DB_USERNAME=root
DB_PASSWORD=
### 4. Generate Key & Migrasi Database
```bash
php artisan key:generate
php artisan migrate --seed
```
### 5. Jalankan Server
```bash
php artisan serve
```

---

# 👤 Roles & Login
### Admin
- Username: admin@perpus.com
- Password: password123

### User/Anggota
Bisa daftar melalui form registrasi atau gunakan akun seed default

--- 

# 🤝 Kontribusi
- Fork repo ini
- Buat branch baru (feature/nama-fitur)
- Commit perubahanmu
- Push ke branch
- Buat Pull Request

---

## 📞 Kontak
### 📧 Email: adammiftah196@gmail.com
### 🌐 Website: www.adammiftah.com
