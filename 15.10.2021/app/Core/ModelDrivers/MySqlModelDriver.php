<?php

namespace App\Core\ModelDrivers;


class MySqlModelDriver implements Contract
{
    protected $tableName = null;
    protected $connect = null;

    public function __construct($tableName) //Not ready
    {
        $this->tableName = $tableName;

        $this->connect = mysqli_connect(
            DB_HOST . ':' . DB_PORT,
            DB_USRE,
            DB_PASSWORD,
            DB_DB
        );
    }

    function __destruct()
    {
        mysqli_close($this->connect);
    }

    public function getAll(): array //Done
    {
        $result = mysqli_query(
            $this->connect,
            "SELECT * FROM {$this->tableName}"
        );

        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $updatedArray = [];

        for ($i = 0; $i < count($array); $i++) {
            $id = $array[$i]['id'];
            unset($array[$i]['id']);

            $updatedArray[$id] = $array[$i];
        }


        return  $updatedArray;
    }

    public function insert($data) //DONE
    {
        $keys = '';
        $values = '';
        foreach ($data as $key => $value) {
            $keys .= "`{$key}`,";
            $values .= "'{$value}',";
        }

        $sqlStr = "INSERT INTO `{$this->tableName}` (" .
            substr($keys, 0, -1) .
            ') VALUES (' .
            substr($values, 0, -1) .
            ') ';

        $this->query($sqlStr);
    }

    public function update($id, $data) //Done
    {
        $sets = '';
        foreach ($data as $key => $value) {
            $sets .= "`{$key}`='{$value}', ";
        }

        $sqlStr =
            "UPDATE `{$this->tableName}` SET " .
            substr($sets, 0, -2) .
            " WHERE id = {$id};";

        $this->query($sqlStr);
    }

    public function delete($id) //Done
    {
        $sqlStr =
            "DELETE FROM `{$this->tableName}` " .
            "WHERE id = {$id};";

        $this->query($sqlStr);
    }

    private function query($sqlStr)
    {
        if ($this->connect->query($sqlStr) === FALSE) {
            echo "Error: " . $sqlStr . "<br>" . $this->connect->error;
        }
    }

    public function getTableName()
    {
        return $this->tableName;
    }
}
