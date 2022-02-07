window.searchItems = function () {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search-bar");
    filter = input.value.toUpperCase();
    table = document.getElementById("items-table");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
};

window.confirmAction = function (action, itemType, itemName, itemId) {
    switch (action) {
        case "delete":
            if (itemType == 'item') {
                if (confirm("Naoazaj chcete vymazať zariadenie " + itemName + "?")) {
                    window.location.href = "item-delete/" + itemId;
                    window.addEventListener("load", function () {
                        alert("Zariadenie " + itemName + " bolo úspešne vymazané!");
                    });
                }
            }
            if (itemType == 'article') {
                if (confirm("Naoazaj chcete vymazať článok " + itemName + "?")) {
                    window.location.href = "article-delete/" + itemId;
                    window.addEventListener("load", function () {
                        alert("Článok " + itemName + " bol úspešne vymazaný!");
                    });
                }
            }
            break;
        case "return":
            if (confirm("Naoazaj chcete vrátiť pôžičku " + itemName + "?")) {
                window.location.href = "rental-return/" + itemId;
                window.addEventListener("load", function () {
                    alert("Pôžička " + itemName + " bola úspešne vrátená!");
                });
            }
            break;
        default:
            break;
    }
};

const { default: axios } = require("axios");

const quantity = document.querySelectorAll(".quantity");
if (quantity) {
    for (let i = 0; i < quantity.length; i++) {
        const element = quantity[i];
        element.addEventListener("input", () => {
            sendToApi(element.dataset.id, element.value);
        });
    }
}

function sendToApi(id, value) {
    axios
        .post("/api/quantity", {
            // headers: { 'Authorization' : 'Bearer '+ api_token},
            id: parseInt(value),
            quantity: value,
        })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
}