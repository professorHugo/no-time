function mostarResultado(box,num_max,campospan){
    var contagem_carac = box.length;

    if(contagem_carac != 0){
        document.getElementById(campospan).innerHTML = contagem_carac + " caracteres digitados";
    }
    if(contagem_carac == 1){
        document.getElementById(campospan).innerHTML = contagem_carac + " caracter digitado";
    }

    if(contagem_carac >= num_max){
        document.getElementById(campospan).innerHTML = "Limite de caracteres excedidos";
    }else{
        document.getElementById(campospan).innerHTML = "Nada digitado";
    }                    
}

function contarCaracteres(box,valor,campospan){
    var conta = valor - box.length;
    document.getElementById(campospan).innerHTML = " Você ainda pode digitar " + conta + " caracteres";

    if(box.length >= valor){
        document.getElementById(campospan).innerHTML = "Opss.. você não pode digitar mais...";
        document.getElementById("atr1_v").value = document.getElementById("atr1_v").value.substr(0,valor);
    }
}