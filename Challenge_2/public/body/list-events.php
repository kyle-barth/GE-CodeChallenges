<?php
    // create the format for the events table 
    echo '
        <div class="content-block">
            <h2>Events</h2>
            <table>
                <tr>
                    <th>ID</th> 
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
                    <input type="radio" name="event_radioBtns" value="' . 
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