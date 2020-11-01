<?php
    include 'connect.php';
    class Account{        
        public function checkUser($user){
            global $conn;
            $sql="select user from register where user='$user'";
            $run=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($run);
            return $num;
        }
        public function checkPass($pass1, $pass2){
            if($pass1==$pass2)
                return 1;
            else 
                return 0;
        }
        public function addUser($user,$pass){
            global $conn;
            $sql="insert into register values ('$user',$pass)";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function checkPass1($user){
            global $conn;
            $sql="select pass from register where user='$user'";
            $run=mysqli_query($conn,$sql);
            $ar=mysqli_fetch_assoc($run);
            return $ar;
        }
        public function checkPass2($pass){
            global $conn;
            $sql="select pass from register where pass='$pass'";
            $run=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($run); 
            return $num;
        }

    }
?>