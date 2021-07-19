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

    $idk = $_GET['id_karyawan'];

    $result = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan=$idk");

    while ($user_data = mysqli_fetch_array($result)) {
        $idk = $user_data['id_karyawan'];
        $nama = $user_data['nama_karyawan'];
        $bagian = $user_data['bagian'];
        $extension = $user_data['extension'];
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
                    <td><input type="text" name="id_karyawan" value=<?php echo $idk; ?>></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_karyawan" value=<?php echo $nama; ?>></td>
                </tr>
                <tr>
                    <td>Bagian</td>
                    <td><input type="text" name="bagian" value=<?php echo $bagian; ?>></td>
                </tr>
                <tr>
                    <td>Extension</td>
                    <td><input type="text" name="extension" value=<?php echo $extension; ?>></td>
                    </>
                <tr>
                    <td><input type="hidden" name="id_karyawan" value=<?php echo $_GET['id_karyawan']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>

    </html