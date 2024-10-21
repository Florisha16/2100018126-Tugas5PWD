<?php
include 'koneksi.php'; 

$sql = "SELECT * FROM registrasi WHERE is_deleted = 0";
$result = $conn->query($sql);
$count = 1; // Inisialisasi variabel count
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Kelola Pendaftaran</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #5cb85c;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: #5cb85c;
            padding: 5px 10px;
            border: 1px solid #5cb85c;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #5cb85c;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Data Pendaftaran Peserta Seminar</h2>
    <table>
        <tr>
            <th>No</th> <!-- Tambahkan kolom untuk nomor -->
            <th>Email</th>
            <th>Nama</th>
            <th>Institusi</th>
            <th>Country</th>
            <th>Address</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $count++; ?></td> <!-- Tampilkan count dan tingkatkan nilainya -->
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['institusi']; ?></td>
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>