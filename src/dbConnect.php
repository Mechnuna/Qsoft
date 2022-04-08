<?php

function connect()
{
    static $connect = null;
    if (null === $connect) {
        $host = "newgrade.vpool";
        $user = "test";
        $password = "test";
        $dbname = "mariyak_qschool_test";
        $connect = mysqli_connect($host, $user, $password, $dbname) or die('Connect Error');
    }
    return $connect;
}
