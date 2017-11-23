<?php

use model\Database\Database;
use model\Employee\Employee;
require_once ("src/model/Database.php");


class EmployeeController
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function indexAction() {
       require_once ("app/front-end/templates/createTemplate.php");
    }

    public function createAction() {
        $connect = $this->database->connectDB();
        $employee = new Employee($connect);
        $employee->create($_POST['create']);
        unset($employee);
        $this->database->closeDB($connect);
    }

    public function readAction() {
        $connect = $this->database->connectDB();
        $employee = new Employee($connect);
        $employee->read($_POST['read']);
        unset($employee);
        $this->database->closeDB($connect);
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