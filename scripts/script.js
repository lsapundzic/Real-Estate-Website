// Script activated on all pages

/* SEARCH FILTER */

// Select all cards on the screen
const cards = document.querySelectorAll(".estate");

// Select all buttons and add event listeners
const all = document.querySelector("#all").addEventListener("click", refreshList);
const littoral = document.querySelector("#littoral").addEventListener("click", function () {
    searchList("Littoral");
});
const upper = document.querySelector("#upper").addEventListener("click", function () {
    searchList("Upper Carniola");
});
const inner = document.querySelector("#inner").addEventListener("click", function () {
    searchList("Inner Carniola");
});
const lower = document.querySelector("#lower").addEventListener("click", function () {
    searchList("Lower Carniola");
});
const carinthia = document.querySelector("#carinthia").addEventListener("click", function () {
    searchList("Carinthia");
});
const styria = document.querySelector("#styria").addEventListener("click", function () {
    searchList("Styria");
});
const prekmurje = document.querySelector("#prekmurje").addEventListener("click", function () {
    searchList("Prekmurje");
});


function refreshList() {
    for (let i = 0; i < cards.length; i++) {
        // .innerText is crucial here, makes the comparison possible
        cards[i].style.display = "block";
    }
    // alert("Signal from Display All");
}

function searchList(x) {
    // Refreshes the list so that the searchList function can start anew
    refreshList();

    for (let i = 0; i < cards.length; i++) {
        // .innerText is crucial here, makes the comparison possible
        if (cards[i].querySelector("h4").innerText !== x) {
            cards[i].style.display = "none";
        }
    }
    // alert("Signal from Elsewhere: " + x);
}