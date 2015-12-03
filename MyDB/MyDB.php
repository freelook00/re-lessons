<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 03.12.15
 * Time: 19:46
 */
class MyDB
{
    private $instance;
    private $result;

    private $query;

    public function __construct($server, $username, $password, $database, $port = 3306, $charset='utf8')
    {
        $this->instance = new mysqli($server, $username, $password, $database, $port);

        if(  $this->instance->connect_errno )
        {
            echo "Не удалось подключиться к MySQL: (" . $this->instance->connect_errno . ") " . $this->instance->connect_error;
        }

        $this->instance->set_charset($charset);
    }

    public function getTable($table, $columns = array('*'))
    {
        if( $columns[0] == '*' AND  sizeof($columns) == 1 )
        {
            $this->query = 'SELECT * FROM ' .$table;
        }
        else
        {
            $fields = '';

            foreach($columns as $column)
            {
                $fields .= '`'.$column.'`,';
            }

            $this->query = 'SELECT '. substr($fields,0,strlen($fields)-1) .' FROM ' .$table;
        }

        $this->result = $this->instance->query( $this->query );

        if( $this->result )
        {
            return $this->resultToArray();
        }

        return false;

    }

    /**
     * @return array
     */
    private function resultToArray()
    {
        $rows = [];

        while($row = $this->result->fetch_array(MYSQLI_ASSOC))
        {
            $rows[] = $row;
        }

        $this->result->free();

        return $rows;
    }
}