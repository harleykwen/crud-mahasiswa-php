<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM mahasiswa WHERE id=$id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $nim = $row['nim'];
        $jurusan = $row['jurusan'];
        echo "
            <form action='update.php' method='POST'>
                <input type='text' name='id' required value={$id} style='display: none;'>
                <label for='nama'>Nama:</label>
                <input type='text' name='nama' required value={$nama}>
                <label for='nim'>NIM:</label>
                <input type='text' name='nim' required value={$nim}>
                <label for='jurusan'>Jurusan:</label>
                <input type='text' name='jurusan' required value={$jurusan}>
                <button type='submit'>Update Mahasiswa</button>
            </form>
        ";
    } else {
        echo "Mahasiswa tidak ditemukan.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $id = $_POST['id'];

    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
