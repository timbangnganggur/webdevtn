# Petunjuk Set-up
## Awal Clone/pull
- Masuk ke folder project
- Gunakan perintah "composer install"
- "npm install" (opsional kalau ndak ada ketergantungan dengan javascript)
- Buat copy dari file yang namanya .env.example lalu ganti namanya menjadi .env
- lalu jalankan "php artisan key:generate" untuk membuat kode (untuk encoding)
- coba run dengan "php artisan serve"

## Proses Pengerjaan dengan Backend DB
- "git pull origin <nama_branch>" diusahakan setiap kali sebelum mengerjakan sesuatu agar mengikuti update terbaru dahulu
- isilah variabel konstanta DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, dan DB_PASSWORD sesuai keterangan database
- untuk menyamakan database run "php artisan migrate"
- lalu jalankan kembali dengan "php artisan serve"

## Proses Pengerjaan dengan Backend DB yang Telah Ada Isi Default (Seeder)
- Gunakan perintah "php artisan migrate:refresh --seed"
- cek db (seperti localhost/phpmyadmin) apakah sudah ada isi defaultnya?
- lalu jalankan kembali dengan "php artisan serve"

## Mengatasi Conflict Saat Ingin Push ke Branch
- simpan dulu aktivitas perubahan Anda yang terakhir dengan "git add .", "git commit -m <pesan>"
- pull lagi branchnya untuk mendapatkan perubahan terbaru
- pilih perubahan mana yang ingin disimpan dengan menggunaka bantuan dari editor vscode atau "git mergetool"
- lalu push kembali ke branch dengan "git push -u origin <nama_branch>"
    
## Mengatasi Apabila Tidak Muncul Gambar Setalah Pull (21/11/2020)
- jalankan php artisan storage:link (untuk membuat shortcut/symbolic link ke folder storage yang awalnya tidak ada)
