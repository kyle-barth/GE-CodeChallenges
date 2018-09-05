// create
function onCreate() {
    window.history.replaceState({}, '', clearURL())
    appendCurrentURL('&display=true&create=true')
}

// edit
function onEdit() {
    window.history.replaceState({}, '', clearURL())
    checkOptionSelected('edit')
}

// delete
function onDelete() {
    window.history.replaceState({}, '', clearURL())
    checkOptionSelected('delete')
}

// submit 
function onSubmit() {
    // prevent form from reloading since the logic is handled in the JS 
    $("#event_form").submit(function (e) {
        e.preventDefault();
    });

    let title = document.getElementById('event_form_title').value
    let date = document.getElementById('event_form_date').value

    if (title && date && title.value != '' && date.value != '') {
        appendCurrentURL('&title=' + title + '&date=' + date)
    }
    else {
        createMessage("You can\'t leave any fields blank!")
    }
}

// handles error checking for edit and delete & appending the URL
function checkOptionSelected(param) {
    // checks if the user selected a radio button
    const radioBtnSelected = getRaidioBtnSelected('event_radioBtns')

    // if not selected message user
    if (!radioBtnSelected) {
        // user didn't select an option
        alert('You must select an option to ' + param + '!')
    } else {
        // if selected and the user clicked delete
        if (param === 'delete') {
            // do delete stuff
            appendCurrentURL('&display=true&delete=true&event_radioBtns=' + radioBtnSelected)
        }
        // else if selected and the user clicked edit
        else if (param === 'edit') {
            // do edit stuff
            appendCurrentURL('&display=true&edit=true&event_radioBtns=' + radioBtnSelected)
        }
    }
}

// return what radio button is selected - https://stackoverflow.com/questions/8563240/how-to-get-all-checked-checkboxes
function getRaidioBtnSelected(radioBtnName) {
    const radioBtns = document.getElementsByName(radioBtnName)
    let radioBtnSelected = null
    // loop over them all
    for (let i = 0; i < radioBtns.length; i++) {
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
    const url = clearURL()
    window.location = url
}

// empties the URL of all parameters
function clearURL() {
    let url = window.location.href
    return url.substring(0, url.indexOf("?"))
}

// append current url
function appendCurrentURL(url) {
    currentURL = window.location.href
    if (!currentURL.includes(url))
        window.location.search += url
}