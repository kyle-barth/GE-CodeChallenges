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
    
    // change the title depending when edit or create is selected
    $form_title = isset($_GET['create']) ? 'Create Event' : 'Edit Event';

    echo '
        <script type="text/javascript">
            window.onload = function() {
                document.getElementById(\'form_title\').innerHTML = \''. $form_title . '\'
            }
        </script>
    ';
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