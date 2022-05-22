//Jalamos los elementos
//Primer input
var eye= document.getElementById('Eye');
var input= document.getElementById('Input');

//segundo input
var eyeDos= document.getElementById('EyeDos');
var inputDos = document.getElementById('InputDos')


//Realizamos el primer evento
eye.addEventListener("click", function(){
    //Creamos condicional 
     if(input.type=="password"){
         input.type="text";
         eye.style.opacity=0.3;
     }else{
         input.type="password";
         eye.style.opacity= 1;
     }

} )

//Segundo evento
eyeDos.addEventListener("click", function(){
    //CONDICIONAL
    if(inputDos.type=="password"){
        inputDos.type="text";
        eyeDos.style.opacity=0.3;
    }else{
        inputDos.type="password";
        eyeDos.style.opacity= 1;
    }


} )