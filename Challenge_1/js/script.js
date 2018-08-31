$(document).ready(function(){
    $.get(
        'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2CcontentDetails%2Cstatus', {
            maxResults: 5,
            playlistId: 'UUTI5S0PqpgB0DbYgcgRU6QQ',
            key: API_KEY // Create a new env.js file in the js folder with: API_KEY = 'Your API Key here' 
        },
        function(data) {
            $.each(data.items, function(i, item) {
                console.log(item)
                output = `
                    <div class="content-block">
                        <h2>` 
                            + item.snippet.title + 
                        `</h2>
                        <div class="video-container">
                            <iframe class="video" frameBorder="0" src="https://www.youtube.com/embed/`
                                + item.contentDetails.videoId +
                            `"></iframe>
                        </div>
                    </div>`
                
                $('#results').append(output)
            })
        }
    )
})