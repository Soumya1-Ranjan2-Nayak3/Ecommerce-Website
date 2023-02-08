<?php

namespace database;

class fetcher
{
    public $db = null;
    public function __construct(DBConnection $db)
    {
        if(!isset($db->con))return null;
        $this->db=$db;
    }

    // fetch data from database
    public function getData($table)
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();

        while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // fetch data using itemid from allproduct table
    public function getProduct($item_id = null, $table = 'allproduct')
    {
        if(isset($item_id))
        {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id ={$item_id}");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                $resultArray[] = $item;
            }

            return $resultArray;

        }
    }
}