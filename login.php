<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="login-post.php" method="post">
        <input type="text" placeholder="pseudo">
        <input type="password" placeholder="password">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET["message"])){
        echo $_GET["message"];
    }
    ?>
</body>
</html>