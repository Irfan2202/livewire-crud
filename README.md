<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# livewire-crud

# Laravel Livewire CRUD – Proyek Latihan

Proyek ini adalah aplikasi CRUD (Create, Read, Update, Delete) sederhana menggunakan **Laravel** dan **Livewire**, dirancang untuk membantu pemula memahami konsep dasar pembuatan aplikasi web dinamis tanpa memerlukan JavaScript eksternal.

---

## 🔧 Fitur Utama
- **CRUD Posts**: Menambahkan, menampilkan, mengedit, dan menghapus postingan
- **Livewire Components**: Interaksi real-time tanpa refresh halaman
- **Blade & Bootstrap**: Tampilan responsif dan sederhana
- **Validasi Form**: Validasi server-side menggunakan Laravel

---

## 🛠️ Teknologi yang Digunakan
- **Laravel 11** – Framework PHP untuk backend
- **Livewire** – Framework full-stack untuk interaktivitas dinamis
- **Blade** – Template engine Laravel
- **Bootstrap 5** – Framework CSS untuk styling
- **MySQL** – Database relasional

---

## 🚀 Cara Menjalankan Proyek

1. **Clone repository ini**:
    ```bash
    git clone https://github.com/Irfan2202/livewire-crud.git
    cd livewire-crud
    ```

2. **Install dependencies menggunakan Composer**:
    ```bash
    composer install
    ```

3. **Salin file konfigurasi environment**:
    ```bash
    cp .env.example .env
    ```

4. **Generate aplikasi key**:
    ```bash
    php artisan key:generate
    ```

5. **Atur konfigurasi database di file `.env`**:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. **Jalankan migrasi untuk membuat tabel di database**:
    ```bash
    php artisan migrate
    ```

7. **Jalankan server development Laravel**:
    ```bash
    php artisan serve
    ```

8. **Akses aplikasi di browser**:
    ```
    http://localhost:8000
    ```

---

## 📸 Tampilan Aplikasi

Berikut adalah tampilan aplikasi CRUD sederhana yang dikembangkan dalam proyek ini:

![Tampilan List View](https://www.itsolutionstuff.com/post/laravel-livewire-crud-application-tutorialexample.html)
![Tampilan Create View](https://www.itsolutionstuff.com/post/laravel-livewire-crud-application-tutorialexample.html)
![Tampilan Update View](https://www.itsolutionstuff.com/post/laravel-livewire-crud-application-tutorialexample.html)

---

## 📌 Catatan
- Pastikan PHP, Composer, dan MySQL telah terinstal di sistem Anda.
- Untuk kemudahan, Anda dapat menggunakan XAMPP atau Laragon sebagai paket server lokal.
- Proyek ini tidak menggunakan autentikasi pengguna; akses ke aplikasi tidak dibatasi.

---

Terima kasih telah menggunakan proyek ini. Jika Anda memiliki pertanyaan atau ingin berkontribusi, silakan buka issue di repository ini.
