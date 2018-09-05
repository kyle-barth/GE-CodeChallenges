<?php    
    ini_set('display_errors', 1);
    
    // require the header and set the title 
    //  -- useful for if the website expanded to have multiple pages in the future!
    $title = 'Challenge 2';
    require 'header.php';

    // require the database
    require './mysqldb/pdo.php';

    // require the body
    require './body/body.php';
?>