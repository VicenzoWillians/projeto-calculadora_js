<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <title>Calculadora</title>
        <script src="js/calculadora.js" charset="utf-8"></script>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <form name="calc">
            <div id="nome_calc">Calculadora</div>
            
            <input type="text" name="displayAn" id="display-anterior" readonly="readonly">
            <input type="text" name="displayAt" id="display-atual" readonly="readonly">

            <div class="camada">
                <button type="button" value="(" onclick="insert(value)" class="oper" id="camada_left">(</button>
                <button type="button" value=")" onclick="insert(value)" class="oper">)</button>
                <button type="button" value="%" onclick="insert(value)" class="oper">%</button>
                <button type="button" onclick="limpar()" class="oper_clear" id="camada_right">C</button>
            </div>

            <div class="camada">
                <button type="button" value="7" onclick="insert(value)" class="num" id="camada_left">7</button>
                <button type="button" value="8" onclick="insert(value)" class="num">8</button>
                <button type="button" value="9" onclick="insert(value)" class="num">9</button>
                <button type="button" value="/" onclick="insert(value)" class="oper" id="camada_right">÷</button>
            </div>
            
            <div class="camada">
                <button type="button" value="4" onclick="insert(value)" class="num" id="camada_left">4</button>
                <button type="button" value="5" onclick="insert(value)" class="num">5</button>
                <button type="button" value="6" onclick="insert(value)" class="num">6</button>
                <button type="button" value="*" onclick="insert(value)" class="oper" id="camada_right">X</button>
            </div>
            
            <div class="camada">
                <button type="button" value="1" onclick="insert(value)" class="num" id="camada_left">1</button>
                <button type="button" value="2" onclick="insert(value)" class="num">2</button>
                <button type="button" value="3" onclick="insert(value)" class="num">3</button>
                <button type="button" value="-" onclick="insert(value)" class="oper" id="camada_right">-</button>
            </div>
            
            <div class="camada">
                <button type="button" value="." onclick="insert(value)" class="num" id="camada_left">,</button>
                <button type="button" value="0" onclick="insert(value)" class="num">0</button>
                <button type="button" value="+" onclick="insert(value)" class="num">+</button>
                <button type="button" value="=" onclick="calculate(value)" class="oper_equal" id="camada_right">=</button>
            </div>
        </form>
    </body>
</html>