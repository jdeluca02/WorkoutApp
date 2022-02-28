<?php

    //establish connection info
    $dbserver = "sql313.epizy.com";
    $dbuser = "	epiz_31151061";
    $dbpw = "f3cr0obkFZL";
    $dbname = "epiz_31151061_AppAccounts";

    if(!$con = mysqli_connect($dbserver,$dbuser,$dbpw,$dbname))
    {
        die('failed to connect1!')
    }
?>
