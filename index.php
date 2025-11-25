<style type="text/css">
    .header {
        background-color: pink;
    }
</style>

<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM artist_sm_entertaiment ORDER BY id DESC");
?>

<html>
<head>    
    <title>Artist SM Entertainment</title>
</head>

<body>
    <b>Data Artis SM Entertainment</b><br>
    <a href="add.php">Tambah Artis</a><br/><br/>

    <table width='80%' border=1>
        <tr class="header">
            <th>No</th>
            <th>Nama Artis</th>
            <th>Tanggal Lahir</th>
            <th>Tahun Debut</th>
            <th>Nama Grup</th>
            <th>Aksi</th>
        </tr>

        <?php  
        $i = 1;
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$user_data['nama_artis']."</td>";
            echo "<td>".$user_data['Tanggal_Lahir']."</td>";
            echo "<td>".$user_data['Tahun_Debut']."</td>";    
            echo "<td>".$user_data['nama_Grup']."</td>";     

            $id = isset($user_data['id']) ? $user_data['id'] : '';
            if ($id === '') {
                echo "<td>Tidak ada ID | Tidak bisa edit</td>";
            } else {
                echo "<td><a href=\"edit.php?id=$id\">Edit</a> | <a href=\"delete.php?id=$id\">Delete</a></td>";
            }

            echo "</tr>";
            $i++;
        }
        ?>
    </table>
</body>
</html>