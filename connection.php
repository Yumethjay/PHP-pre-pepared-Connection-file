<?php
    class Database{//for create object 

        public static $connection;
                  
        public static function setUpConnection(){  //setUpConnection is a function create by us
            if (!isset(Database::$connection)) {           //if connection not set, create new connection
                Database::$connection = new mysqli("host","username","password", "database name","port");
            }
        }

        public static function iud($q){                //uid = INSERT UPDATE DELETE
            Database::setUpConnection();                //start static function in database classin set up connection
            Database::$connection->query($q);
        }

        public static function search($q){
            Database::setUpConnection();
            $resultset = Database::$connection->query($q);
            return $resultset;  //return executed result to expecting place
        }
    }
?>
