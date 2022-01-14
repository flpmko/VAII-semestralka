setSrcByClass("account-icon", "../imgs/icons/user-black.png");

function setSrcByClass(elementId, src) {
    let anchor = document.getElementById("toggle");
    if (anchor.className.includes("active")) {
        let img = document.getElementById(elementId);
        img.setAttribute("src", src);
    }
}