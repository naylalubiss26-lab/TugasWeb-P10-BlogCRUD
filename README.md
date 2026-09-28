Tugas 10 — Blog CRUD Laravel

Aplikasi blog sederhana dengan CRUD lengkap, dibuat dengan Laravel 12 + MySQL.
Fitur

    CRUD Post lengkap: create, read (list + detail), update, delete
    Route Model Binding (Post $post) + 404 otomatis untuk data yang tidak ada
    Layout master (@extends / @yield) + 2 blade components (Alert, Card)
    Validasi input + pesan error per field + old input
    Flash message sukses/gagal
    Pagination (2 data per halaman)
    @csrf + @method PUT/DELETE pada form edit & hapus
    Konfirmasi hapus (confirm dialog)

Cara Menjalankan

    composer install
    Salin .env.example menjadi .env, sesuaikan nama database
    php artisan key:generate
    php artisan migrate
    php artisan serve
    Buka http://127.0.0.1:8000/posts