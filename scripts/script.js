// Script activated on all pages

/* SEARCH FILTER */

// Select all cards on the screen
const cards = document.querySelectorAll(".estate");
const all = document.querySelector("#all");
const loca = document.querySelector("#lower");

all.addEventListener("click", displayAll);
loca.addEventListener("click", searchList("Lower Carniola"));

function displayAll() {
    for (let i = 0; i < cards.length; i++) {
        // .innerText is crucial here, makes the comparison possible
        cards[i].style.display = "block";
    }
}

function searchList(x) {
    for (let i = 0; i < cards.length; i++) {
        // .innerText is crucial here, makes the comparison possible
        if (cards[i].querySelector("h4").innerText === x) {
            cards[i].style.display = "none";
        }
        // console.log(cards[i].querySelector("h4").innerText === x);
    }
}
