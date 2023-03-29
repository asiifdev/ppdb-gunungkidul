
# PPDB SMK GUNUNG KIDUL

Dokumentasi Kalem for Project PPDB.


## Minimum Requirements
1. PHP 8.1
2. Node 14 Or Higher.

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`DB_CONNECTION=mysql`

`DB_HOST={Host DB}`

`DB_PORT=3306`

`DB_DATABASE={DB NAME}`

`DB_USERNAME={USERNAME DB}`

`DB_PASSWORD={Password DB}`



## Installation

Clone this git

```bash
  git clone https://github.com/asiifdev/ppdb-gunungkidul.git
```

Masuk directory projectnya:
```bash
  cd ppdb-gunungkidul
```
Install Package2 yang dibutuhkan dengan Composer
```bash
  composer install
```

    
## Run Locally

Migratasi Database beserta menjalankan Seeder

```bash
  php artisan migrate:fresh --seed
```

Install Node Module

```bash
  npm install
```

Jalankan Development NPM, untuk kebutuhan Development

```bash
  npm run dev
```

Tambah terminal baru di VSCode,lalu jalankan server artisan

```bash
  php artisan serve
```


## Demo

Link Web setelah menjalankan Command artisan serve

http://localhost:8000/
## Tech Stack

**Client:** Bootstrap 5, Livewire, HTML, Javascript

**Server:** PHP, Laravel

