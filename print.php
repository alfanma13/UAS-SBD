<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT UWU</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>INVENTARIS BARANG PT UWU</h1>
    </header>
    <div class="header">
        <div class="header-logo">Alfan Maulana</div>
    </div>
    <nav>
        <a href="index.php">Items</a>
        <a href="transaksi_tipe.php">Transaction Type</a>
        <a href="transaksi.php">Transaction</a>
        <a href="transaksi_detail.php">Transaction Details</a>
    </nav>
    <center>
        <h3>Tabel transaksi_detail</h3>
    </center>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Material</th>
                <th>ID Karyawan</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  transaction_details';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $row['id_transaction_det'] ?></td>
                    <td><?php echo $row['id_transaction'] ?></td>
                    <td><?php echo $row['id_item'] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td><?php echo $row['keterangan'] ?></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
    <script>
        window.print();
    </script>
    <br> <br>
    <footer>
        <p>&copy; 2021 - Sistem Basis Data</p>
    </footer>
</body>

</html>