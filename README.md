# Buku Tamu Kampus

## Identitas
Nama dan NIM: isi identitas Anda
Tema: Buku Tamu / Form Kontak

## Tujuan dan batas
Aplikasi menerima nama, email, dan pesan melalui POST, memvalidasinya di server,
kemudian menampilkan respons sukses atau daftar kesalahan. Data tidak disimpan
permanen dan tidak ada pengiriman email nyata.

## Cara menjalankan
Kebutuhan: XAMPP, Apache, PHP 8.x, dan mbstring.

1. Letakkan folder ini pada `C:\xampp\htdocs\minggu10`.
2. Jalankan Apache melalui panel XAMPP.
3. Buka `http://localhost/minggu10/index.php`.

## Berkas utama
- `index.php`: form dan atribut pengiriman.
- `proses.php`: pembacaan POST, validasi server, dan respons.
- `style.css`: tampilan responsif dan indikator fokus.
- `latihan.php`: contoh variabel dan percabangan PHP.
- `cek-lingkungan.php`: pemeriksaan versi PHP dan mbstring.
- `data-uji.php`: pembentuk data batas panjang.

## Aturan input
- Nama: wajib diisi dan maksimal 80 karakter setelah trim.
- Email: wajib valid menurut `FILTER_VALIDATE_EMAIL` dan maksimal 120 karakter.
- Pesan: wajib diisi dan maksimal 500 karakter setelah trim.
- Output pengguna diencode dengan `htmlspecialchars`.

## Format hasil uji
Uji harus dicatat per kasus dengan input, harapan, hasil aktual, dan status L/G.

| ID | Input | Harapan | Hasil aktual | Status |
|---|---|---|---|---|
| W12-01 | Rani; rani@example.com; Halo kampus | 200, respons sukses | Diterima; status 200 | L |
| W12-02 | Nama hanya spasi; kolom lain valid | 422, nama ditolak | Tampil "Nama wajib diisi"; status 422 | L |
| W12-03 | Email rani@; kolom lain valid | 422, email ditolak | Tampil "Email belum valid"; status 422 | L |
| W12-04 | Pesan kosong/spasi; kolom lain valid | 422, pesan ditolak | Tampil "Pesan wajib diisi"; status 422 | L |
| W12-05 | Nama 80 huruf A, lalu 81 huruf A | 80: 200; 81: 422 | 80 diterima; 81 ditolak | L |
| W12-06 | Pesan 500 huruf A, lalu 501 huruf A | 500: 200; 501: 422 | 500 diterima; 501 ditolak | L |
| W12-07 | Email 120 karakter, lalu 121 karakter | 120: 200; 121: 422 | 120 diterima; 121 ditolak | L |
| W12-08 | Pesan <b>Halo</b> | Tag tampil literal | Respons memuat `&lt;b&gt;Halo&lt;/b&gt;` | L |
| W12-09 | GET langsung ke proses.php | 405 | Ditolak; status 405 | L |

Lingkungan yang diuji: PHP 8.2.12, mbstring tersedia, Apache merespons proyek
melalui `http://localhost/minggu10/`.

## Luaran akhir
Tautan repository: isi tautan repository
Tautan video: isi tautan video maksimal tiga menit
