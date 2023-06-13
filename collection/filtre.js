const area_button_filtre = document.getElementById("area_button_filtre")
const trier = document.getElementById("filtre")
const appart_1 = document.getElementById("appart_1")
let isopen = false

trier.style.position = "relative"
trier.style.left = String(appart_1.offsetLeft)+"px"
console.log(appart_1.offsetLeft)

trier.addEventListener('click', event => {
    
    if (!isopen) {

        const filtre_div = document.createElement("div")
        filtre_div.style.width = "400px"
        filtre_div.style.height = "auto"
        filtre_div.style.backgroundColor = "white"
        filtre_div.style.position = "relative"
        filtre_div.style.right = "124px"
        filtre_div.style.top = "125px"
        filtre_div.style.border = "0.5px solid black"
        filtre_div.style.borderRadius = "10px"
        filtre_div.id = "filtre_div"
        area_button_filtre.append(filtre_div)

        const prix_decroi = document.createElement("button")
        prix_decroi.innerHTML = "Prix decroissant"
        prix_decroi.className = "filtre_button"
        filtre_div.append(prix_decroi)

        const prix_croi = document.createElement("button")
        prix_croi.innerHTML = "Prix croissant"
        prix_croi.className = "filtre_button"
        filtre_div.append(prix_croi)

        const pertinant = document.createElement("button")
        pertinant.innerText = "Pertinance"
        pertinant.className = "filtre_button"
        filtre_div.append(pertinant)

        const populaire = document.createElement("button")
        populaire.innerText = "Populaire"
        populaire.className = "filtre_button"
        populaire.style.border = "0px"
        filtre_div.append(populaire)
        

        isopen = true
    } else {

        filtre_div.remove()
        isopen = false
    }

  });