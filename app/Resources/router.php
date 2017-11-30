<?php

$routes = array(
    "calculator" => array(
        "controller" => "CalculatorController",
        "action" => "index"
    ),
    "calculator/add" => array(
        "controller" => "CalculatorController",
        "action" => "add"
    ),
    "calculator/subtract" => array(
        "controller" => "CalculatorController",
        "action" => "subtract"
    ),
    "calculator/multiply" => array(
        "controller" => "CalculatorController",
        "action" => "multiply"
    ),
    "calculator/divide" => array(
        "controller" => "CalculatorController",
        "action" => "divide"
    ),
    "logout" => array(
        "controller" => "UserController",
        "action" => "logoutAction"
    ),
    "check" => array(
        "controller" => "UserController",
        "action" => "checkAction"
    ),
    "login" => array(
        "controller" => "PageController",
        "action" => "loginAction"
    ),
    "bitmovin" => array(
        "controller" => "PageController",
        "action" => "testAction"
    ),
    "employee" => array(
        "controller" => "EmployeeController",
        "action" => "indexAction"
    ),
    "employee/create" => array(
        "controller" => "EmployeeController",
        "action" => "createAction"
    ),
    "employee/read" => array(
        "controller" => "EmployeeController",
        "action" => "readAction"
    ),
    "employee/update" => array(
        "controller" => "EmployeeController",
        "action" => "updateAction"
    ),
    "employee/delete" => array(
        "controller" => "EmployeeController",
        "action" => "deleteAction"
    )
);