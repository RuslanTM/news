<?php

?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <title>Новости</title>
</HEAD>
<BODY>
<h1 align="center">Новости дня</h1>
<?php foreach($articles as $article): ?>
    <a href = "/article.php?id=<?php echo $article['id']; ?>"
<h2><?php echo $article['name']; ?></h2> </a>
    <p><?php echo $article['content']; ?></p>
<?php endforeach; ?>
</BODY>
</HTML>