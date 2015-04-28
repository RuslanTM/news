<?php
require '/../models/article.php';
if (!empty($_POST)) {
    $data = [];
    if (!empty($_POST['name'])) {
        $data['name'] = $_POST['name'];
    }
    if (!empty($_POST['content'])) {
        $data['content'] = $_POST['content'];
    }
}

if (isset($data['name']) && isset($data['content'])) {
    article_insert($data);
    header("location: /");
    die;
}

include '/../views/add.php';
