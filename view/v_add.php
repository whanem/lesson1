<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить статью</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <h2>Добавить статью</h2>
    <form action="../add.php" method="post">
        <p>Название статьи</p>
        <textarea name="title" id="text" cols="90" rows="2"></textarea>
        <p>Содержимое статьи</p>
        <textarea name="article" id="" cols="90" rows="20"></textarea>
        <p><input type="submit"/></p>
    </form>
</body>
</html>