<?php
require __DIR__ . '/../functions/sql.php';

function article_getAll()
{
    $sql = "SELECT * FROM article ORDER BY publication_date";
    $articles = Sql_query($sql);
    return $articles;
}

function article_getArticle($id){
	$sql = "SELECT * FROM article WHERE id=" .$id;
	$article = Sql_query($sql);
	return $article;
}

function article_insert($data){
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO article
            (name, content, publication_date)
            VALUES
            ('" . $data['name'] . "', '". $data['content'] ."', '". $date ."')"
        ;
    Sql_exec($sql);
}



