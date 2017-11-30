<?php


class UserController
{

    public function checkAction()
    {
        $arUser = array(
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        );
        $dbUser = array(
            "id" => "1",
            "username" => "admin",
            "password" => "1234"
        );
        $verified = $arUser['username'] == $dbUser['username'] && $arUser['password'] == $dbUser['password'];
        if ($verified) {
            session_start();
            $_SESSION['id'] = $dbUser['id'];
            header('Location: employee');
        }
    }

    public function logoutAction()
    {
        session_start();
        unset($_SESSION['id']);
        session_destroy();
        header('Location: login');
    }
}