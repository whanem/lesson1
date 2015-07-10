<?php
function sql_connect(){
    $login = 'root';
    $password = '';
    $server = 'localhost';
    $db_name = 'Site_News';

    mysql_connect($db_name, $login, $password);
    mysql_select_db($db_name);
}
function sql_insert($query){
    $sql = mysql_query($query);

    if($sql != mysql_error())
        return true;
}