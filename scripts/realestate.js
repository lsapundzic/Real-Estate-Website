// The code is working but it should be reading a JSON file instead

let propertyNames = [
  `Smarjeta Castle`,
  `Otocec Castle`,
  `Trska Gora Estate`,
  `Ursna Sela Plantation`,
  `Zuzemberk Fortress`,
  `Krka, The Entire Village`,
  `Grad Grm`,
];

let propertyPrices = [
  `100,000`,
  `150,000`,
  `350,000`,
  `420,000`,
  `250,000`,
  `550,000`,
];

const estates = document.querySelectorAll(".estate");

window.addEventListener("load", function () {
  for (let i = 0; i < propertyNames.length; i++) {
    const title = document.createElement("h3");
    title.innerHTML = propertyNames[i] + `</br>`;

    const price = document.createElement("p");
    price.innerHTML = propertyPrices[i] + `&euro;`;

    estates[i].append(title, price);
  }
});
