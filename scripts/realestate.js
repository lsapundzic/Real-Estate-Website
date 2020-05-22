const estates = document.querySelectorAll("estate");

window.addEventListener("load", function () {
  document.body.style.backgroundColor = "#81188c";
  for (let i = 0; i < estates.length; i++) {
    estates[i].innerHTML += "Testing";
  }
});
