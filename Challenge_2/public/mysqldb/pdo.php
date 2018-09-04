<?php
    // require the database table for creating database table objects
    require './mysqldb/dbtable.php';

    // assume there is no error
    $db_error = null;

    // defining pdo and the schema
    try {
        $pdo = new PDO('mysql:dbname=website;host=localhost:3306', 'root', ''); // in a real system you'd want these to be a environment variables
        $schema = 'website.';
        
        // defining the needed object
        $eventsTable = new DatabaseTable($pdo, $schema . 'events');
    } catch (Exception $e) {
        // well... there's an error now
        $db_error = '
            <div class="content-block" id="results">
                <h2>
                    Error! :(
                </h2>
                <p>
                    Caught exception! ' . $e->getMessage() . '
                </p> 
            </div>
        '; // in a real system you'd probably not want to print out the technical error message like this
    };
?>