window.searchItems = function () {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search-bar");
    filter = input.value.toUpperCase();
    table = document.getElementById("items-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
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

window.confirmAction = function (action, itemName, itemId) {
    switch (action) {
        case "delete":
            if (confirm("Naoazaj chcete vymazať " + itemName + "?")) {
                window.location.href = "item-delete/" + itemId;
                window.addEventListener("load", function () {
                    alert(itemName + " bol úspešne vymazaný!");
                });
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