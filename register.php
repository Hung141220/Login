<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="width: 400px; margin: 100px auto;">
    <form action="" method="post">
        Username: <input type="email" name="user"><br>
        Password: <input type="password" name="pass"><br>
        Password enter: <input type="password" name="pass1"><br>
        <input type="checkbox" value="1" name="check">Chap nhan thoa thuan <br>
        <input type="submit" name="ok" value="Register">
    </form>
    <?php
        include 'config.php';$ob=new Account();
        if(isset($_POST['ok'])){
            $user=$_POST['user'];
            $pass1=$_POST['pass'];
            $pass2=$_POST['pass1'];
            if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['pass1'])){
                if(isset($_POST['check']) && $_POST['check']==1){
                    if(($ob->checkPass($pass1,$pass2)) == 1){
                        $checkUser=$ob->checkUser($user);
                        if($checkUser == 0){
                            if($ob->addUser($user,$pass1)){
                                echo "<script>alert('Tao thanh cong')</script>";
                                header('location: index.html');
                            }
                            else 
                                echo "<script>alert('Tao that bai')</script>";
                        }
                        else
                            echo "<script>alert('Trung email')</script>";
                    }
                    else 
                        echo "<script>alert('Mat khau khong trung khop')</script>";
                }
                else
                    echo "<script>alert('chap nhan thoa thuan')</script>";
            }
            else
                echo "<script>alert('Nhap day du thong tin!')</script>";
        }
    ?>
</body>
</html>