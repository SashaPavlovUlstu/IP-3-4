<?php
    session_start();
    require_once('connect.php');
    $login = $_POST['login'];
    $id = $_POST['id'];
    $full_name =$_POST['full_name'];
    $path ='avatar' . time() .$_FILES['avatar']['name'];
    $res =mysqli_query($connect,"SELECT * FROM `users` WHERE `users`.`id` = '$id'");
    $user = mysqli_fetch_assoc($res);
    $old_avatar =$user['avatar'];
    $email =$_POST['email'];
    if(move_uploaded_file($_FILES['avatar']['tmp_name'],$path)){
        unlink($old_avatar);
        $up =mysqli_query($connect,"UPDATE `users` SET `full_name` = '$full_name', `login` = '$login', `email` = '$email', `avatar` = '$path' WHERE `users`.`id` = '$id'");
        $result = mysqli_query($connect,$up);
        }
        header('Location:/table_user.php');