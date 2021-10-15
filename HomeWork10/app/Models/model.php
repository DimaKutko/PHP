<?php

namespace App\Models;

use App\Core\ModelDrivers\FileModelDriver;

class Model
{
    protected static $table = null;
    protected $fields = [];
    protected $fillable = null;


    protected static function getDriver()
    {
        static $storage = null;
        if (!is_null($storage)) {
            return $storage;
        }

        $storage = new FileModelDriver(static::$table);
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
            foreach ($rows as $row) {
                $output[] = new static($row);
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

    public function removeByKey($key)
    {
        static::getDriver()->delete($key);
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
