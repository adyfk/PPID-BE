<?php
if (isset($id)) {
    $query = "SELECT * from tb_berita where id=$id";
    $result = $conn->query($query);
} else {
    $query = "SELECT * from tb_berita";
    $result = $conn->query($query);
}

$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
