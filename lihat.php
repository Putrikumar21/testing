<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Tamu</title>
</head>
<body>
    <h1>Daftar Buku Tamu</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Isi Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM buku_tamu";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['ID_BT']}</td>
                        <td>{$row['NAMA']}</td>
                        <td>{$row['EMAIL']}</td>
                        <td>{$row['ISI']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Belum ada data</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
