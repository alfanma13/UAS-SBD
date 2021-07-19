<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inventaris Barang PT Uwu</title>
    <style>
        body {
            font-family: Helvetica
        }

        table {
            border-collapse: collapse
        }

        th,
        td {
            font-size: 13px;
            border: 1px solid #DEDEDE;
            padding: 3px 5px;
            color: #303070
        }

        th {
            background: #00ffff;
            font-size: 12px;
            border-color: #B0B0B0
        }
    </style>
</head>

<body>
    <center>
        <font face="bahnschrift">
            <h1>INVENTARIS BARANG PT UWU</h1>
        </font>
    </center>
    <center>
        <font face="bahnschrift">
            <h3>by Alfan Maulana</h3>
        </font>
    </center>
    <font face="bahnschrift">
        <h3>Transaksi</h3>
    </font>
    <table>
        <?php
        include_once('koneksi.php');
        if (isset($_POST['submit'])) {

            $idt = $_POST['id_transaksi'];
            $idm = $_POST['id_material'];
            $idk = $_POST['id_karyawan'];
            $tanggal = $_post['tanggal'];
            $keterangan = $_post['keterangan'];

            $sql = 'INSERT INTO transaksi (id_transaksi, id_material, id_karyawan, tanggal, keterangan)';
            $sql .= "VALUE ('{$idt}', '{$idm}', '{$idk}','{$tanggal}','{$keterangan})";
            $result = mysqli_query($koneksi, $sql);

            header('location: index.php');
            echo "Data Berhasil Ditambahkan .<a href='index.php'>View Items</a>";
        }
        ?>

        <a href="index.php">Kembali</a>
        <font face="bahnschrift">
            <h3>Tambah Data Transaksi</h3>
        </font>

        <form action="add.php" method="post">
            <table width="25%" border="0">
                <tr>
                    <td>ID_Transaksi</td>
                    <td><input type="text" name="idt"></td>
                </tr>
                <tr>
                    <td>ID_Material</td>
                    <td><input type="text" name="idm"></td>
                </tr>
                <tr>
                    <td>ID_Karyawan</td>
                    <td><input type="text" name="idk"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="text" name="tanggal"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan"></td>
                </tr>

                <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>
</body>

</html>