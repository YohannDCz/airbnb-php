const panelfiltre = document.getElementById("panelfiltre")
const filtre = document.getElementById("filtre")

filtre.addEventListener('click', function() {
    if (panelfiltre.style.display === "none") {
        
        panelfiltre.style.display = "flex";
    } else {
        panelfiltre.style.display = "none";
    }
})