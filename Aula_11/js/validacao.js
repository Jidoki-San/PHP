function validacao(){
    let nome = document.getElementById("i_nome");
    let quantidade = document.getElementById("i_quantidade");
    let preco = document.getElementById("i_preco");

    estilo(nome);
    estilo(quantidade);
    estilo(preco);
}

function estilo(input){
    let sty_1 = "2px solid red";
    let sty_2 = "1px solid gray";

    if(!input.checkValidity()){
        return input.style.border = sty_1;
    }
    return input.style.border = sty_2;
}