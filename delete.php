<?php
include 'connection.php';

$id = $_GET['id'];
$query = "SELECT `image` FROM tb_berita where id=$id";

$result = $conn->query($query);
$imageName = $result->fetch_all(MYSQLI_ASSOC)[0]["image"];
unlink("images/$imageName");

$query = "DELETE FROM tb_berita where id=$id";
if ($conn->query($query) === TRUE) {
    echo "Sukses";
} else {
    echo $conn->error;
}
