const all = document.querySelector("#All");
const dol = document.querySelector("#Dolenjska");
const estates = document.querySelectorAll(".estate");

all.addEventListener("click", function () {
  for (let i = 0; i < estates.length; i++) {
    resetFilter();
  }
});

dol.addEventListener("click", function () {
  resetFilter();
  for (let i = 0; i < estates.length; i++) {
    if (estates[i].className !== `estate Dolenjska`) {
      estates[i].setAttribute("class", "disappear");
    }
  }
});

function resetFilter() {
  for (let i = 0; i < estates.length; i++) {
    estates[i].classList.remove("disappear");
  }
}
