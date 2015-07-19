<?php
require __DIR__ . '/model/sqlQuery.php';
require __DIR__ . '/function/article_preview.php';

sql_connect();
$articles = articles_sql_query();

if( $articles === false )
    $msg_error = '������ �� ����� ���� ��������';
else{
    $lenght = 600;
    $articles = article_preview($articles, $lenght);
}
require __DIR__ . '/view/v_index.php';