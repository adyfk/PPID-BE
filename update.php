<?php
include 'connection.php';
include 'paramsPost.php';

if (!isset($_POST['image'])) {
    if (move_uploaded_file($tmp, $path)) {
        $query = "UPDATE tb_berita SET title='$title', `desc`='$desc', `date`='$date', `image`='$fotobaru' WHERE id=$id";
    }
} else {
    $query = "UPDATE tb_berita SET title='$title', `desc`='$desc', `date`='$date' WHERE id=$id";
}

if ($conn->query($query) === TRUE) {
    include 'select.php';
} else {
    echo "Error updating record: " . $conn->error;
}
