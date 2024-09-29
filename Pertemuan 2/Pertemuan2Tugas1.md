# Aplikasi Pencatatan Tabungan Siswa Berbasis Web
## Analisis kebutuhan dari sisi pengguna
### 1. Fungsionalitas
#### Fitur fitur yang dibutuhkan pengguna :
- Pencatatan transaksi tabungan (setoran dan penarikan).
- Laporan keuangan bulanan dan tahunan.
- Notifikasi pengingat penyetoran.
- Histori transaksi yang dapat diakses.
#### Alur kerja pengguna :
- Pengguna login ke aplikasi.
- Memilih opsi untuk mencatat transaksi baru.
- Mengisi detail transaksi dan menyimpannya.
- Mengakses laporan atau histori transaksi untuk memantau tabungan
### 2. Antarmuka Pengguna
#### Tampilan aplikasi yang ideal :
- Antarmuka yang bersih dan intuitif dengan menu navigasi jelas.
- Penggunaan grafik untuk visualisasi data tabungan.
#### Standar atau Pedoman Desain :
- Mengikuti pedoman material Desgn atau Bootstrap untuk konsistensi dan responsivitas
### 3. Kinerja
#### Kecepatan respon :
- Aplikasi harus merespons dalam waktu kurang dari 2 detik untuk setiap interaksi.
#### Jumlah pengguna Simultan : 
- Dapat menangani minimal 100 pengguna secara bersamaan tanpa penurunan kinerja.
### 4. Keamanan
#### Data yang perlu dilindungi
- Informasi pribadi pengguna dan data transaksi tabungan.
#### Cara melindungi aplikasi
- Mengimplementasikan enkripsi data, autentikasi dua faktor, dan pemantauan aktivitas mencurigakan.

## Analisis kebutuhan dari sisi Administrator (Admin)
### 1. Pengelolaan Data
#### Mengelola Data Pengguna, Produk, dan Transaksi:
- Sistem manajemen yang memungkinkan admin untuk menambah, mengedit, dan menghapus data pengguna serta transaksi.
#### Backup dan Restore Data:
- Backup otomatis setiap hari dan fitur restore yang mudah diakses.
#### Laporan
#### Laporan yang Dibutuhkan:
- Laporan transaksi harian, bulanan, dan laporan total tabungan per pengguna.
### 3. Pengembangan dan Pemeliharaan
#### Memperbarui dan Mengembangkan Aplikasi:
- Rencana untuk memperbarui fitur berdasarkan umpan balik pengguna dan tren teknologi.
#### Mengatasi Masalah Teknis:
- Menyediakan dukungan teknis 24/7 dan sistem pelaporan masalah yang mudah diakses oleh pengguna.

## Contoh Analisis Kebutuhan untuk Aplikasi Pencatatan Tabungan Siswa Berbasis Web
### 1. Aspek
- Manajemen Data Pengguna dan Transaksi: Mengelola informasi pengguna dan transaksi keuangan.
### 2. Kebutuhan Pengguna
- Kemudahan Pencatatan: Pengguna dapat dengan cepat mencatat setoran dan penarikan.
- Akses Laporan: Memudahkan pengguna untuk melihat laporan tabungan.
### 3. Kebutuhan Administrator
- Manajemen Data: Kemampuan untuk mengelola semua data pengguna dan transaksi dengan efisien.
- Laporan Analitik: Dapat menghasilkan laporan untuk analisis kinerja aplikasi.

| Aspek     | Kebutuhan Pengguna | Kebutuhan Adimistraktor    |
|-----------|--------------------|----------|
| Fungsional| Registrasi dan login pengguna, Melihat laporan riwayat transaksi, Pencatatan pemasukan dan pengeluaran, Melihat laporan riwayat transaksi dan Pengingat untuk setoran rutin. | Manajemen akun siswa (tambah, edit, hapus), Monitoring semua transaksi siswa, Mengakses laporan aktivitas pengguna, Mengakses laporan aktivitas pengguna. |
|    Antarmuka Penggunaan    | Desain yang intuitif dan mudah digunakan, Navigasi yang mudah antar fitur dan Responsif di berbagai perangkat (mobile dan desktop). | Antarmuka admin yang jelas dan mudah dinavigasi. |
| Keamanan  | Sistem autentikasi aman (password dan OTP) dan Perlindungan data transaksi. | Enkripsi data pengguna, Backup data secara berkala dan Monitoring untuk transaksi mencurigakan. |
| Keamanan | Proteksi data pribadi pengguna, enkripsi pada saat transaksi, autentikasi pengguna | Backup data secara berkala, kontrol akses untuk admin dan pengguna, sistem logging untuk melacak aktivitas |
| Laporan dan statik | Akses laporan visual tentang pertumbuhan tabungan dan Fitur filter untuk mencari transaksi. |  Menghasilkan laporan statistik penggunaan aplikasi, Fitur filter untuk mencari transaksi, Analisis kebiasaan menabung siswa. |

