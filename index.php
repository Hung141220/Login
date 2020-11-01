<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="login" value="Dang nhap">
        <input type="submit" name="register" value="Dang ki">
    </form>
    <?php
        if(isset($_POST['login'])){
            header('location: login.php');
        }
        if(isset($_POST['register'])){
            header('location: register.php');
        }
    ?>
</body>
</html>