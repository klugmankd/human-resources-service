<?php

use model\Database\Database;
use model\Employee\Employee;
require_once ("src/model/Database.php");
require_once ("src/model/Employee.php");


class EmployeeController
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function indexAction() {
        $actions = array("create", "read", "update", "delete");
        $action = (in_array($_GET['action'], $actions) && !empty($_GET['action'])) ? $_GET['action'] . "Template.php" : "createTemplate.php";
        include_once ("app/front-end/header.php");
        require_once ("app/front-end/templates/{$action}");
        include_once ("app/front-end/footer.php");
    }

    public function createAction() {
        $connect = $this->database->connectDB();
        $employee = new Employee($connect);
        $answer['message'] = ($employee->create($_POST['create'])) ? "Додано" : "Не додано";
        unset($employee);
        $this->database->closeDB($connect);
        echo json_encode($answer);
    }

    public function readAction() {
        $connect = $this->database->connectDB();
        $employee = new Employee($connect);
        $results = $employee->read($_POST['read']);
        unset($employee);
        $this->database->closeDB($connect);
        require ('app/front-end/templates/readResultTemplate.php');
    }

    public function updateAction() {
        $connect = $this->database->connectDB();
        $employee = new Employee($connect);
        $employee->update($_POST['update']);
        unset($employee);
        $this->database->closeDB($connect);
    }

    public function deleteAction() {
        $connect = $this->database->connectDB();
        $employee = new Employee($connect);
        $employee->delete($_POST['delete']);
        unset($employee);
        $this->database->closeDB($connect);
    }
}