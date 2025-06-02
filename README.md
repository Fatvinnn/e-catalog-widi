# e-catalog-widi

## Tujuan Program

Program **e-catalog-widi** dibuat untuk memudahkan bisnis dalam mengelola dan mempublikasikan katalog produk secara online. Platform ini memungkinkan admin untuk menambahkan, mengedit, dan menghapus produk, serta memudahkan pelanggan untuk melihat detail produk secara real time melalui website.

## Daftar Fungsi

### Fitur Utama
- **Manajemen Produk**
  - Tambah, edit, hapus produk
  - Upload gambar produk
  - Kategori & stok produk

- **Manajemen User (Admin only via dashboard)**
  - Tambah akun admin baru
  - Edit & hapus user

- **Pencarian dan Filter Produk**
  - Cari produk berdasarkan nama/kategori

- **Autentikasi Admin**
  - Login logout
  - Reset password

- **Dashboard Admin (Filament)**
  - Statistik produk & user
  - Manajemen data katalog

### Endpoints (Contoh, sesuaikan dengan routes)
- `GET /` — Halaman utama katalog produk
- `GET /products` — Daftar semua produk
- `GET /products/{id}` — Detail produk tertentu
- `POST /login` — Login admin
- `POST /admin/products` — Tambah produk (hanya admin)
- `PUT /admin/products/{id}` — Edit produk (hanya admin)
- `DELETE /admin/products/{id}` — Hapus produk (hanya admin)
- Endpoint lainnya disesuaikan dengan aplikasi

## Anggota Kelompok

- Alvin Nurwahyudi — 23050974082
- Gavin Taufan Dewangga — 23050974111
- Yasmin Arafah — 23050974098
- Muhammad Faizal Zain — 23050974102

## Alamat Website

Website e-catalog-widi dapat diakses melalui:  
👉 **[widiphone.shop](https://widiphone.shop)**