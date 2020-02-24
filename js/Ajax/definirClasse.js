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

    DadosEquip.innerHTML = '<div style="margin:2% 25%"></div>';
    
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            DadosEquip.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "js/Ajax/Equipamentos.php?C="+classePersonagem, true);
    xhttp.send();
}

function escolherHabilidades(classePersonagem) {
    var xhttp;
    var HabilidadesClasse = document.getElementById("HabilidadesClasse");
    xhttp = new XMLHttpRequest();

    HabilidadesClasse.innerHTML = '<div style="margin:2% 25%"></div>';
    
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            HabilidadesClasse.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "js/Ajax/Habilidades.php?C="+classePersonagem, true);
    xhttp.send();
}
function mostrarDetalhesHabilidade1(idHabilidade1) {
    var xhttp;
    var DetalheHabilidade = document.getElementById("DetalheHabilidade1");
    xhttp = new XMLHttpRequest();

    DetalheHabilidade.innerHTML = '<div style="margin:2% 25%"></div>';
    
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            DetalheHabilidade.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "js/Ajax/DetalheHabilidade1.php?ID="+idHabilidade1, true);
    xhttp.send();
}

function mostrarDetalhesHabilidade2(idHabilidade2) {
    var xhttp;
    var DetalheHabilidade = document.getElementById("DetalheHabilidade2");
    xhttp = new XMLHttpRequest();

    DetalheHabilidade.innerHTML = '<div style="margin:2% 25%"></div>';
    
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            DetalheHabilidade.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "js/Ajax/DetalheHabilidade2.php?ID="+idHabilidade2, true);
    xhttp.send();
}