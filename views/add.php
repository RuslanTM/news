<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <title>Новая новость</title>
</HEAD>
<BODY>
<h1 align="center">Форма для добавления новости</h1>
<form action = "add.php" method = "post">
    <label for = "name">Заголовок:</label>
    <input type = "text" name = "name" id = "name"><br>
    <label for = "content">Содержание новости:</label>
    <input type = "text" name = "content" id="content">
    <input type = "submit" value = "Добавить">
</form>
</BODY>
</HTML>