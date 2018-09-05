<?php
    if (isset($_GET['title']) && isset($_GET['date']) && isset($_GET['edit'])) {
        if ($_GET['title'] && $_GET['date']) {
            $event = [
                'title' => $_GET['title'],
                'date' => $_GET['date'],
            ];
    
            // $eventsTable->insert($event);
    
            // create a message telling the user what we are doing
            $message = 'This will attempt to edit event with id: ' . $_GET['event_radioBtns'];

            // call our method to display the message and clear the url of the parameters
            echo '
                <script type="text/javascript">
                    createMessage("' . $message . '")
                </script>
            ';
        };     
    };
?>