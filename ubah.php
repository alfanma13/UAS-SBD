<?php

include("koneksi.php");

if (isset($_POST['update'])) {
    $idk = $_POST['id_karyawan'];

    $idk = $_POST['id_karyawan'];
    $nama = $_POST['nama_karyawan'];
    $bagian = $_POST['bagian'];
    $extension = $_POST['extension'];

    $result = mysqli_query(
        $koneksi,
        "UPDATE karyawan SET id_karyawan='$idk',nama_karyawan='$nama',bagian='$bagian',extension='$extension' 
	WHERE id_karyawan=$idk"
    );

    header("Location: index.php");
}
?>


<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="styleubah.css" rel="stylesheet" type="text/css" />
        <title>Ubah Data</title>
    </head>

    <?php

    $id = $_GET['id_supplier'];

    $result = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $id = $user_data['id_supplier'];
        $no = $user_data['no_telp'];
        $alamat = $user_data['alamat'];
    }
    ?>
    <html>

    <body>
        <a href="index.php">KEMBALI KE MENU</a>
        <br /><br />

        <form name="update_user" method="post" action="ubahk.php">
            <table border="0">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id_supplier" value=<?php echo $id; ?>></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td><input type="text" name="no_telp" value=<?php echo $no; ?>></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
                    </>
                <tr>
                    <td><input type="hidden" name="id_supplier" value=<?php echo $_GET['id_supplier']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>

    </html