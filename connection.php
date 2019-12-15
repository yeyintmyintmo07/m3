<?php

    //Local Dev
    $host_name = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_dbname = "m3";

    //000WebHost SQL Account Login Details
    /*
    $host_name = "localhost";
    $mysql_username = "id11951589_root";
    $mysql_password = "password";
    $mysql_dbname = "id11951589_m3";
    */

    $con = mysqli_connect($host_name, $mysql_username, $mysql_password, $mysql_dbname);
