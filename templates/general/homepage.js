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

});

right_button_collection.addEventListener('click', () => {


    if (position_collection_grid <= collection_grid_width-area_collection_grid_with + 140) {
        position_collection_grid = position_collection_grid + 140
        collection_grid.style.right = String(position_collection_grid)+"px"
    }

});