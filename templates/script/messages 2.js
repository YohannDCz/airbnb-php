const rows = document.querySelectorAll(".row");
const panelleft = document.querySelector(".panelleft");
const panelright = document.querySelector(".panelright");
const arrowheader = document.querySelector(".arrowheader");

rows.forEach((row) => {
  row.addEventListener("click", function () {
    var viewportWidth = window.innerWidth; // Update viewport width
    if (viewportWidth < 840) {
      panelleft.style.display = "none";
      panelright.style.display = "flex";
    }
  });
});

arrowheader.addEventListener("click", function () {
  var viewportWidth = window.innerWidth; // Update viewport width
  if (viewportWidth < 840) {
    panelleft.style.display = "flex";
    panelright.style.display = "none";
  }
});

window.addEventListener("resize", function () {
  var viewportWidth = window.innerWidth; // Update viewport width
  if (viewportWidth >= 840) {
    panelleft.style.display = "flex";
    panelright.style.display = "flex";
  } else {
    panelleft.style.display = "flex";
    panelright.style.display = "none";
  }
});
