<?php

namespace MAIN\SEARCH;

use MAIN\MYSQL_CONECTION\MysqlConection as mysqlConection;

class Search
{
    public $searchName;
    public $searchResult;

    public function findResult($project)
    {
        $mysqli = new mysqlConection();

        $title = $mysqli->mysqli->real_escape_string($project);
        $selectProject = "SELECT nm_title FROM tb_project WHERE nm_title = '$title'";

        $findResult = $this->mysqli->query($selectProject);
        $checkResult = $this->mysqli->affected_rows;

        if ($checkResult > 0) {
            return $findResult;
        }
    }
}
