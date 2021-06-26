<?php

function dbConnect($userName, $passwd)
{
    $host = 'localhost';
    $dbnane = 'test';
    $db = mysqli_connect($host, $userName, $passwd, $dbnane);
    // if (!$db) {
    //     die('データベースの接続に失敗しました');
    // }
    // echo "データベースの接続に成功しました\n";
    return $db;
}
