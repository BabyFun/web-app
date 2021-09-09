<?php

if (!function_exists('connexion')) {

    function connexion()
    {
        $host = 'localhost';             //myHostAddress
        $dbuser = 'root';     //myUserName
        $dbpw = '';     //myPassword
        $dbname = 'babyfunbdd';     //myDatabase

        $pdoReqArg1 = "mysql:host=". $host .";dbname=". $dbname .";";
        $pdoReqArg2 = $dbuser;
        $pdoReqArg3 = $dbpw;

        try {

            $db = new \PDO($pdoReqArg1, $pdoReqArg2, $pdoReqArg3);
            $db->setAttribute(\PDO::ATTR_CASE, \PDO::CASE_LOWER);
            $db->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
            $db->exec("SET NAMES 'utf8'");

            return $db;

        } catch(\PDOException $e) {

            $errorMessage = $e->getMessage();
            echo $errorMessage;
        }
    }
}



if (!function_exists('getGages')) {

    function getGages()
    {
        $db = connexion();
        $query = "SELECT * FROM gages";
        $stt = $db->prepare($query);
        $stt->execute();
        $gages = $stt->fetchAll(\PDO::FETCH_ASSOC);
        $cnt = 0;
        /*  foreach ($gages as $gage) {
             $query = "SELECT gages_id FROM partner_volunteer WHERE partner_id = :id";
             $stt = $db->prepare($query);
             $stt->bindValue(':id', $partner["id"], PDO::PARAM_STR);
             $stt->execute();
             $gages[$cnt]['count'] = $stt->rowCount();
             $cnt++;
         } */
        return $gages;
    }
}

/* $listGages = []

if (!function_exists('ListGages')) {
    function ListGages()
    {
        foreach ($gages as $gages) {
            return $gages
        }

    }
} */

