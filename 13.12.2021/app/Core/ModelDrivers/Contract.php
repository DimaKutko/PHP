<?php

namespace App\Core\ModelDrivers;


interface Contract
{
    public function __constructor($tableName);

    public function getAll(): array;
    public function insert($data);
    public function update($id, $data);
    public function delete($id);
    public function where($field, $cond, $value);
    public function getTableName();
}
