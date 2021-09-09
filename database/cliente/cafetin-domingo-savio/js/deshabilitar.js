//Obtenemos la hora actual del dispositivo.
var hoy  = new Date();
var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
var input = document.querySelector('#reservar');
var horaL = ["13:57", "13:13", "13:14", "13:15", "13:16", "13:17", "13:18"];

let input = document.querySelector('input');

input.addEventListener('#reservar', () => {
	if(hora === horaL){
	input.disable = true;
}else{
  input.disable = false;
  alert("No se hacen reservaciones a esta hora");
}
})



//var horaDesahabilitar = ('11:00:00');

//Desabilitamos el bton de reservación.

//var input = document.querySelector("#reservar");
//input.value = hora;

//var horaLimit = new Date("11:23:00");
//input.value = horaLimit;



/*input.addEventListener('keyup', () => {
	if(hora == horaDeshablitar){
	input.disable = true;
}else{
  input.disable = false;
}
})*/
