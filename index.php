<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
</head>

<body>
    <h2>CRUD Mahasiswa</h2>

    <!-- Form for adding new Mahasiswa -->
    <form action="create.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required>
        <button type="submit">Tambah Mahasiswa</button>
    </form>

    <!-- Table to display Mahasiswa data -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php include 'read.php'; ?>
    </table>
</body>

</html>