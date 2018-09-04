<?php
    if (isset($_GET['title']) && isset($_GET['date'])) {
        // $eventsTable->delete('event_id', $_GET['event_radioBtns']);

        // create a message telling the user what we are doing
        $message = 'This will attempt to create an event with title: ' . $_GET['title'] . ' and date: ' . $_GET['date'];
        
        // call our method to display the message and clear the url of the parameters
        echo '
            <script type="text/javascript">
                createMessage("' . $message . '")
            </script>
        ';
    };
?>