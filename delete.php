<?php
include_once("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM artist_sm_entertaiment WHERE id=$id");

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal menghapus data: " . mysqli_error($mysqli);
    }
} else {
    echo "Error: ID tidak ditemukan.";
}
?>
