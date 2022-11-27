<?php
 
    include('conn.php');
    if(isset($_POST['submit'])) {
        $idUser = rand(1000,2000);
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $noHp = $_POST['noHp'];
        $sandi = $_POST['sandi'];
        $confirm = $_POST['csandi'];

        if($sandi == $confirm) {
        
        $sql = "INSERT INTO user_ramadani(id, email, nama, no_hp, password) 
        VALUES('$idUser', '$email', '$nama', '$noHp', '$sandi')";
        $sql_check = "SELECT email FROM user_ramadani where email= '$email'";
        $cek = $connectLogin->query($sql_check);

        if (mysqli_query($connectLogin, $sql)) {
            session_start();
            $_SESSION['register'] = 'Berhasil';
            header("location:../pages/Login-RAMADANI.php");
        }

        else {
            header("location:../pages/Register-RAMADANI.php");
        }

        if ($cek -> num_rows > 0) {
            session_start();

            while ($row = $cek -> fetch_assoc()) {
                $email = $_POST['email'];
                $email_cek = $_POST['email'];
                $nama = $row['nama'];
                $uid = $row['id'];
            }

            if ($email == $email_cek) {
                $_SESSION['register'] = 'gagal';
                header("location:../pages/Register-RAMADANI.php");
            }
        }
        }
    }
?>