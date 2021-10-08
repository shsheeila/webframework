# Website Vaksinasi COVID-19

Website ini merupakan sebuah website mengenai informasi vaksinasi COVID-19. Website ini dibuat menggunakan [ Laravel 8](https://laravel.com)

Nama : Siti Sheilawati
NIM : 1810817220009

## Persyaratan
 - PHP 7.4
 - [Composer](https://getcomposer.org/)

## Instalasi
 1. Clone Repository ini 
        [https://github.com/shsheeila/webframework](https://github.com/shsheeila/webframewor)
 2. Siapkan database lokal
 3. Buat file `.env` dari file `.env.example`dan sesuaikan dengan database yang sudah dibuat
 4. Install dependensi PHP dengan 
    ```
    Composer install
    ```
 5. Buat app key baru dengan command seperti berikut: 
        php artisan key:generate
    ```
    php artisan key:generate
    ```
 6. Siapkan database dengan menjalankan 
        php artisan migrate 
    ```
    php artisan migrate 
    ```
 7. Jalankan website secara lokal dengan 
        php artisan serve 
    ```
    php artisan serve 
    ```
