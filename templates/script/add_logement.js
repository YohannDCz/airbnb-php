const first_btn = document.getElementById("first_btn");

first_btn.addEventListener('click', function(){
    window.location.href = "http://localhost:8888/templates/backoffice/add_logement2.php";
})


const second_btn = document.getElementById("second_btn")

second_btn.addEventListener('click', function(){
    window.location.href = "add_logement3.php"

})

const btn_back1= document.getElementById("btn_back1")

btn_back1.addEventListener('click', function(){
    window.location.href="add_logement.html"
})

const btn_back2= document.getElementById("btn_back2")

btn_back2.addEventListener('click', function(){
    window.location.href="add_logement2.html"
})