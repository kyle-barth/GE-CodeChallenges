// create
function onCreate() {
    appendCurrentURL('&display=true&create=true')
}

// edit
function onEdit() {
    checkOptionSelected('edit')
}

// delete
function onDelete() {
    checkOptionSelected('delete')
}

// submit 
function onSubmit() {
    $("#event_form").submit(function (e) {
        e.preventDefault();
    });

    let title = document.getElementById('event_form_title').value
    let date = document.getElementById('event_form_date').value

    //appendCurrentURL('&title=' + document.getElementById('event_form_title').value + '&date=' + document.getElementById('event_form_date').value)

    if (title && date && title.value != '' && date.value != '') {
        appendCurrentURL('&title=' + title + '&date=' + date)
    }
    else {
        createMessage("You can\'t leave any fields blank!")
    }

}

// checks if the user selected a radio button or not, outputs a message if not
function checkOptionSelected(tmp) {
    const radioBtnSelected = getRaidioBtnSelected('event_radioBtns')
    let bool = true

    if (!radioBtnSelected) {
        // user didn't select an option
        alert('You must select an option to ' + tmp + '!')
    } else {
        if (tmp === 'delete') {
            // do delete stuff
            appendCurrentURL('&display=true&delete=true&event_radioBtns=' + radioBtnSelected)
        }
        else {
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
    clearURL()
}

function clearURL() {
    let url = window.location.href
    url = url.substring(0, url.indexOf("?"))
    window.location = url
}

// append current url
function appendCurrentURL(url) {
    currentURL = window.location.href
    if (!currentURL.includes(url))
        window.location.search += url
}