<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="styletambah.css" rel="stylesheet" type="text/css" />
        <title>Tambah Data</title>
    </head>

    <body>
        <a href="index.php">KEMBALI KE MENU</a>
        <br /><br />

        <form action="tambah.php" method="post" name="form1">
            <table width="25%" border="5">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>No_Telepon</td>
                    <td><input type="text" name="no_telepon"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
                </tr>
            </table>
        </form>

        <?php

        if (isset($_POST['Submit'])) {
            $id = $_POST['id'];
            $no = $_POST['no_telpon'];
            $alamat = $_POST['alamat'];

            include("koneksi.php");

            $result = mysqli_query($koneksi, "INSERT INTO film (id,nama,id_rak,id_kategori) 
        VALUES('$id','$no','$alamat')");


            echo "User added successfully. <a href='index.php'>View Users</a>";
        }
        ?>
    </body>

    </html>