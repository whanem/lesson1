<?php
function sql_connect(){
    $login = 'root';
    $password = '';
    $server = 'localhost';
    $db_name = 'Site_News';

    mysql_connect($server, $login, $password);
    mysql_select_db($db_name);
}
function sql_insert($query){
    mysql_query($query);
    $sql_error = mysql_error();

    if( strlen($sql_error) == 0  )
        return true;
    else return false;
}