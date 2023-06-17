const menu = document.querySelector(".menu");
const panel = document.querySelector(".panel");

menu.addEventListener("click", function() {
  if (panel.style.display === "none") {
    panel.style.display = "flex";
  } else {
    panel.style.display = "none";
  }
})