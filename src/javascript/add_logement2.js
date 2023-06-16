const inputImage = document.getElementById("inputImage");
const previewImage = document.getElementById("previewImge")

inputImage.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
    
        reader.onload = (e) => {
          previewImage.src = e.target.result;
          previewImage.style.display = "block";
        };
    
        reader.readAsDataURL(file);
      } else {
        previewImage.src = "";
        previewImage.style.display = "none";
      }
})