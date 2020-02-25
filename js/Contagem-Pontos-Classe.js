function CalcularAtributosClasse(){
    var habTotal = document.getElementById("HabilidadeTotal");
    var HabRestante = document.getElementById("HabilidadeRestante");
    
	var hab_c1 = parseInt(document.getElementById("hab_c1").value);
    var hab_c2 = parseInt(document.getElementById("hab_c2").value);
    var hab_c3 = parseInt(document.getElementById("hab_c3").value);
    var hab_c4 = parseInt(document.getElementById("hab_c4").value);
		
	var resultado = hab_c1+hab_c2+hab_c3+hab_c4;
	
	habTotal.innerHTML = 70 - resultado;
    HabRestante.value = 70 - resultado;
}