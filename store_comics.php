<?php
session_start();
require_once './db/connection.php';
require_once './db/comics.php';

$data = [
    'comics_name' => $_POST['comics_name'],
    'comics_image' => $_FILES['comics_image']['name'],
];
$file = $_FILES['comics_image'];
$file_name = $file['name'];
move_uploaded_file($file['tmp_name'], './img/' . $file_name);
insertComics($data);
