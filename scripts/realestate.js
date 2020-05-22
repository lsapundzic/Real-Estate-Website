// NOT WORKING. DIFFERENT METHOD WILL BE APPLIED

const estates = document.querySelectorAll("estate");
const title = document.createElement("h3");
title.innerHTML = "TEST CREATION";

window.addEventListener("load", function () {
  document.body.style.backgroundColor = "#81188c";
  for (let i = 0; i < estates.length; i++) {
    estates[i].appendChild(title);
  }
});
