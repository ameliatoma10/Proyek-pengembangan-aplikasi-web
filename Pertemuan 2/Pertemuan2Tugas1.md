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
| Aspek     | Kebutuhan Pengguna | Kebutuhan Adimistraktor    |
|-----------|--------------------|----------|
| Fungsional| Registrasi dan login pengguna, Melihat laporan riwayat transaksi, Pencatatan pemasukan dan pengeluaran, Melihat laporan riwayat transaksi dan Pengingat untuk setoran rutin. | Manajemen akun siswa (tambah, edit, hapus), Monitoring semua transaksi siswa, Mengakses laporan aktivitas pengguna, Mengakses laporan aktivitas pengguna. |
|    Antarmuka Penggunaan    | Desain yang intuitif dan mudah digunakan, Navigasi yang mudah antar fitur dan Responsif di berbagai perangkat (mobile dan desktop). | Antarmuka admin yang jelas dan mudah dinavigasi. |
| Keamanan  | Sistem autentikasi aman (password dan OTP) dan Perlindungan data transaksi. | Enkripsi data pengguna, Backup data secara berkala dan Monitoring untuk transaksi mencurigakan. |
| Keamanan | Proteksi data pribadi pengguna, enkripsi pada saat transaksi, autentikasi pengguna | Backup data secara berkala, kontrol akses untuk admin dan pengguna, sistem logging untuk melacak aktivitas |
| Laporan dan statik | Akses laporan visual tentang pertumbuhan tabungan dan Fitur filter untuk mencari transaksi. |  Menghasilkan laporan statistik penggunaan aplikasi, Fitur filter untuk mencari transaksi, Analisis kebiasaan menabung siswa. |

## Mengapa analisis kebuthan penting?
### - Memastikan Kesesuaian dengan Kebutuhan Pengguna
Analisis kebutuhan membantu memahami secara mendalam apa yang diinginkan dan dibutuhkan pengguna aplikasi, seperti siswa, guru, dan orang tua. Dengan analisis ini, aplikasi dapat dirancang secara khusus untuk memenuhi kebutuhan mereka. Misalnya, siswa membutuhkan tampilan yang mudah dipahami untuk mencatat tabungan mereka, sedangkan guru memerlukan fitur pemantauan dan laporan. Dengan begitu, aplikasi akan relevan dan lebih mudah diterima oleh semua pihak.
### - Mengurangi Risiko Kegagalan Proyek
Tanpa analisis kebutuhan yang baik, ada kemungkinan besar aplikasi tidak akan memenuhi harapan pengguna atau bahkan gagal digunakan. Fitur yang tidak relevan atau fungsionalitas yang buruk bisa menyebabkan proyek gagal. Analisis kebutuhan membantu mendeteksi potensi masalah sejak awal sehingga tim pengembang dapat membuat keputusan yang lebih tepat dan meminimalisir risiko kegagalan.
### - Meningkatkan Efisiensi Pengembangan
Analisis kebutuhan memungkinkan pengembang untuk lebih fokus pada fitur yang benar-benar penting dan sesuai dengan kebutuhan pengguna. Dengan begitu, pengembangan aplikasi menjadi lebih terarah dan efisien, menghemat waktu serta biaya. Pengembang tidak perlu membuang energi pada fitur yang tidak diperlukan, dan hasil akhir lebih optimal.
## Teknik Pengumpulan Data dalam Analisis Kebutuhan :
### - Wawancara
Teknik ini melibatkan percakapan langsung dengan pengguna potensial (siswa, guru, atau orang tua) untuk mendapatkan wawasan mendalam tentang kebutuhan dan masalah mereka.
### - Survei
Survei memungkinkan pengumpulan data dari sejumlah besar responden sekaligus. Melalui kuesioner, tim pengembang dapat memperoleh masukan terkait fitur yang diinginkan dan preferensi pengguna terhadap aplikasi.
### - Observasi
Mengamati langsung bagaimana proses pencatatan tabungan dilakukan secara manual atau dengan aplikasi yang sudah ada membantu dalam memahami kebutuhan aktual dan tantangan yang dihadapi oleh pengguna.
### - Dokumentasi
Melihat dokumen atau data yang relevan, seperti catatan tabungan siswa sebelumnya, memberikan gambaran lebih jelas tentang alur kerja dan persyaratan spesifik yang perlu diintegrasikan ke dalam aplikasi.
## Kesimpulan
Analisis kebutuhan memainkan peran penting dalam pengembangan aplikasi pencatatan tabungan siswa. Dengan memahami kebutuhan pengguna, proyek dapat berjalan lebih efisien, mengurangi risiko kegagalan, dan menghasilkan produk yang tepat guna. Teknik seperti wawancara, survei, observasi, dan dokumentasi membantu memastikan aplikasi dirancang berdasarkan data yang akurat, memenuhi kebutuhan semua pengguna, serta mendukung keberhasilan proyek.
