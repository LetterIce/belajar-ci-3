# CodeIgniter 4 - Otentikasi Dasar & Dasbor Berbasis Peran

Proyek ini adalah aplikasi web sederhana yang dibangun dengan **CodeIgniter 4** sebagai bagian dari Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web Lanjut. Proyek ini mendemonstrasikan konsep-konsep fundamental meliputi otentikasi pengguna (login/logout), manajemen sesi, kontrol akses berbasis peran untuk dua jenis pengguna berbeda (Admin dan User), serta tampilan dasbor terpisah berdasarkan peran pengguna.

## Fitur

*   **Otentikasi Pengguna:** Halaman login yang aman, menerima nama pengguna (username) dan kata sandi (password).
*   **Kredensial Hardcode:** Data pengguna (username, password yang sudah di-hash, peran) disimpan langsung di `AuthController` untuk kesederhanaan (sesuai persyaratan).
*   **Keamanan Kata Sandi:** Kata sandi di-hash menggunakan `password_hash()` bawaan PHP (bcrypt) dan diverifikasi dengan `password_verify()`. Penggunaan MD5/SHA1 secara eksplisit dihindari.
*   **Manajemen Sesi:** ID pengguna, username, dan peran disimpan dalam sesi setelah login berhasil.
*   **Kontrol Akses Berbasis Peran:**
    *   Rute dasbor terpisah (`/admin` dan `/user`).
    *   Filter (`AuthFilter`, `AdminFilter`, `UserFilter`) digunakan untuk melindungi rute:
        *   Memastikan hanya pengguna yang sudah login yang dapat mengakses dasbor.
        *   Memastikan hanya pengguna dengan peran 'admin' yang dapat mengakses `/admin`.
        *   Memastikan hanya pengguna dengan peran 'user' yang dapat mengakses `/user`.
*   **Tampilan Dasbor:** Dasbor sederhana yang berbeda untuk peran Admin dan User, menampilkan informasi dasar pengguna (username, peran) yang diambil dari sesi.
*   **Templating Layout Dasar:** Menggunakan sistem layout view CodeIgniter (`$this->extend`, `$this->section`, `$this->include`) untuk header/footer yang konsisten di seluruh halaman dasbor.
*   **Fungsionalitas Logout:** Menghancurkan sesi pengguna dan mengarahkan kembali ke halaman login.
*   **Routing Berbasis Controller:** Rute didefinisikan dalam `app/Config/Routes.php` yang memetakan URL ke metode Controller tertentu.

## Teknologi yang Digunakan

*   **PHP:** Versi 8.1 atau lebih tinggi direkomendasikan
*   **CodeIgniter:** Versi 4.x (Dikembangkan secara spesifik dengan 4.6.0)
*   **Composer:** Untuk manajemen dependensi

## Pengaturan dan Instalasi

1.  **Clone Repositori:**
    ```bash
    git clone <url-repositori-anda>
    cd <nama-folder-repositori>
    ```

2.  **Instal Dependensi:**
    ```bash
    composer install
    ```

3.  **Konfigurasi Lingkungan (Environment):**
    *   Salin contoh file environment:
        ```bash
        cp env .env
        ```
        *(Jika Anda memiliki file `env`. Jika tidak, buat file `.env` secara manual berdasarkan variabel yang dibutuhkan di bawah)*
    *   Edit file `.env` dan pastikan variabel berikut diatur dengan benar:
        ```dotenv
        CI_ENVIRONMENT = development
        app.baseURL = 'http://localhost:8080' # Atau URL lokal pilihan Anda
        # Pastikan variabel sesi dikonfigurasi jika perlu (pengaturan default biasanya sudah cukup)
        # session.driver = 'CodeIgniter\Session\Handlers\FileHandler'
        # session.savePath = WRITEPATH . 'session'
        ```

4.  **Atur Kunci Aplikasi (Disarankan):**
    Buat kunci aplikasi unik untuk keamanan:
    ```bash
    php spark key:generate
    ```

## Menjalankan Proyek

1.  **Jalankan Server Pengembangan:**
    ```bash
    php spark serve
    ```

2.  **Akses Aplikasi:**
    Buka browser web Anda dan arahkan ke URL yang diberikan oleh perintah `serve` (biasanya `http://localhost:8080`).

## Kredensial untuk Login

Gunakan kredensial berikut (didefinisikan dalam `app/Controllers/AuthController.php`) untuk menguji aplikasi:

*   **Admin:**
    *   Nama Pengguna: `admin`
    *   Kata Sandi: `adminpass`
*   **User:**
    *   Nama Pengguna: `user`
    *   Kata Sandi: `userpass`

## Struktur Proyek Utama

*   `app/Controllers/`: Berisi `AuthController.php` (menangani login/logout) dan `DashboardController.php` (menangani penampilan dasbor).
*   `app/Views/`: Berisi `login.php`, `admin_dashboard.php`, `user_dashboard.php`, dan folder `layouts/` dengan `main.php`, `header.php`, `footer.php`.
*   `app/Filters/`: Berisi `AuthFilter.php`, `AdminFilter.php`, dan `UserFilter.php` untuk kontrol akses.
*   `app/Config/`: Berisi `Routes.php` yang dimodifikasi (definisi rute) dan `Filters.php` (alias filter dan penerapannya).
*   `.env`: Konfigurasi environment lokal (database, base URL, mode environment).

---

README ini menyediakan gambaran umum yang komprehensif untuk memahami, mengatur, dan menjalankan proyek.