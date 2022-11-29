<?php
    
    if(!isset($_SESSION)) {
    session_start();
    }
    
    if(isset($_SESSION['email'])) {
        header("Location: ../index.php");
        exit;
    }


    require 'conn.php' ;
    // require 'connector.php'; 
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $check = $_POST['check'];
        
        $dt_username = "SELECT * FROM user_ramadani WHERE email = '$email'";

        $exeQuery = mysqli_query($connectLogin, $dt_username);
        $count = mysqli_num_rows($exeQuery);
        echo $count;

        if (mysqli_num_rows($exeQuery) == 1 ) {
            $result = mysqli_fetch_assoc($exeQuery);

                $_SESSION['email'] = $result['email'];
                header('Location:../index.php');
                exit();
            } else {
                $_SESSION['message error'] = 'Password anda salah';
                header('location:../pages/Login-RAMADANI.php');
                exit();
            }
        }
        $_SESSION['message error'] = 'Gagal login';
        header('location:../pages/Login-RAMADANI.php');

        // if($query_value) {
        //     echo "<script>alert('Data telah ditambahkan')</script>";
        //     echo "<meta http-equiv='refresh' content='1 url=../Pages/ListCar-RAMADANI.php'>";
        // } else {
        //     echo "<script>alert('Gagal ditambahkan')</script>";
        //     echo "<meta http-equiv='refresh' content='1 url=../Pages/Home-RAMADANI.php'>";
        // }

?>