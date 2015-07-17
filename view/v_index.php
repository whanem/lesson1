<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сайт новостей</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <p class="msg-error"><?php echo $msg_error;?></p>

    <?php if( $articles ) foreach( $articles as $article):?>
    <div class="article">
        <p class="article_title"><a href="<?php echo 'edit.php?id=' . $article['id_article'];?>"><?php echo $article['title']?></a></p>
        <p class="article_preview"><?php echo $article['article']?>... <a href="<?php echo 'edit.php?id=' . $article['id_article'];?>"> читать далее</a></p>
    </div>
    <?php endforeach;?>

</body>
</html>