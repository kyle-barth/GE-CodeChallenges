<?php
    // create the format for the events table 
    echo '
        <div class="content-block">
            <h2>Events</h2>
            <table>
                <tr>
                    <th>Event id</th> 
                    <th>Title</th> 
                    <th>Date</th>
                    <th>Select</th>
                </tr>
    ';

    // loop through our results and fill the table
    foreach ($results as $row) {
        echo '
            <tr>
                <td>' . 
                    $row['event_id'] .
                '</td>
                <td>' . 
                    $row['title'] .
                '</td>
                <td>' . 
                    $row['date'] .
                '</td>
                <td> 
                    <input type="checkbox" name="event_checkboxes" value="' . 
                        $row['event_id'] .
                    '">
                </td>
            </tr>
        ';
    };

    echo '
            </table>
        </div>
    ';
?>