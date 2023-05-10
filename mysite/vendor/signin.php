<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $admin_login='admin1';
    $admin_password='mama';
    $password = md5($_POST['password']);
    $check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
    if(mysqli_num_rows($check_user)> 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] =[
            "id"=>$user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];
        $_SESSION['admin'] = false;
        header('Location: ../account.php');
    }
    else{
        $_SESSION['message'] = 'Ошибка авторизации';
            header('Location:../sign up.php');
    }
    if($login == $admin_login || $password == $admin_password) {
        $_SESSION['admin'] = true;
        header('Location: ../table.php');
        }