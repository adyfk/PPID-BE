<?php
include 'connection.php';
include 'paramsPost.php';

if (move_uploaded_file($tmp, $path)) {
    $query = "INSERT INTO tb_berita VALUES('', '$title', '$desc', '$date', '$fotobaru')";
    if ($conn->query($query) === TRUE) {
        $id = $conn->insert_id;
        include 'select.php';
    }
}
