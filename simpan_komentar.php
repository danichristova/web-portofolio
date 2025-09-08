<?php
include("koneksi.php");

$nama = $_POST['nama'];
$komentar = $_POST['komentar'];

$sql = "INSERT INTO testimoni (nama, komentar) VALUES ('$nama', '$komentar')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php#rating");
    exit; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>