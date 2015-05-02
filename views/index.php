<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <title>Новости</title>
</HEAD>
<BODY>
<h1 align="center">Новости дня</h1>
<?php foreach($articles as $article): ?>
    <a href =
       "www/article.php?id=<?php echo $article['id']; ?>"
        >
<h2><?php echo $article['name']; ?></h2>
    </a>
    <p><?php echo $article['content']; ?></p>
<?php endforeach; ?>
<a href = "/add.php">Добавить новость</a>
</BODY>
</HTML>