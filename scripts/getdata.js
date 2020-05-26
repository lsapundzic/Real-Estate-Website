// This code calls server JSON to display data

// Calling JSON
let requestURL =
  "https://raw.githubusercontent.com/ForteMare/Lower-Carniola-Real-Estate--FIS-SP-/master/json/properties.json";
let request = new XMLHttpRequest();
request.open("GET", requestURL);
request.responseType = "json";
request.send();

request.onload = function () {
  const realEstateData = request.response;
  fillData(realEstateData);
};

// Adding content to the webpage

function fillData(jsonObj) {
  // Showcase is the parent div under which estate classes are added
  const showcase = document.querySelector(".showcase");

  // Get object elements from JSON
  const propertyName = jsonObj["name"];
  const propertyRegion = jsonObj["region"];
  const propertyPrice = jsonObj["price"];
  const propertyBedrooms = jsonObj["bedrooms"];

  // Create as many cards as there are items in propertyName array
  for (let i = 0; i < propertyName.length; i++) {
    // Create div card and set class to estate + its region
    const estate = document.createElement("div");
    estate.setAttribute("class", `estate ` + propertyRegion[i]);

    // Set property name
    const propName = document.createElement("h3");
    propName.innerHTML = propertyName[i];

    // Set property region
    const propRegion = document.createElement("h4");
    propRegion.innerHTML = `Region: ` + propertyRegion[i];

    // Set property price
    const propPrice = document.createElement("p");
    propPrice.innerHTML = `Price: ` + propertyPrice[i] + `&euro;`;

    // Set no. of bedrooms
    const propBedrooms = document.createElement("p");
    propBedrooms.innerHTML = `Bedrooms: ` + propertyBedrooms[i];

    // Add everything to one estate card
    estate.append(propName, propRegion, propPrice, propBedrooms);

    // Add one estate card to showcase div
    showcase.append(estate);
  }
}
