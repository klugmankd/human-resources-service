<?php

$routes = array(
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