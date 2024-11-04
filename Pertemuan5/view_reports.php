<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM reports");
$reports = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lihat Laporan</title>
</head>
<body>
    <h1>Laporan Keuangan</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Total Pendapatan</th>
            <th>Total Pengeluaran</th>
            <th>Tanggal Dibuat</th>
        </tr>
        <?php foreach ($reports as $report): ?>
        <tr>
            <td><?php echo $report['id']; ?></td>
            <td><?php echo $report['user_id']; ?></td>
            <td><?php echo $report['report_month']; ?></td>
            <td><?php echo $report['report_year']; ?></td>
            <td><?php echo $report['total_income']; ?></td>
            <td><?php echo $report['total_expense']; ?></td>
            <td><?php echo $report['created_at']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>