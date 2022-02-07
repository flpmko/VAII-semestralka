setSrcByClass("account-icon", "../imgs/icons/user-black.png");

function setSrcByClass(elementId, src) {
    let anchor = document.getElementById("toggle");
    if (anchor.className.includes("active")) {
        let img = document.getElementById(elementId);
        img.setAttribute("src", src);
    }
}

const toggleButton = document.getElementsByClassName("hamburger")[0];
const navbarLinks = document.getElementsByClassName("links")[0];

toggleButton.addEventListener("click", (e) => {
    e.stopImmediatePropagation();
    navbarLinks.classList.toggle("active");
    console.log("burgir");
});
