<?php
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    $sql = "UPDATE registrasi SET email = ?, nama = ?, institusi = ?, country = ?, address = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $email, $nama, $institusi, $country, $address, $id);

    if ($stmt->execute()) {
        echo "Data berhasil diupdate!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$id = $_GET['id'];
$sql = "SELECT * FROM registrasi WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
            text-align: center;
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
    <h2>Edit Data Pendaftaran Peserta Seminar</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        Institusi: <input type="text" name="institusi" value="<?php echo $row['institusi']; ?>" required><br>
        Country: <input type="text" name="country" value="<?php echo $row['country']; ?>" required><br>
        Address: <textarea name="address" required><?php echo $row['address']; ?></textarea><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>