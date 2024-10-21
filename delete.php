<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "UPDATE registrasi SET is_deleted = 1 WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Data berhasil dihapus!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
header("Location: admin.php");
exit;
?>