<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $transaction_type = $_POST['transaction_type'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("INSERT INTO transactions (user_id, transaction_type, amount, description) VALUES (?, ?, ?, ?)");
    $stmt->execute([$user_id, $transaction_type, $amount, $description]);
    echo "Transaksi berhasil ditambahkan!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
</head>
<body>
    <h1>Tambah Transaksi</h1>
    <form method="POST">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id" required>
        <br>
        <label for="transaction_type">Jenis Transaksi:</label>
        <select id="transaction_type" name="transaction_type" required>
            <option value="setoran">Setoran</option>
            <option value="penarikan">Penarikan</option>
        </select>
        <br>
        <label for="amount">Jumlah:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>
        <br>
        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>