<?php
require_once(__DIR__ . '/../services/UserService.php');
require_once(__DIR__ . '/../model/User.php');


session_start();



$Userservice = new Userservice();

// ----------------------add author-------------------------

if (isset($_POST["register"])) {
    $fullname = $_POST["Fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $id = '';
    $emails =  $Userservice->cheking($email);
    if ($fullname !== '' && $email !== '' && $password !== '' && $cpassword !== '' && preg_match('/^[A-Za-z\s-]+$/', $fullname) && preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $email) && preg_match('/^.{1,8}$/', $password)) {
        if ($password === $cpassword) {
            if ($emails) {
                $_SESSION['error'] = 'E-mail already exists';
                header('Location: ../views/public/register.php');
            } else {
                $hashing = password_hash($password, PASSWORD_DEFAULT);
                $role = 'author';
                $user = new User($id, $fullname, $email,  $hashing, $role);
                $Userservice->insert($user);

                header('Location: ../views/public/login.php');
            }
        } else {

            $_SESSION['error'] = 'Passwords not Matched';
            header('Location: ../views/public/register.php');
        }
    } else {
        $_SESSION['error'] = 'Empty Input or invalid Information';
        header('Location: ../views/public/register.php');
    }
}

// --------------------------------login------------------------------

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $logPwd = $_POST['password'];
    $loged =  $Userservice->login($email);
    $password = $loged['user_pwd'];
    $role = $loged["user_role"];
    $_SESSION['user'] = $loged['user_id'];
    $_SESSION['username'] = $loged['user_fullname'];
    if (preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $email) && $email !== '' && $logPwd !== '') {



        if (password_verify($logPwd, $password) && $role === 'author') {

            header('Location: ../views/author/');
        } else if (password_verify($logPwd, $password) && $role === 'admin') {
            header('Location: ../views/');
        } else {
            $_SESSION['erreur'] = 'inccorect E-mail Or Password';
            header('Location: ../views/public/login.php');
        }
    } else {
        $_SESSION['error'] = 'Empty Input or invalid Information';
        header('Location: ../views/public/login.php');
    }
}

// --------------------------fetch Authors-------------------------------

$users =  $Userservice->display();