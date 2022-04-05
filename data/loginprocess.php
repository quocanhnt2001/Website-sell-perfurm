<?php
    session_start();
    if (isset($_POST['login'])){
        $connect = mysqli_connect ('localhost', 'root', '', 'dadperfume') or die ('Unable To Connect');
        $username = addslashes($_POST['login-username']);
        $password = addslashes($_POST['login-password']);
        $result = mysqli_query($connect, "SELECT username, password FROM users WHERE username='$username' and password = '$password'") or die( mysqli_error($connect));
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['username'];
        $_SESSION["idname"] = $row['name'];
        } else {
           echo '<script language="javascript">alert("Username or Password Not Exist"); window.location="../common/login.php";</script>';
        }
    }
    if(isset($_SESSION["id"])) {
        header("Location:../index.php");
    }

?>