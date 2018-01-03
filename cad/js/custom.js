

/* Atribui ao evento change do input FILE para upload da foto*/
var inputFile = document.getElementById("foto");
var foto_cliente = document.getElementById("foto-cliente");
if (inputFile != null && inputFile.addEventListener) {                   
    inputFile.addEventListener("change", function(){loadFoto(this, foto_cliente)});
} else if (inputFile != null && inputFile.attachEvent) {                  
    inputFile.attachEvent("onchange", function(){loadFoto(this, foto_cliente)});
}

//data de nascimento da crianca
var inputDataNascimentoC = document.getElementById("data_nascimentoC");
if (inputDataNascimentoC != null && inputDataNascimentoC.addEventListener) {                   
    inputDataNascimentoC.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputDataNascimentoC != null && inputDataNascimentoC.attachEvent) {                  
    inputDataNascimentoC.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}


/* Função para formatar dados conforme parâmetro enviado, CPF, DATA, TELEFONE e CELULAR */
function mascaraTexto(t, mask){
	var i = t.value.length;
	var saida = mask.substring(1,0);
	var texto = mask.substring(i);

	if (texto.substring(0,1) != saida){
		t.value += texto.substring(0,1);
	}
}

/* Função para exibir a imagem selecionada no input file na tag <img>  */
function loadFoto(file, img){
    if (file.files && file.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           img.src = e.target.result;
        }
        reader.readAsDataURL(file.files[0]);
    }
}


