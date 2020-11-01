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
<?php
    if(empty($_SESSION['user'])){
        header('Location:login.php');
    }
    else
        echo "<h1>Wellcome ".$_SESSION['user']."</h1>"
    
?>
    <a href="logout.php">Dang xuat</a>
</body>
</html>