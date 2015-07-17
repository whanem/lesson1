<?php
require __DIR__ . '/../function/DB.php';

function article_sql_add($title, $article)
{
    sql_connect();
    $query = 'INSERT INTO News
            (title, article)
            VALUES
            ("' . $title . '", "' . $article . '")';
    $sql_query = sql_insert($query);
    return $sql_query;
}

function article_sql_query(){
    $query = 'SELECT * FROM News';

    if( $query !== false )
        return $data_DB = sql_query($query);
    else return false;
}