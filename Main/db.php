<?php

namespace Main;

use mysqli;

class db
{


//    private mysqli $db;

//    public function __construct()
//    {
//
//        $this->db = mysqli_connect("mysql-38065637-timociupei-7099.c.aivencloud.com", "avnadmin", "AVNS_trJDZyuHOMIki9yMTNa", "defaultdb", 10056);
//    }

    public static function getDb(): mysqli
    {
        return mysqli_connect("mysql-38065637-timociupei-7099.c.aivencloud.com", "avnadmin", "AVNS_trJDZyuHOMIki9yMTNa", "defaultdb", 10056);
    }




//    public function getDB() : mysqli|bool
//    {
//        return mysqli_connect("mysql-38065637-timociupei-7099.c.aivencloud.com", "avnadmin", "AVNS_trJDZyuHOMIki9yMTNa", "defaultdb", 10056);
//    }

}