<?php
$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$date = $_POST['date'];
$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$fotobaru = date('dmYHis') . $image;
$path = "images/" . $fotobaru;
