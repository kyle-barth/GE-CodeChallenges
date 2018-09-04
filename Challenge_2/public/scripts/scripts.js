// Pass the checkbox name to the function - https://stackoverflow.com/questions/8563240/how-to-get-all-checked-checkboxes
function getRaidioBtnSelected(radioBtnName) {
    const radioBtns = document.getElementsByName(radioBtnName)
    let radioBtnSelected = null
    // loop over them all
    for (let i=0; i<radioBtns.length; i++) {
        // And stick the checked ones onto an array...
        if (radioBtns[i].checked) {
            radioBtnSelected = radioBtns[i].value
            break;
        }
    }
    // Return the array if it is non-empty, or null
    return radioBtnSelected
}

// create
function onCreate() {
    document.getElementById('event_form').style.display = 'block'
}

// edit
function onEdit() {
    document.getElementById('event_form').style.display = 'block'
}

// delete
function onDelete() {
    const radioBtnSelected = getRaidioBtnSelected('event_radioBtns')
    
    if (!radioBtnSelected) {
        // user didn't select an option
        alert('You must select an option to delete!')
    } else {
        // do something
        window.location.search += '&event_radioBtns=' + radioBtnSelected
    }
}

function createMessage(message) {
    alert(message)
    let url = window.location.href
    url = url.substring(0, url.indexOf("?"))
    window.location = url
}