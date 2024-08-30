<?php
require 'database.php'; // Menghubungkan ke database

// Cek apakah parameter ID ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data berdasarkan ID
    $sql = "DELETE FROM tabelpelanggan WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Data berhasil dihapus.";
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
    }
    header("Location: dashboard.php");
    exit();
} else {
    echo "ID tidak disediakan.";
    exit();
}

// Tutup koneksi
$conn->close();
?>
