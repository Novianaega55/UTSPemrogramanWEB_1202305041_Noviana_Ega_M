<?php
// koneksi ke database
include_once("config.php");

// ambil ID dari URL
if (!isset($_GET['id'])) {
    die("Error: ID tidak ditemukan.");
}
$id = $_GET['id'];

// ambil data artis berdasarkan ID
$result = mysqli_query($mysqli, "SELECT * FROM artist_sm_entertaiment WHERE id=$id");

if (!$result || mysqli_num_rows($result) == 0) {
    die("Error: Data tidak ditemukan.");
}

$user_data = mysqli_fetch_array($result);

// jika tombol update ditekan
if (isset($_POST['update'])) {
    $nama_artis = $_POST['nama_artis'];
    $Tanggal_Lahir = $_POST['Tanggal_Lahir'];
    $Tahun_Debut = $_POST['Tahun_Debut'];
    $nama_Grup = $_POST['nama_Grup'];

    // jalankan query update
    $update = mysqli_query($mysqli, "UPDATE artist_sm_entertaiment 
        SET nama_artis='$nama_artis', 
            Tanggal_Lahir='$Tanggal_Lahir',
            Tahun_Debut='$Tahun_Debut',
            nama_Grup='$nama_Grup' 
        WHERE id=$id");

    // jika berhasil, kembali ke index
    if ($update) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Data Artis</title>
</head>
<body>
    <h2>Edit Data Artis</h2>
    <form action="edit.php?id=<?php echo $id; ?>" method="post">
        <table>
            <tr>
                <td>Nama Artis</td>
                <td><input type="text" name="nama_artis" value="<?php echo $user_data['nama_artis']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="Tanggal_Lahir" value="<?php echo $user_data['Tanggal_Lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Tahun Debut</td>
                <td><input type="text" name="Tahun_Debut" value="<?php echo $user_data['Tahun_Debut']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Grup</td>
                <td><input type="text" name="nama_Grup" value="<?php echo $user_data['nama_Grup']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="index.php">← Kembali ke Daftar Artis</a>
</body>
</html>