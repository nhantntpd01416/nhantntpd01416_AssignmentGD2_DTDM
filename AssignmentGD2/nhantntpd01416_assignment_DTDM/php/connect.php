<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_namedata = 'dattlqpd01388_assignment_inf205';

    $connect = mysql_connect($db_host, $db_user, $db_pass) or die ("Cannot connect to database");
    $db = mysql_select_db($db_namedata, $connect) or die ("Not Found");
    mysql_query("SET NAMES 'utf-8'");
?>