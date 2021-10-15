<?php

namespace App\Core\ModelDrivers;

use App\Models\Model;


interface Contract
{
    public function __construct($tableName);

    public function getAll(): array;
    public function insert(Model $data);
    public function update($id, Model $data);
    public function delete($id);
    public function where($field, $cond, $value);
    public function getTableName();
}
