<?php 
    // make the component visible when edit or create is selected
    $style = isset($_GET['display']) ? 'block' : 'none';

    echo '
        <style>
            #event_form {
                display: ' . $style . ';
            }
        </style>
    ';
    
    // set the title to Create Event when create is selected
    if (isset($_GET['create'])) {
        echo '
            <script type="text/javascript">
                window.onload = function() {
                    document.getElementById(\'form_title\').innerHTML = \'Create Event\'
                }
            </script>
        ';
    };
?>

<div id='event_form' class='content-block'>
    <h2 id='form_title'></h2>
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