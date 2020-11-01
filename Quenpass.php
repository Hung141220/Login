<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhap username: <input type="text" name="user"><br>
        <input type="submit" name="ok" value="Tim MK"><br>
        <a href="login.php">Quay lai</a>
    </form>
    <?php
        include 'config.php';
        $ob=new Account();
        if(isset($_POST['ok'])){
            $user=$_POST['user'];
            echo implode(($ob->checkPass1($user)));
        }
    ?>
    
</body>
</html>