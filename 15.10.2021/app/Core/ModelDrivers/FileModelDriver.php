<?php

namespace App\Core\ModelDrivers;


class FileModelDriver implements Contract
{
    protected $tableName = null;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
    }
    public function getAll(): array
    {
        if (file_exists($this->getPath())) {
            return json_decode(file_get_contents($this->getPath()), true) ?? [];
        }

        return [];
    }
    public function insert($data)
    {
        $fields = [];

        foreach ($data->getFillable() as $f) {
            $fields[$f] = $data->getFields()[$f] ?? null;
        }

        $array = $this->getAll();
        $array[] = $fields;
        file_put_contents($this->getPath(), json_encode($array));
    }
    public function update($id, $data)
    {
        $array = $this->getAll();

        $fields = [];

        foreach ($data->getFillable() as $f) {
            $fields[$f] = $data->getFields()[$f] ?? null;
        }

        $array[$id] = $fields;
        file_put_contents($this->getPath(), json_encode($array));
    }
    public function delete($id)
    {
        $array = $this->getAll();

        unset($array[$id]);

        file_put_contents($this->getPath(), json_encode($array));
    }
    public function where($field, $cond, $value)
    {
    }
    public function getTableName()
    {
        return $this->tableName;
    }

    protected function getPath()
    {
        return __DIR__ . "/../../../database/{$this->tableName}.txt";
    }
}
