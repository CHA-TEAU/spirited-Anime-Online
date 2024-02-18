<?php

class DB{

    static public function dbconn(){

            $db = @new mysqli('localhost', 'root', '', 'spirited');


            if ($db->connection_errno) {
                echo "error: " . $db->connection_errno;

            } 
            else 
            {
                return $db;
            }
        



    }

}