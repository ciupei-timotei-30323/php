<?php

/**
 * @return mysqli|bool
 */
function getDB() : mysqli|bool
{
    return mysqli_connect("mysql-38065637-timociupei-7099.c.aivencloud.com", "avnadmin", "AVNS_trJDZyuHOMIki9yMTNa", "defaultdb", 10056);
}



