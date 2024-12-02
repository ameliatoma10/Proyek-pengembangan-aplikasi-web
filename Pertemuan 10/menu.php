<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Keuangan Siswa Berbasis Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        nav {
            background: #2980b9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            margin: 15px 0;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            padding: 15px 25px;
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s;
            display: inline-block;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        nav ul li a:hover {
            background: #3498db;
            transform: translateY(-2px);
        }
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Aplikasi Manajemen Keuangan Siswa Berbasis Web</h1>
    <nav>
        <ul>
            <li><a href="add_user.php">Tambah Pengguna</a></li>
            <li><a href="add_transaction.php">Tambah Transaksi</a></li>
            <li><a href="add_report.php">Tambah Laporan</a></li>
            <li><a href="view_reports.php">Lihat Laporan</a></li>
        </ul>
    </nav>
    <footer>
        &copy; 2024 Manajemen Keuangan Siswa
    </footer>
</body>
</html>