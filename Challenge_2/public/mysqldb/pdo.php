<?php
    // defining pdo and the schema
    try {
        $pdo = new PDO('mysql:dbname=ge;host=127.0.0.1:3306', 'root', ''); // in a real system you'd want these to be a environment variables
        $schema = 'website.';
        
        // defining the needed object
        $eventsTable = new DatabaseTable($pdo, $schema . 'events');
    } catch (Exception $e) {
        $error = '
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