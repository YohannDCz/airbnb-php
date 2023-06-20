const menu = document.querySelector(".menu2");
const panel = document.querySelector(".panel");
const close = document.querySelector(".close");

menu.addEventListener("click", function() {
  if (panel.style.display === "none") {
    panel.style.display = "flex";
  } else {
    panel.style.display = "none";
  }
})

close.addEventListener("click", function () {
  if (panel.style.display === "none") {
    panel.style.display = "flex";
  } else {
    panel.style.display = "none";
  }
})

