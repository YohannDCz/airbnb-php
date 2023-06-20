const panel = document.getElementById("panelfiltre")
const filtre = document.getElementById("filtre")

filtre.addEventListener('click', function() {
    if (panel.style.display === "none") {
        
        panel.style.display = "flex";
    } else {
        panel.style.display = "none";
    }
})