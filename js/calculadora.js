function insert(valor){
    var inserir=document.calc.displayAt.value+=valor;

    if(valor=="%" || valor=="/" || valor=="*" || valor=="-" || valor=="+"){
        var display2=document.calc.displayAt.value;
        document.calc.displayAn.value=display2;
    }
}

function limpar(){
    document.calc.displayAt.value="";
    document.calc.displayAn.value="";
}

function calculate(valor){
    if(valor=="="){
        var display2=document.calc.displayAt.value;
        display2+="=";
        document.calc.displayAn.value=display2;
    }
    
    var resultado=document.calc.displayAt.value;
    document.calc.displayAt.value=eval(resultado);
}