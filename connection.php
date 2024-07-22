<?php
    class Database{//for create object 

        public static $connection;
                  
        public static function setUpConnection(){  //setUpConnection is a function create by us
            if (!isset(Database::$connection)) {           //connection ekk set wela na nn aluth conection ekak set karanwa
                Database::$connection = new mysqli("localhost","root","1234", "eshop","3306");
            }
        }

        public static function iud($q){                //uid = INSERT UPDATE DELETE
            Database::setUpConnection();                //database class eke thiyana set up connection eke thiyana static function eka start karanwa
            Database::$connection->query($q);
        }

        public static function search($q){
            Database::setUpConnection();
            $resultset = Database::$connection->query($q);
            return $resultset;  //execute wena result set eka, result eka balaporoththuwena thanata return wenawa
        }
    }
?>