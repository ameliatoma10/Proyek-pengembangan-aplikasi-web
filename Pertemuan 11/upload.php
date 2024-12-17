<?php
require 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $image = $_FILES['image'];

    // Validasi dan upload file
    if ($image['error'] == 0) {
        $target_dir = "upload_dir/";
        $target_file = $target_dir . basename($image["name"]);
        
        // Cek apakah file adalah gambar
        $check = getimagesize($image["tmp_name"]);
        if ($check !== false) {
            // Pindahkan file ke direktori tujuan
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                // Simpan informasi ke database
                $stmt = $pdo->prepare("INSERT INTO images (user_id, image_path) VALUES (?, ?)");
                $stmt->execute([$user_id, $target_file]);
                $message = "Gambar berhasil di-upload!";
            } else {
                $message = "Terjadi kesalahan saat meng-upload gambar.";
            }
        } else {
            $message = "File yang di-upload bukan gambar.";
        }
    } else {
        $message = "Terjadi kesalahan saat meng-upload file.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Gambar</title>
    <style>
        /* Gaya CSS sama seperti sebelumnya */
    </style>
</head>
<body>
    <h1>Upload Gambar</h1>
    <?php if ($message): ?>
        <div><?php echo $message; ?></div>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id" required>
        
        <label for="image">Pilih Gambar:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        
        <button type="submit">Upload</button>
    </form>
</body>
</html>