<?php

namespace App\Core\ModelDrivers;


class FileModelDriver implements Contract
{
    protected $tableName = null;

    public function __constructor($tableName)
    {
        $this->tableName = $tableName;
    }
    public function getAll(): array
    {
        $table = static::$table;

        $output = [];
        $path = __DIR__ . "/../../database/{$table}.txt";
        if (file_exists($path)) {
            $rows = json_decode(file_get_contents($path), true);

            if ($rows) {
                foreach ($rows as $row) {
                    $output[] = new static($row);
                }
            }
        }

        return $output;
    }
    public function insert($data)
    {
    }
    public function update($id, $data)
    {
    }
    public function delete($id)
    {
    }
    public function where($field, $cond, $value)
    {
    }
    public function getTableName()
    {
        return $this->tableName;
    }
}
