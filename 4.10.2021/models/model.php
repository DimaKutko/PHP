<?php

class Model
{
    protected $table = null;
    protected $fields = [];

    public function all()
    {
        $path = __DIR__ . "/../database/{$this->table}.txt";
        if (file_exists($path)) {
            $output = json_decode(file_get_contents($path), true);
            return $output ?? [];
        }

        return [];
    }

    public function save()
    {
        $path = __DIR__ . "/../database/{$this->table}.txt";
        $array = $this->all();
        $array[] = $this->fields;
        file_put_contents($path, json_encode($array));
    }

    public function __set($name, $value)
    {
        $this->fields[$name] = $value;
    }

    public function __get($name)
    {
        return $this->fields = [$name];
    }
}
