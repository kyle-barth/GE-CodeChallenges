        <div id='container'>
            <div class='content-block'>
                <h2>Intro</h2>
                <p>
                    A simple application that will allow the user to display a list of events from a database table with three columns - id, event title and event date.
                </p>
                <h2>Tech Stack:</h2>
                <ol>
                    <li>PHP</li>
                    <li>HTML 5</li>
                    <li>CSS 3</li>
                    <li>MySQL</li>
                </ol>
            </div>
            
            <!-- build the main content for the page 
                - display error if can't connect to db
                - create, edit, delete buttons
                - events list
            -->
            <?php require './body/build-main-content.php'; ?>
        </div>
    </body>
</html>