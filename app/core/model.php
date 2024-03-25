<?php

require_once __DIR__ . '/db.php';

class Model
{
    public $db;
    
    public function __construct()
    {
        $db = Db::getConnection();

        $this->db = $db;
    }

    public function get_data()
    {
    }
}