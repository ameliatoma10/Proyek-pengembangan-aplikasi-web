<?php
require 'db.php';

$message = ""; // Variabel untuk menyimpan pesan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $transaction_type = $_POST['transaction_type'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    // Siapkan pernyataan untuk memasukkan data transaksi
    $stmt = $pdo->prepare("INSERT INTO transactions (user_id, transaction_type, amount, description) VALUES (?, ?, ?, ?)");

    // Eksekusi pernyataan dan tangani kesalahan
    try {
        $stmt->execute([$user_id, $transaction_type, $amount, $description]);
        $message = "Transaksi berhasil ditambahkan!";
    } catch (PDOException $e) {
        $message = "Terjadi kesalahan: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
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
        input, select, textarea {
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
    <h1>Tambah Transaksi</h1>
    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
    <form method="POST">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id" required>
        
        <label for="transaction_type">Jenis Transaksi:</label>
        <select id="transaction_type" name="transaction_type" required>
            <option value="setoran">Setoran</option>
            <option value="penarikan">Penarikan</option>
        </select>
        
        <label for="amount">Jumlah:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>
        
        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description"></textarea>
        
        <button type="submit">Tambah</button>
    </form>
</body>
</html>