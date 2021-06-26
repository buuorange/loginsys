<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログイン画面</title>
    </head>
    <body>
        <p class="ti">ログイン</p>
        <form action="main.php"  method="post">
            <input type="text" class="nameText" name="userName">
            <input type="text" class="passText" name="userPass">
            <input type="button" onclick="location.href ='./index.php'" value="ホームへ戻る">
            <input type="submit"  value="ログイン" class="loginButton">
        </form>

        </form>
    </body>
</html>