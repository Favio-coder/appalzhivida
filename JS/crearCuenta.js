let icon_eye_1 = document.getElementsByClassName("icon-eye-1");
let icon_eye_2 = document.getElementsByClassName("icon-eye-2");
let input_password = document.getElementById("contraseña");

for(let i = 0; i < icon_eye_1.length; i++){
icon_eye_1[0].addEventListener("click", ()=>{
    icon_eye_2[0].style.display = "block";
    icon_eye_1[0].style.display = "none"; 
    input_password.type = "text";
})

icon_eye_2[0].addEventListener("click", ()=>{
    icon_eye_1[0].style.display = "block";
    icon_eye_2[0].style.display = "none";
    input_password.type = "password";
})
}
 
//Redireccionar página de "Crear cuenta"
function redireccionarCuenta() {
    window.location.href = 'crearCuenta.php';
}


    




