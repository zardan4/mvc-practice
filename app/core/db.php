<?php

class Db
{
    private static $db;

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getConnection(): \mysqli
    {
        if (!isset(self::$db)) {
            self::$db;

            // i know that we should move this shit to .env 
            // man im testing mvc what do you want from me?
            $servername = "127.0.0.1:3306";
            $username = "root";
            $password = "";
            $database = "portfolio";

            // Create connection
            $conn = new \mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            self::$db = $conn;
        }

        return self::$db;
    }
}
