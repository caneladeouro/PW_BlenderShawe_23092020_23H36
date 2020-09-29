<?php

namespace MAIN\MYSQL_CONECTION;

use Exception;
use mysqli;

class MysqlConection
{
    private $host = 'localhost';
    private $user = 'root';
    private $password  = '';
    private $database = 'bd_blender_share';
    protected $mysqli;

    public function mysqlConection()
    {
        try {
            $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);

            if ($this->mysqli->connect_error) {
                throw new Exception("Ouve um problema ao conectar com o banco de dados", 1);
            }

            return true;
        } catch (Exception $e) {
            if ($e->getCode() == 1) {
                return false;
            }
        }
    }

    public function findResult($argumentsFind, $table, $attribute)
    {
        foreach ($argumentsFind as $argument) {
            $result = $this->mysqli->real_escape_string();
            $select = "SELECT * FROM $table WHERE $attribute='$argumentsFind'";
        }

        $argumentCheck = $this->mysqli->affected_rows;
        if ($argumentCheck >= count($argument)) {
        }
    }
}
