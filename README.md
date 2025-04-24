<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



# Logistik - namafolder

Sistem logistik berbasis web untuk mengelola stok barang, barang masuk, dan barang keluar.

## Fitur
- CRUD Barang
- Pencatatan Barang Masuk
- Pencatatan Barang Keluar
- Laporan Stok

## Teknologi
- Laravel
- MySQL
- Bootstrap

## Cara Menjalankan Proyek (Windows & Linux)

### Prasyarat
- PHP 8.x
- Composer
- MySQL
- Git


---

### Langkah Instalasi

#### 1. Clone Repository
```bash
git clone https://github.com/septianhari/logistik-septian.git
cd logistik-septian
```



#### 2. Install Dependency PHP dengan Composer
```bash
composer install
```

#### 3. Salin File .env
```bash
git cp .env.example .env  # Linux / macOS

copy .env.example .env  # Windows PowerShell

```

#### 4. Generate App Key
```bash 
php artisan key:generate
```

#### 5. Buat Database
Buat database baru di MySQL, misalnya:
```bash 
logistik_namadb
```
Lalu edit file .env:
```bash 
DB_DATABASE=logistik_namadb
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 6. Jalankan Migrasi dan Seeder
```bash 
php artisan migrate --seed
```

7. Jalankan Server Lokal
```bash 
php artisan serve
```
Buka di browser
```bash
http://127.0.0.1:8000
```


## 📸 Screenshots

### Halaman Stok Barang
![Stok](https://raw.githubusercontent.com/septianhari/logistik-septian/main/public/screenshots/stok.jpg)

### Daftar Barang Masuk
![Daftar Barang Masuk](https://raw.githubusercontent.com/septianhari/logistik-septian/main/public/screenshots/daftar-barang-masuk.jpg)

### Form Barang Masuk
![Form Barang Masuk](https://raw.githubusercontent.com/septianhari/logistik-septian/main/public/screenshots/form-barang-masuk.jpg)

### Daftar Barang Keluar
![Daftar Barang Keluar](https://raw.githubusercontent.com/septianhari/logistik-septian/main/public/screenshots/daftar-barang-keluar.jpg)

### Form Barang Keluar
![Form Barang Keluar](https://raw.githubusercontent.com/septianhari/logistik-septian/main/public/screenshots/form-barang-keluar.jpg)