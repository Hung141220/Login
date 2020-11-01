<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="user" id=""><br>
        Password: <input type="password" name="pass"><br>
        <input type="submit" value="Login" name="ok"><br>
        <a href="Quenpass.php">Quen mat khau</a>
    </form>
    <?php
        include 'config.php';
        $ob=new Account();
        if(isset($_POST['ok'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            if(!empty($user) && !empty($pass)){
                $checkuser=$ob->checkUser($user);
                if($checkuser !=0){
                    $checkpass2=$ob->checkPass2($pass);
                    if($checkpass2 != 0){
                        echo "<script>alert('Dang nhap thanh cong')</script>";
                        $_SESSION['user']=$user;
                        $_SESSION['pass']=$pass;
                        header('Location: success.php');
                    }
                    else
                        echo "<script>alert('Sai mat khau')</script>";
                }
                else
                    echo "<script>alert('Sai tai khoan')</script>";
            }
            else
                echo "<script>alert('Nhap thong tin')</script>";
        }
    ?>
    
</body>
</html>