<?php


class CalculatorController
{

    public function index()
    {
        include_once("app/front-end/headerCalc.php");
        require_once("app/front-end/templates/calcMenuTemplate.php");
        include_once("app/front-end/footerCalc.php");
    }

    public function add()
    {
        if (!empty($_POST['first_arg']) && !empty($_POST['second_arg'])) {
            $x = $_POST['first_arg'];
            $y = $_POST['second_arg'];
            return $x + $y;
        } else {
            include_once("app/front-end/headerCalc.php");
            include_once("app/front-end/footerCalc.php");
        }
    }

    public function subtract()
    {
        if (!empty($_POST['first_arg']) && !empty($_POST['second_arg'])) {
            $x = $_POST['first_arg'];
            $y = $_POST['second_arg'];
            return $x - $y;
        } else {
            include_once("app/front-end/headerCalc.php");
            include_once("app/front-end/footerCalc.php");
        }
    }

    public function multiply()
    {
        if (!empty($_POST['first_arg']) && !empty($_POST['second_arg'])) {
            $x = $_POST['first_arg'];
            $y = $_POST['second_arg'];
            return $x * $y;
        } else {
            include_once("app/front-end/headerCalc.php");
            include_once("app/front-end/footerCalc.php");
        }
    }

    public function divide()
    {
        if (!empty($_POST['first_arg']) && !empty($_POST['second_arg'])) {
            $x = $_POST['first_arg'];
            $y = $_POST['second_arg'];
            return $x / $y;
        } else {
            include_once("app/front-end/headerCalc.php");
            include_once("app/front-end/footerCalc.php");
        }
    }

}