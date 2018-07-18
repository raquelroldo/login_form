(function(){
var enviar = document.querySelector("#enviar");

enviar.addEventListener('click', enviarForm);

function enviarForm(){
	
	var userInput = document.querySelector(".userInput").value;

	if (userInput != "" && userInput != null) {
		alert("Obrigada por registrar-se");
	}else{
		alert("Preencha os campos corretamente!");
	}
}

})()