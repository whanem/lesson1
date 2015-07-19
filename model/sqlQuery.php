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

function articles_sql_query(){
    $query = 'SELECT * FROM News';

    if( $query !== false )
        return $data_DB = sql_query($query);
    else return false;
}

function article_get($id_article){
    sql_connect();
    $query = 'SELECT * FROM News WHERE id_article = "'. $id_article .'"';

    if( $query !== false )
        return $data_DB = sql_query($query);
    else return false;
}