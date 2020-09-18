// Script activated on all pages

/* SEARCH FILTER */

// Select all cards on the screen
const cards = document.querySelectorAll(".estate");

$('#all').click(function () {
    refreshList();
})

$('#littoral').click(function () {
    searchList("Littoral");
})

$('#upper').click(function () {
    searchList("Upper Carniola");
})

$('#inner').click(function () {
    searchList("Inner Carniola");
})

$('#lower').click(function () {
    searchList("Lower Carniola");
})

$('#carinthia').click(function () {
    searchList("Carinthia");
})

$('#styria').click(function () {
    searchList("Styria");
})

$('#prekmurje').click(function () {
    searchList("Prekmurje");
})




function refreshList() {
    for (let i = 0; i < cards.length; i++) {
        $(cards[i]).show();
    }
}

function searchList(x) {
    // Refreshes the list so that the searchList function can start anew
    refreshList();

    for (let i = 0; i < cards.length; i++) {
        // .innerText is crucial here, makes the comparison possible
        if (cards[i].querySelector("h4").innerText !== x) {
            $(cards[i]).fadeOut(1500);
        }
    }
}