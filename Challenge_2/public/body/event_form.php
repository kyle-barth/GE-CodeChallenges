<?php 
    $style = isset($_GET['display']) ? 'block' : 'none';
    
    echo '
        <style>
            #event_form {
                display: ' . $style . ';
            }
        </style>
    ';
?>

<div id='event_form' class='content-block'>
    <h2>Create Event</h2>
    <form onsubmit='onSubmit()'>
        <p>Title: </p>
        <input type='text' name='title' id='event_form_title'>
        <p>Date: </p>
        <input type='date' name='date' id='event_form_date'>
        <div class='button-container'>
            <input type='submit' value='Submit' class='button submit-button'>
        </div>
    </form>
</div>