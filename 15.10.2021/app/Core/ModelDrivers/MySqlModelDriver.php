<?php

namespace App\Core\ModelDrivers;


class MySqlModelDriver implements Contract
{
    protected $tableName = null;

    private $db_host = '127.0.0.1';
    private $db_user = 'root';
    private $db_password = 'root';
    private $db_db = 'Store';
    private $db_port = 8889;

    public function __construct($tableName) //Not ready
    {
        $this->tableName = $tableName;
    }

    protected function getConnector()
    {
        return mysqli_connect($this->db_host . ':' . $this->db_port, $this->db_user, $this->db_password, $this->db_db);
    }

    protected function closeConnector($connector)
    {
        mysqli_close($connector);
    }

    public function getAll(): array //Not ready
    {

        $connector = $this->getConnector();
        $result = mysqli_query($connector, "SELECT * FROM {$this->tableName}");
        $this->closeConnector($connector);

        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // if (file_exists($this->getPath())) {
        //     return json_decode(file_get_contents($this->getPath()), true) ?? [];
        // }

        $updatedArray = [];

        foreach ($variable as $key => $value) {
            // $updatedArray[$key] => 
        }

        return  $array ?? [];
    }

    public function insert($data) //Not ready
    {
        $fields = [];

        foreach ($data->getFillable() as $f) {
            $fields[$f] = $data->getFields()[$f] ?? null;
        }

        $array = $this->getAll();
        $array[] = $fields;
        file_put_contents($this->getPath(), json_encode($array));
    }

    public function update($id, $data) //Not ready
    {
        $array = $this->getAll();

        $fields = [];

        foreach ($data->getFillable() as $f) {
            $fields[$f] = $data->getFields()[$f] ?? null;
        }

        $array[$id] = $fields;
        file_put_contents($this->getPath(), json_encode($array));
    }

    public function delete($id) //Not ready
    {
        $array = $this->getAll();

        unset($array[$id]);

        file_put_contents($this->getPath(), json_encode($array));
    }

    public function where($field, $cond, $value) //No TODO
    {
    }

    public function getTableName() //Not ready
    {
        return $this->tableName;
    }

    protected function getPath() //Not ready
    {
        return __DIR__ . "/../../../database/{$this->tableName}.txt";
    }
}
