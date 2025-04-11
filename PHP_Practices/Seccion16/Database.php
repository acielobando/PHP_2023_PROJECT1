<?php

class Database{


    // define a variable
    public $dbConnection;

    public $records;

    function openConnection() : bool{}

    function fetchRecord($id) : array{}

    function insertRecords($data) : bool{}

    function updateRecords($id) : bool{}

    function deleteRecords($id) : bool{}

}