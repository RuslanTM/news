<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <title>Новости</title>
</HEAD>
<BODY>
<h1 align="center">Новостная лента</h1>
<?php foreach($articles as $article): ?>
<h2><?php echo $article['name']; ?></h2>
    <p><?php echo $article['content']; ?></p>
<?php endforeach; ?>
</BODY>
</HTML>