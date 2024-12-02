<?php
require 'db.php';

$message = ""; // Variabel untuk menyimpan pesan

// Ambil data laporan
try {
    $stmt = $pdo->query("SELECT * FROM reports");
    $reports = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $message = "Terjadi kesalahan saat mengambil laporan: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lihat Laporan</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #2980b9;
            color: white;
        }
        .message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Laporan Keuangan</h1>
    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
    <table>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Total Pendapatan</th>
            <th>Total Pengeluaran</th>
            <th>Tanggal Dibuat</th>
        </tr>
        <?php if (!empty($reports)): ?>
            <?php foreach ($reports as $report): ?>
            <tr>
                <td><?php echo htmlspecialchars($report['id']); ?></td>
                <td><?php echo htmlspecialchars($report['user_id']); ?></td>
                <td><?php echo htmlspecialchars($report['report_month']); ?></td>
                <td><?php echo htmlspecialchars($report['report_year']); ?></td>
                <td><?php echo htmlspecialchars($report['total_income']); ?></td>
                <td><?php echo htmlspecialchars($report['total_expense']); ?></td>
                <td><?php echo htmlspecialchars($report['created_at']); ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Tidak ada laporan untuk ditampilkan.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>