<?php
    if (isset($_GET['display']) && isset($_GET['edit']) && isset($_GET['event_radioBtns'])) {
        if ($_GET['event_radioBtns']) {
            // get the title and date from the id
            $event = $eventsTable->search('WHERE event_id=' . $_GET['event_radioBtns']);

            // prefill the inputs
            foreach ($event as $row) {
                echo '
                    <script type=\'text/javascript\'>
                        window.onload = function() {
                            // set the title to Edit Event when edit is selected
                            document.getElementById(\'form_title\').innerHTML = \'Edit Event\'
                            document.getElementById(\'event_form_title\').value = \''. $row['title'] . '\';
                            document.getElementById(\'event_form_date\').value = \''. $row['date'] . '\';
                        };
                    </script>
                ';
            };
        };     
    };
?> 