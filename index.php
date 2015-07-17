<?php
require __DIR__  . '/model/sqlQueryInsert.php';
require __DIR__ . '/function/article_preview.php';

sql_connect();
$articles = article_sql_query();

if( $articles === false )
    $msg_error = 'Статьи не могут быть получены';
else{
    $lenght = 600;
    $articles = article_preview($articles, $lenght);
}
require __DIR__ . '/view/v_index.php';