<?php
include 'config.php';

$result = $conn->query("SELECT * FROM mahasiswa");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['nim']}</td>
            <td>{$row['jurusan']}</td>
            <td>
                <a href='update.php?id={$row['id']}'>Edit</a>
                <a href='delete.php?id={$row['id']}'>Hapus</a>
            </td>
        </tr>";
}

$conn->close();
