<?php
    if (isset($_GET['event_radioBtns'])) {
        $eventsTable->delete('event_id', $_GET['event_radioBtns']);

        // create a message telling the user what we are doing
        $message = 'This will attempt to delete event with id: ' . $_GET['event_radioBtns'];
        
        // call our method to display the message and clear the url of the parameter
        echo '
            <script type="text/javascript">
                createMessage("' . $message . '")
            </script>
        ';
    }
?>