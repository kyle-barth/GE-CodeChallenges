<?php
    foreach ($results as $row) {
        echo '
            <div class="content-block">
                <p>
                    event_id '. $row['event_id'] .' 
                    title '. $row['title'] .' 
                    date '. $row['date'] .'
                </p>
            </div>
        ';
    };
?>