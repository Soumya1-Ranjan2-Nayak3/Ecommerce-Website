<?php

    //address of DBConnection file
    use database\DBConnection;
    require('database/DBConnection.php');

    //address of fetcher file
    use database\fetcher;
    require 'database/fetcher.php';

    //address of cart file
    use database\Cart;
    require 'database/Cart.php';

    //creating object for DBConnection class
    $db = new DBConnection();

    //creating object of fetcher class
    $fetcher = new fetcher($db);

    //creating object for cart class
    $Cart = new Cart($db);
