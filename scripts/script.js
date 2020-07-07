// Script activated on all pages

/* SEARCH FILTER */

// Select all cards on the screen

document.addEventListener("DOMContentLoaded", function () {

})

const cards = document.querySelectorAll(".estate");

// Select all buttons and add event listeners
const all = document.querySelector("#all").addEventListener("click", displayAll);
const littoral = document.querySelector("#littoral").addEventListener("click", searchList("Littoral"), false);
const upper = document.querySelector("#upper").addEventListener("click", searchList("Upper Carniola"), false);
const inner = document.querySelector("#inner").addEventListener("click", searchList("Inner Carniola"));
const lower = document.querySelector("#lower").addEventListener("clicl", searchList("Lower Carniola"), false);
const carinthia = document.querySelector("#carinthia").addEventListener("click", searchList("Carinthia"));
const styria = document.querySelector("#styria").addEventListener("click", searchList("Styria"));
const prekmurje = document.querySelector("#prekmurje").addEventListener("click", searchList("Prekmurje"));


function displayAll() {
    for (let i = 0; i < cards.length; i++) {
        // .innerText is crucial here, makes the comparison possible
        cards[i].style.display = "block";
    }
    // alert("Signal from Display All");
}

function searchList(x) {
    // for (let i = 0; i < cards.length; i++) {
    //     // .innerText is crucial here, makes the comparison possible
    //     if (!cards[i].querySelector("h4").innerText === x) {
    //         cards[i].style.display = "none";
    //     }
    // }
    alert("Signal from " + x);
}