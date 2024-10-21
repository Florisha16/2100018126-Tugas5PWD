<?php
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    $sql = "INSERT INTO registrasi (email, nama, institusi, country, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $email, $nama, $institusi, $country, $address);

    if ($stmt->execute()) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Peserta Seminar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <h2>Form Registrasi Peserta Seminar</h2>
    <form method="post" action="">
        Email: <input type="email" name="email" required><br>
        Nama: <input type="text" name="nama" required><br>
        Institusi: <input type="text" name="institusi" required><br>
        Country: <input type="text" name="country" required><br>
        Address: <textarea name="address" required></textarea><br>
        <input type="submit" value="Daftar">
    </form>
</body>
</html>