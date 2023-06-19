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
        left_button_review.style.border = "0px"
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
        left_button_review.style.border = "1px solid black"
    }

});