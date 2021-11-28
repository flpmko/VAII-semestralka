var editCredentials = false;
var editContact = false;
var editAddress = false;

var credDis = document.getElementById("credentials-disabled");
var credEna = document.getElementById("credentials-enabled");

var contDis = document.getElementById("contact-disabled");
var contEna = document.getElementById("contact-enabled");

var addrDis = document.getElementById("address-disabled");
var addrEna = document.getElementById("address-enabled");

credEna.style.display = "none";
contEna.style.display = "none";
addrEna.style.display = "none";

window.handleClick = function (text) {
    if (text == "credentials") {
        editCredentials = !editCredentials;
    } else if (text == "contact") {
        editContact = !editContact;
    } else {
        editAddress = !editAddress;
    }
    handleEdit(text);
};

function handleEdit(text) {
    switch (text) {
        case "credentials":
            if (editCredentials) {
                credDis.style.display = "none";
                credEna.style.display = "block";
            } else {
                credDis.style.display = "block";
                credEna.style.display = "none";
            }
            break;
        case "contact":
            if (editContact) {
                contDis.style.display = "none";
                contEna.style.display = "block";
            } else {
                contDis.style.display = "block";
                contEna.style.display = "none";
            }
        default:
            if (editAddress) {
                addrDis.style.display = "none";
                addrEna.style.display = "block";
            } else {
                addrDis.style.display = "block";
                addrEna.style.display = "none";
            }
            break;
    }
}
