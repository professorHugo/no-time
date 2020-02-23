function definirClasse(classePersonagem) {
    var xhttp;
    var DadosClasse = document.getElementById("DadosClasse");
    xhttp = new XMLHttpRequest();

    DadosClasse.innerHTML = '<div style="margin:2% 25%"><img width="100%" src="img/ajax-loader.gif" class="img-responsive" /></div>';
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            DadosClasse.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "js/Ajax/EscolhaClasse.php?C=" + classePersonagem, true);
    xhttp.send();
}

function exibirEquipamentos(classePersonagem) {
    var xhttp;
    var DadosEquip = document.getElementById("Equipamentos");
    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            DadosEquip.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "js/Ajax/Equipamentos.php?C="+classePersonagem, true);
    xhttp.send();
}
