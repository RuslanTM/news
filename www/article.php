<?php
require __DIR__ . '/../models/article.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location: /');
    exit;
}

$articles = article_getArticle($id);

include __DIR__ .  '/../views/article.php';