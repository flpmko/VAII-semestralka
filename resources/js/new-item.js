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

window.confirmAction = function (action, itemName, itemId) {
    if (confirm("Naoazaj chcete " + action + " " + itemName + "?")) {
        window.location.href = 'delete/' + itemId;
        window.addEventListener('load', function () {
            alert(itemName + " bol úspešne vymazaný!");
          })
    }
}