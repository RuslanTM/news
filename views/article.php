<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новость</title>
</head>
<body>
<?php foreach($articles as $article):?>
    <h1><?php echo $article['name']; ?></h1>
    <p><?php echo $article['content']; ?></p>
<?php endforeach; ?>
</body>
</html>