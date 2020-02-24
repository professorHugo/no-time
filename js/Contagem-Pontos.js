function CalcularAtributos(){
    var atrTotal = document.getElementById("AtributosTotal");
    
	var atr1 = parseInt(document.getElementById("atr1_v").value);
    var atr2 = parseInt(document.getElementById("atr2_v").value);
    var atr3 = parseInt(document.getElementById("atr3_v").value);
    var atr4 = parseInt(document.getElementById("atr4_v").value);
		
	var resultado = atr1+atr2+atr3+atr4;
	
	atrTotal.innerHTML = 100 - resultado;
}