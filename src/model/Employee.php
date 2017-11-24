<?php

namespace model\Employee;


class Employee
{
    private $connect;
    private $table;
    private $dbName;

    public function __construct($connect)
    {
        $this->connect = $connect;
        $this->table = "employee";
        $this->dbName = "human_resources";
    }

    public function create($arCreate) {
        $cols = $values = "";
        foreach ($arCreate as $key => $arItem) {
            $col = $arItem['col'];
            $value = $arItem['value'];
            $cols .= ($key !== count($arCreate) - 1) ? (($key == 0) ? "(`{$col}`, " : "`{$col}`, ") : "`{$col}`)";
            $values .= ($key !== count($arCreate) - 1) ? (($key == 0) ? "('{$value}', " : "'{$value}', ") : "'{$value}');";
        }
        $query = "INSERT INTO `{$this->table}` {$cols} VALUES {$values}";
        $executing = mysqli_query($this->connect, $query);
        return $executing;
    }

    public function read($arCriteria) {
        $conditions = "";
        foreach ($arCriteria as $key => $criterion) {
            $col = $criterion['col'];
            $value = $criterion['value'];
            $conditions .= ($key !== count($arCriteria) - 1) ? "`{$col}`='{$value}' AND " : "`{$col}`='{$value}';";
        }
        $query = "SELECT * FROM {$this->table} WHERE {$conditions}";
        $executing = mysqli_query($this->connect, $query);
        if ($executing) {
            $arResult = array();
            while ($result = mysqli_fetch_array($executing)) {
                $arResult[] = $result;
            }
        }
        return $arResult;
    }

    public function update($arUpdate) {
        $settings = $conditions = "";
        foreach ($arUpdate['settings'] as $key => $arItem) {
            $col = $arItem['col'];
            $value = $arItem['value'];
            $settings .= ($key !== count($arUpdate['settings']) - 1) ? "`{$col}`='{$value}', " : "`{$col}`='{$value}'";
        }
        foreach ($arUpdate['conditions'] as $key => $arItem) {
            $col = $arItem['col'];
            $value = $arItem['value'];
            $conditions .= ($key !== count($arUpdate['conditions']) - 1) ? "`{$col}`='{$value}' AND " : "`{$col}`='{$value}';";
        }
        $query = "UPDATE `{$this->table}` SET {$settings} WHERE {$conditions}";
        $executing = mysqli_query($this->connect, $query);
        return $executing;
    }

    public function delete($arDelete) {
        $conditions = "";
        foreach ($arDelete as $key => $criterion) {
            $col = $criterion['col'];
            $value = $criterion['value'];
            $conditions .= ($key !== count($arDelete) - 1) ? "`{$col}`='{$value}' AND " : "`{$col}`='{$value}';";
        }
        $query = "DELETE FROM `{$this->table}` WHERE {$conditions}";
        $executing = mysqli_query($this->connect, $query);
        return $executing;
    }
}