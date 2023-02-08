<?php
    //address of DBConnection file

    use database\DBConnection;
    use database\fetcher;

    require('../database/DBConnection.php');

    //address of fetcher file

    require '../database/fetcher.php';

    //creating object for DBConnection class
    $db = new DBConnection();


    //creating object of fetcher class
    $fetcher = new fetcher($db);

    if (isset($_POST['itemid']))
    {
        $result = $fetcher->getProduct($_POST['itemid']);
        echo json_encode($result);
    }