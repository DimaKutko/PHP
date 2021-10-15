<?php

namespace App\Core\ModelDrivers;


interface Contract
{
    public function __construct($tableName);

    public function getAll(): array;
    public function insert($data);
    public function update($id, $data);
    public function delete($id);
    public function getTableName();
}
