<html>
<head>
    <title>Add artist sm entertaiment</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
<p>SM Entertaiment</p>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Artis</td>
                <td><input type="text" name="nama_artis"></td>
            </tr>
            <tr> 
                <td>Tanggal Lahir</td>
                <td><input type="date" name="Tanggal_Lahir"></td>
            </tr>
            <tr> 
                <td>Tahun Debut</td>
                <td><input type="text" name="Tahun_Debut"></td>
            </tr>
             <tr> 
                <td>Nama Grup</td>
                <td><input type="text" name="nama_Grup"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

      // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        // Akses $_POST dengan pengecekan isset untuk menghindari warning
        $nama_artis = isset($_POST['nama_artis']) ? $_POST['nama_artis'] : '';
        $Tanggal_Lahir = isset($_POST['Tanggal_Lahir']) ? $_POST['Tanggal_Lahir'] : '';
        $Tahun_Debut = isset($_POST['Tahun_Debut']) ? $_POST['Tahun_Debut'] : '';
        $nama_Grup = isset($_POST['nama_Grup']) ? $_POST['nama_Grup'] : ''; 

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query ($mysqli, "INSERT INTO artist_sm_entertaiment(nama_artis,Tanggal_Lahir,Tahun_Debut,nama_Grup) VALUES('$nama_artis','$Tanggal_Lahir','$Tahun_Debut','$nama_Grup')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View artist_sm_entertaiment</a>";
    }
    ?>
</body>
</html>