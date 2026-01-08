## Tentang Project

Sistem manajemen perpustakaan berbasis web yang dibangun dengan Laravel dan Filament Admin Panel. Sistem ini dirancang untuk membantu pengelolaan koleksi buku, peminjaman, pengembalian, dan manajemen anggota perpustakaan.

## Fitur

-   **Manajemen Buku**: Tambah, edit, hapus, dan cari koleksi buku
-   **Manajemen Anggota**: Pendaftaran dan pengelolaan data anggota perpustakaan
-   **Sistem Peminjaman**: Proses peminjaman dan pengembalian buku
-   **Dashboard Admin**: Dashboard interaktif untuk memantau aktivitas perpustakaan
-   **Autentikasi**: Sistem login untuk admin

## Stack Teknologi

-   **Backend**: Laravel 12
-   **Admin Panel**: Filament PHP
-   **Database**: MySQL
-   **Server**: PHP 8.1+
-   **Package Manager**: Composer
-   **Build Tool**: Vite
-   **JavaScript**: Alpine.js (opsional)

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi:

1. **Clone Repository**

    ```bash
    git clone <url-repository>
    cd perpus-filament
    ```

2. **Install Dependencies**

    ```bash
    composer install
    npm install
    ```

3. **Konfigurasi Environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Konfigurasi Database**
   Edit file `.env` dan sesuaikan konfigurasi database:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=perpus_filament
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. **Migrate Database**

    ```bash
    php artisan migrate --seed
    ```

6. **Compile Assets**

    ```bash
    npm run build
    # atau untuk development
    npm run dev
    ```

7. **Jalankan Aplikasi**

    ```bash
    php artisan serve
    ```

8. **Akses Aplikasi**
   Buka browser dan akses `http://localhost:8000`

    Untuk mengakses admin panel:
    `http://localhost:8000/admin`

## Struktur Proyek

```
perpus-filament/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   ├── Filament/
│   │   ├── Resources/
│   │   └── Pages/
│   └── Services/
├── config/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── public/
├── resources/
│   ├── views/
│   ├── css/
│   └── js/
├── routes/
│   ├── web.php
│   └── admin.php
├── storage/
├── tests/
├── .env
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```
