const left_button_dispo = document.querySelector("#left_dispo_btn button")
const right_button_dispo = document.querySelector("#right_dispo_btn button")

const dispo_slider = document.getElementById("dispo_slider")
const area_dispo_slider = document.getElementById("area_dispo_slider")

let position_dispo_slider = 0
let dispo_slider_width = dispo_slider.offsetWidth
const area_dispo_slider_with = area_dispo_slider.offsetWidth

left_button_dispo.addEventListener('click', () => {

    
    
    if (position_dispo_slider!=0) {
        position_dispo_slider = position_dispo_slider - 140
        dispo_slider.style.right = String(position_dispo_slider)+"px"
    }

    if (position_dispo_slider==0) {
        left_button_dispo.style.width = "0px"
        left_button_dispo.style.height = "0px"
        left_button_dispo.style.padding = "0px"
    }

});

right_button_dispo.addEventListener('click', () => {

    console.log("hello");

    if (position_dispo_slider <= dispo_slider_width-area_dispo_slider_with + 140) {
        position_dispo_slider = position_dispo_slider + 140
        dispo_slider.style.right = String(position_dispo_slider)+"px"
    }

    if (position_dispo_slider!=0) {
        left_button_dispo.style.width = "70px"
        left_button_dispo.style.height = "70px"
        left_button_dispo.style.padding = "10px 20px"
    }

});

const left_button_collection = document.querySelector("#left_collection_btn button")
const right_button_collection = document.querySelector("#right_collection_btn button")

const collection_grid = document.getElementById("collection_grid")
const area_collection_grid = document.getElementById("area_collection_grid")

let position_collection_grid = 0
let collection_grid_width = collection_grid.offsetWidth
const area_collection_grid_with = area_collection_grid.offsetWidth

left_button_collection.addEventListener('click', () => {
    
    if (position_collection_grid!=0) {
        position_collection_grid = position_collection_grid - 140
        collection_grid.style.right = String(position_collection_grid)+"px"
    }

    if (position_collection_grid==0) {
        left_button_collection.style.width = "0px"
        left_button_collection.style.height = "0px"
        left_button_collection.style.padding = "0px"
    }

});

right_button_collection.addEventListener('click', () => {


    if (position_collection_grid <= collection_grid_width-area_collection_grid_with + 140) {
        position_collection_grid = position_collection_grid + 140
        collection_grid.style.right = String(position_collection_grid)+"px"
    }

    if (position_collection_grid!=0) {
        left_button_collection.style.width = "70px"
        left_button_collection.style.height = "70px"
        left_button_collection.style.padding = "10px 20px"
    }

});

const left_button_review = document.querySelector("#left_review_btn button")
const right_button_review = document.querySelector("#right_review_btn button")

const review_slider = document.getElementById("review_slider")
const area_review_slider = document.getElementById("area_review_slider")

let position_review_slider = 0
let review_slider_width = review_slider.offsetWidth
const area_review_slider_with = area_review_slider.offsetWidth

left_button_review.addEventListener('click', () => {
    
    if (position_review_slider!=0) {
        position_review_slider = position_review_slider - 140
        review_slider.style.right = String(position_review_slider)+"px"
    }

    if (position_review_slider==0) {
        left_button_review.style.width = "0px"
        left_button_review.style.height = "0px"
        left_button_review.style.padding = "0px"
    }

});

right_button_review.addEventListener('click', () => {


    if (position_review_slider <= review_slider_width-area_review_slider_with + 140) {
        position_review_slider = position_review_slider + 140
        review_slider.style.right = String(position_review_slider)+"px"
    }

    if (position_review_slider!=0) {
        left_button_review.style.width = "70px"
        left_button_review.style.height = "70px"
        left_button_review.style.padding = "10px 20px"
    }

});


 const dateDebutInput = document.getElementById('date_debut');
 const dateFinInput = document.getElementById('date_fin');
 const price_tag = document.getElementById('price_tag')
 const price_each = document.getElementById('price_each')

 dateDebutInput.addEventListener('input', calculerNombreJours);
 dateFinInput.addEventListener('input', calculerNombreJours);

 function calculerNombreJours() {

     const dateDebut = dateDebutInput.value;
     const dateFin = dateFinInput.value;

     if (dateDebut && dateFin) {

        let dateDebutObj = new Date(dateDebut);
        let dateFinObj = new Date(dateFin);
        let differenceMs = dateFinObj - dateDebutObj;
        let differenceJours = Math.floor(differenceMs / (1000 * 60 * 60 * 24));
        let resultat = document.getElementById('nb_jours');
        resultat.textContent = ` ${differenceJours} jours`;
        price_tag.textContent = price_each.textContent*differenceJours

     } else {

         let resultat = document.getElementById('nb_jours');
         resultat.textContent = '';
     }
 }

 const img1 = document.getElementById('img1');
 const img2 = document.getElementById('img2');
 const img3 = document.getElementById('img3');
 
 function changeImg(img) {
    let img0 = document.getElementById('img0');

    let img0src = img0.src;
    let imgSrc = img.src;

    img0.src = imgSrc;
    img.src = img0src;
 }
 
 img1.addEventListener('click', () => {
   changeImg(img1);
 });
 
 img2.addEventListener('click', () => {
   changeImg(img2);
 });
 
 img3.addEventListener('click', () => {
   changeImg(img3);
 });






