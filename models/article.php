<?php
require_once __DIR__ . '/../functions/sql.php';

function article_getAll()
{
    $sql = "SELECT * FROM article";
    $articles = Sql_query($sql);
    return $articles;
}