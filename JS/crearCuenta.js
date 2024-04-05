

let icon_eye_1 = document.getElementsByClassName("icon-eye-1");
let icon_eye_2 = document.getElementsByClassName("icon-eye-2");
let input_password = document.getElementById("contraseña");
let input_password_val = document.getElementById("contraseña__val");
let btn__is = document.getElementById("btn__is");
let btn__reg = document.getElementById("btn__reg");
let sub__line = document.querySelectorAll(".sub__line");

for(let i = 0; i < icon_eye_1.length; i++){
    icon_eye_1[i].addEventListener("click", ()=>{
        icon_eye_2[i].style.display = "block";
        icon_eye_1[i].style.display = "none"; 
        input_password.type = "text";
    })

    icon_eye_2[i].addEventListener("click", ()=>{
        icon_eye_1[i].style.display = "block";
        icon_eye_2[i].style.display = "none";
        input_password_val.type = "password";
    })
}

 
//Redireccionar página de "Crear cuenta"
function redireccionarCuenta() {
    window.location.href = 'crearCuenta.php';
}

sub__line[1].style.backgroundColor = "#9466f0";
btn__reg.style.color = "#9466f0";

btn__is.addEventListener("mouseover", ()=>{
    sub__line[1].style.backgroundColor = "#fff";
    btn__reg.style.color = "#848484";
    sub__line[0].style.backgroundColor = "#9466f0";
    btn__is.style.color = "#9466f0";
})

btn__is.addEventListener("mouseout", ()=>{
    sub__line[0].style.backgroundColor = "#fff";
    btn__is.style.color = "#848484";
    sub__line[1].style.backgroundColor = "#9466f0";
    btn__reg.style.color = "#9466f0";
})

btn__reg.addEventListener("mouseover", ()=>{
    sub__line[0].style.backgroundColor = "#fff";
    btn__is.style.color = "#848484";
    sub__line[1].style.backgroundColor = "#9466f0";
    btn__reg.style.color = "#9466f0";
})




    





    




