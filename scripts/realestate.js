// The code is working but it should be reading a JSON file instead

// Pre-JSON content
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

window.addEventListener("load", function () {
  const showcase = document.querySelector(".showcase");

  for (let i = 0; i < propertyNames.length; i++) {
    const estate = document.createElement("div");
    estate.setAttribute("class", "estate");

    const propName = document.createElement("h3");
    propName.innerHTML = propertyNames[i];

    const price = document.createElement("p");
    price.innerHTML = propertyPrices[i] + `&euro;`;

    estate.append(propName, price);
    showcase.append(estate);
  }
});
