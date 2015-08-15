<?php
    require 'config.php';
    if(!@mysql_connect(DB_HOST ,DB_USER, DB_PASSWORD) ||
        !@mysql_select_db(DB_NAME))
    {
        die('Failed to connect to database');
    }
?>