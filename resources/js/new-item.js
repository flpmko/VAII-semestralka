// setClassByValue("docs", "docs-button");
// setClassByValue("image", "image-button");

var confirmed = false;

window.clearInputFile = function (fileId) {
    let f = document.getElementById(fileId);
    if (f.value) {
        try {
            f.value = "";
        } catch (err) {}
    }
};

window.selectItemByValue = function(elementId, value) {
    let element = document.getElementById(elementId);
    for (var i = 0; i < elemnent.options.length; i++) {
        if (element.options[i].value === value) {
            element.selectedIndex = i;
            break;
        }
    }
}

function setClassByValue(elementId, buttonId) {
    let element = document.getElementById(elementId);
    if (element.value == null) {
        let button = document.getElementById(buttonId);
        button.setAttribute("class", "hidden form-icon");
    }
}

window.confirmAction = function (action) {
    this.confirmed = confirm("Naoazaj chcete " + action + " ?");
    if (!confirmed) {
        let anchor = document.getElementById('delete-icon');
        anchor.setAttribute('href', '/items');
    }
}

// window.confirmAction = function (action, item) {
//     confirm("Naoazaj chcete " + action + " " + item + " ?");
// }