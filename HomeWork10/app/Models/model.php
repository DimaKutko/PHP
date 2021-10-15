<?php

namespace App\Models;

use App\Core\ModelDrivers\FileModelDriver;
use App\Core\ModelDrivers\MySqlModelDriver;

class Model
{
    protected static $table = null;
    protected $fillable = [];
    protected $fields = [];

    protected static function getDriver()
    {
        static $storage = null;
        if (!is_null($storage)) {
            return $storage;
        }

        $modelDriver = 'App\\Core\\ModelDrivers\\' . MODEL_DRIVER . "ModelDriver";
        $storage = new $modelDriver(static::$table);

        return $storage;
    }

    public function __construct($fields = [])
    {
        $this->fields = $fields;
    }

    public static function all()
    {
        $rows = static::getDriver()->getAll();

        $output = [];
        if ($rows) {
            foreach ($rows as $key => $value) {
                $output[$key] = new static($value);
            }
        }

        return $output;
    }

    public function save()
    {
        $fields = [];
        foreach ($this->fillable as $fillable) {
            $fields[$fillable] = $this->fields[$fillable] ?? null;
        }

        static::getDriver()->insert($fields);
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getFillable()
    {
        return $this->fillable;
    }

    public static function allAsArray()
    {
        $output = [];
        $all = static::all();
        if ($all) {
            foreach ($all as $obj) {
                $output[] = $obj->getFields();
            }
        }

        return $output;
    }

    public function delete($key)
    {
        static::getDriver()->delete($key);
    }

    public function update($key, $data)
    {
        static::getDriver()->update($key, $data->getFields());
    }

    public function __set($name, $value)
    {
        $this->fields[$name] = $value;
    }

    public function __get($name)
    {
        return $this->fields[$name] ?? null;
    }
}
