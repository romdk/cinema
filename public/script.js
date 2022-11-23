let note = document.getElementById("note");
let result = note.textContent;
const etoile1 = document.getElementById("etoile1");
const etoile2 = document.getElementById("etoile2");
const etoile3 = document.getElementById("etoile3");
const etoile4 = document.getElementById("etoile4");
const etoile5 = document.getElementById("etoile5");


function afficherNote() {
  etoile1.classList.remove("full", "half");
  etoile2.classList.remove("full", "half");
  etoile3.classList.remove("full", "half");
  etoile4.classList.remove("full", "half");
  etoile5.classList.remove("full", "half");
  if (result == 0.5) {
    etoile1.classList.add("half");
  } else if (result == 1) {
    etoile1.classList.add("full");
  } else if (result == 1.5) {
    etoile1.classList.add("full");
    etoile2.classList.add("half");
  } else if (result == 2) {
    etoile1.classList.add("full");
    etoile2.classList.add("full");
  } else if (result == 2.5) {
    etoile1.classList.add("full");
    etoile2.classList.add("full");
    etoile3.classList.add("half");
  } else if (result == 3) {
    etoile1.classList.add("full");
    etoile2.classList.add("full");
    etoile3.classList.add("full");
  } else if (result == 3.5) {
    etoile1.classList.add("full");
    etoile2.classList.add("full");
    etoile3.classList.add("full");
    etoile4.classList.add("half");
  } else if (result == 4) {
    etoile1.classList.add("full");
    etoile2.classList.add("full");
    etoile3.classList.add("full");
    etoile4.classList.add("full");
  } else if (result == 4.5) {
    etoile1.classList.add("full");
    etoile2.classList.add("full");
    etoile3.classList.add("full");
    etoile4.classList.add("full");
    etoile5.classList.add("half");
  } else if (result == 5) {
    etoile1.classList.add("full");
    etoile2.classList.add("full");
    etoile3.classList.add("full");
    etoile4.classList.add("full");
    etoile5.classList.add("full");
  }
}

afficherNote();
