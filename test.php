<?php
use model\Database\Database;
use model\Employee\Employee;

require_once("src/model/Employee.php");
require_once("src/model/Database.php");


$database = new Database();
$connect = $database->connectDB();
if ($connect) {
    echo "ok";
}

$employee = new Employee($connect);

//read

$arRead[] = array(
    "col" => "first_name",
    "value" => "Tony"
);

    $arRead[] = array(
        "col" => "last_name",
        "value" => "Stark"
    );

//create

$arCreate[] = array(
    "col" => "first_name",
    "value" => "Kosya"
);
$arCreate[] = array(
    "col" => "last_name",
    "value" => "Klugman"
);
$arCreate[] = array(
    "col" => "birthday",
    "value" => "1996-08-14"
);
$arCreate[] = array(
    "col" => "employment_date",
    "value" => "2017-05-03"
);

//update

$arUpdate = array(
    "settings" => array(
        array(
            "col" => "first_name",
            "value" => "Vasya"
        ),
        array(
            "col" => "last_name",
            "value" => "Shevchenko"
        ),
        array(
            "col" => "employment_date",
            "value" => "2017-09-12"
        )
    ),
    "conditions" => array(
        array(
            "col" => "id",
            "value" => "2"
        ),
        array(
            "col" => "first_name",
            "value" => "Kostya"
        )

    )
);

//delete
$arDelete = array(
    array(
        "col" => "employment_date",
        "value" => "2017-05-03"
    )
);

//$employee->delete($arDelete);

//$employee->create($arCreate);
//$employee->update($arUpdate);
?>
<pre><?  print_r($employee->read($arRead)) ?></pre>