<?php
require 'db.php';

$message = ""; // Variabel untuk menyimpan pesan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $report_month = $_POST['report_month'];
    $report_year = $_POST['report_year'];
    $total_income = $_POST['total_income'];
    $total_expense = $_POST['total_expense'];

    // Siapkan pernyataan untuk memasukkan data laporan
    $stmt = $pdo->prepare("INSERT INTO reports (user_id, report_month, report_year, total_income, total_expense) VALUES (?, ?, ?, ?, ?)");

    // Eksekusi pernyataan dan tangani kesalahan
    try {
        $stmt->execute([$user_id, $report_month, $report_year, $total_income, $total_expense]);
        $message = "Laporan berhasil ditambahkan!";
    } catch (PDOException $e) {
        $message = "Terjadi kesalahan: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Laporan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #2980b9;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #3498db;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Tambah Laporan</h1>
    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
    <form method="POST">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id" required>
        
        <label for="report_month">Bulan:</label>
        <input type="number" id="report_month" name="report_month" min="1" max="12" required>
        
        <label for="report_year">Tahun:</label>
        <input type="number" id="report_year" name="report_year" required>
        
        <label for="total_income">Total Pendapatan:</label>
        <input type="number" id="total_income" name="total_income" step="0.01" required>
        
        <label for="total_expense">Total Pengeluaran:</label>
        <input type="number" id="total_expense" name="total_expense" step="0.01" required>
        
        <button type="submit">Tambah</button>
    </form>
</body>
</html>