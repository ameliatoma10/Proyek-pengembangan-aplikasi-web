<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $report_month = $_POST['report_month'];
    $report_year = $_POST['report_year'];
    $total_income = $_POST['total_income'];
    $total_expense = $_POST['total_expense'];

    $stmt = $pdo->prepare("INSERT INTO reports (user_id, report_month, report_year, total_income, total_expense) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $report_month, $report_year, $total_income, $total_expense]);
    echo "Laporan berhasil ditambahkan!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Laporan</title>
</head>
<body>
    <h1>Tambah Laporan</h1>
    <form method="POST">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id" required>
        <br>
        <label for="report_month">Bulan:</label>
        <input type="number" id="report_month" name="report_month" min="1" max="12" required>
        <br>
        <label for="report_year">Tahun:</label>
        <input type="number" id="report_year" name="report_year" required>
        <br>
        <label for="total_income">Total Pendapatan:</label>
        <input type="number" id="total_income" name="total_income" step="0.01" required>
        <br>
        <label for="total_expense">Total Pengeluaran:</label>
        <input type="number" id="total_expense" name="total_expense" step="0.01" required>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>