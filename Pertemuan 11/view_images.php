<?php
require 'db.php';

$message = "";

// Ambil data gambar
try {
    $stmt = $pdo->query("SELECT * FROM images");
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $message = "Terjadi kesalahan saat mengambil gambar: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lihat Gambar</title>
    <style>
        /* Gaya CSS sama seperti sebelumnya */
    </style>
</head>
<body>
    <h1>Gambar yang Di-upload</h1>
    <?php if ($message): ?>
        <div><?php echo $message; ?></div>
    <?php endif; ?>
    <div>
        <?php if (!empty($images)): ?>
            <?php foreach ($images as $image): ?>
                <div>
                    <img src="<?php echo htmlspecialchars($image['image_path']); ?>" alt="Gambar" style="max-width: 200px; max-height: 200px;">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada gambar untuk ditampilkan.</p>
        <?php endif; ?>
    </div>
</body>
</html>