// create
function onCreate() {
    document.getElementById('event_form').style.display = 'block'
}

// edit
function onEdit() {
    document.getElementById('event_form').style.display = 'block'
}

// submit
function onSubmit() {
    if (!document.getElementById('event_form_title') || !document.getElementById('event_form_date')) {
        // user left a field blank
        alert('You can\'t leave a field blank!')
    }
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

// return what radio button is selected - https://stackoverflow.com/questions/8563240/how-to-get-all-checked-checkboxes
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

// creates a message for the user and clears the url
function createMessage(message) {
    alert(message)
    let url = window.location.href
    url = url.substring(0, url.indexOf("?"))
    window.location = url
}