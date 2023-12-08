<!DOCTYPE html>
<html>
<head>
    <title>ujian web</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>

<h2>Data Mahasiswa</h2>

<form action="insert.php" method="post">
    <label for="npm">NPM:</label>
    <input type="text" id="npm" name="npm">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <label for="jurusan">Jurusan:</label>
    <input type="text" id="jurusan" name="jurusan">
    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat"><br>
    <div id="button">
    <input type="submit" value="Submit">
    </div>
</form>


<h3>Daftar Mahasiswa</h3>
<table>
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'mahasiswa');

        $query = "SELECT * FROM data_mahasiswa";
        $result = $mysqli->query($query);
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['npm']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['jurusan']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td><a href='update.php?id=".$row['npm']."' class='update'>Update</a> | <a href='delete.php?id=".$row['npm']."' class='delete'>Delete</a></td>";
            echo "</tr>";
        }
    ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
