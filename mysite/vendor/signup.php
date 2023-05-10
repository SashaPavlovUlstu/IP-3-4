<?php
    session_start();
    require_once 'connect.php';
    $full_name = filter_var(trim($_POST['full_name']),FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    $password_confirm = filter_var(trim($_POST['password_confrim']),FILTER_SANITIZE_STRING);
    if($password !== $password_confirm)
        {$_SESSION['message'] = 'Пароли не совпадают';
            header('Location:../register.php');
            //exit;
        }
    if(mb_strlen($login)<2 || mb_strlen($login)>50){
        $_SESSION['message'] = 'Недопустимое значение логина';
        header('Location:../register.php');
        exit;
    }
    if(mb_strlen($password)<2 || mb_strlen($password)>50){
        $_SESSION['message'] = 'Недопустимое значение пароля';
        header('Location:../register.php');
        exit;
    }
    if(filter_var($email,FILTER_VALIDATE_EMAIL)== false){
        $_SESSION['message'] = 'Недопустимое значение почты';
        header('Location:../register.php');
        exit;
    }
    $path = 'uploads/' . time() .$_FILES['avatar']['name'];
    if(!move_uploaded_file($_FILES['avatar']['tmp_name'],'../' . $path)){
        $_SESSION['message'] = 'Ошибка при загрузке картинки';
        header('Location:../register.php');
        exit;
    }
    $password = md5($password);
    mysqli_query($connect,"INSERT INTO `users`
     (`id`, `full_name`, `login`, `email`, `password`, `avatar`) 
    VALUES (NULL, '$full_name', '$login', '$email','$password','$path')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location:../sign up.php');
 ?>


       
