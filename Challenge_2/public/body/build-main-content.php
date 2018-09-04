<?php
    // if there was an error, print it on the page
    echo $db_error;

    // only attempt to display data if we are connected to the db
    if (!$db_error) {
        $results=$eventsTable->search('', '');
        
        // only add the buttons and the resutls to the page if there is any results
        if ($results) {
            // require the create, edit & delete buttons
            require 'buttons.php';

            // this is the form that will allow the user to create or edit an event
            require 'event_form.php';

            // list the events
            require 'list-events.php';
        };
    };
?>