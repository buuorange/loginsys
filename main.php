<?php require "dbConnect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userMode</title>
</head>
<body>
    <?PHP
    $username = $_POST['userName'];
    $passwd = $_POST['userPass'];
    $db = dbConnect($username, $passwd);
    if (!$db) {
        die('データベースの接続に失敗しました');
    }
    echo "データベースの接続に成功しました\n";
    ?>
</body>
</html>



