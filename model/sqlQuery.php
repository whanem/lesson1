<?php
require __DIR__ . '/../function/DB.php';

function article_sql_add($title, $article){
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

    $query = sql_query($query);
    if( false !== $query )
        return $query;
    else return false;
}

function article_get($id_article){
    sql_connect();
    $query = 'SELECT * FROM News
              WHERE
              id_article = "'. $id_article .'"';

    $query = sql_query($query);
    if( false !== $query )
        return $query;
    else return false;
}
function article_update($id, $title, $article){
    sql_connect();
    $query = 'UPDATE News SET
              title = "'. $title .'", article = "'. $article .'"
              WHERE id_article = "'. $id .'"';

    $query = sql_update($query);
    if( false !== $query )
        return true;
    else return false;
}
function article_delete($id_article){
    sql_connect();
    $query = 'DELETE FROM News WHERE id_article = "'. $id_article .'"';

    $query = sql_delete($query);
    if( false !== $query )
        return true;
    else return false;

}