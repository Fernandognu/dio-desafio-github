<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Segundo Site em PHP! Woohoo</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#accordion" ).accordion();
    } );
    $( function() {
    $( "input" ).checkboxradio();
     } );
    </script>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Historia da Internet</h1>
    <div id="accordion">
        <h3>Primeiro Website</h3>
        <div>
            <p>
            O primeiro website do mundo foi lançado por ele em 6 de agosto de 1991. O conteúdo simplesmente descrevia a forma de funcionamento dessa nova forma de conexão. O domínio era http://info.cern.ch, e até hoje está no ar em sua forma original.
            </p>
        </div>
        <h3>Primeiro Dominio Criado</h3>
        <div>
            <p>
            O Symbolics.com continua no ar até hoje e ostenta o título de domínio mais velho da web.

            O site foi registrado no dia 15 de março de 1985. Em anos de internet, o Symbolics.com pode ser considerado um verdadeiro Matusalém.
            </p>
        </div>
        <h3>Primeira Compra Realizada na Internet</h3>
        <div>
            <p>
            Um CD de Sting (Ten Summoner's Tales). A transação ocorreu a 11 de agosto de 1994 e foi feita através de uma tecnologia que permitiu encriptar os dados do cartão de crédito. O CD custou 12,48 dólares, mais os custos de envio.
            </p>
        </div>
        <h3>Primeira Linguagem usada na Web</h3>
        <div>
            <p>
            Basicamente, The Project era constituído por um bloco de HTML simples, sem recursos de estilização, imagens ou qualquer recurso dinâmico. A página era recheada de links que encaminham visitantes para respostas rápidas a perguntas como “o que existe por aí?”, e “como posso ajudar?”.
            </p>
        </div>
    </div>
    <div class="widget">
        <h1>Você Conhece essas informacões?</h1>
        <h1>Vamos Testar!</h1>
        
        <h2>Qual a Primeira Compra Realizada na Internet?</h2>
        <fieldset>
            <legend>Selecione a Resposta Correta: </legend>
            <label for="radio-1">Livro</label>
            <input type="radio" name="radio-1" id="radio-1">
            <label for="radio-2">CD</label>
            <input type="radio" name="radio-1" id="radio-2">
            <label for="radio-3">Jogo</label>
            <input type="radio" name="radio-1" id="radio-3">
        </fieldset>
        
        <h2>Qual a Primeira Linguagem utilizada na Web?</h2>
        <fieldset>
            <legend>Selecione a Resposta Correta: </legend>
            <label for="checkbox-1">CSS</label>
            <input type="checkbox" name="checkbox-1" id="checkbox-1">
            <label for="checkbox-2">JavaScript</label>
            <input type="checkbox" name="checkbox-2" id="checkbox-2">
            <label for="checkbox-3">Html</label>
            <input type="checkbox" name="checkbox-3" id="checkbox-3">
            <label for="checkbox-4">C++</label>
            <input type="checkbox" name="checkbox-4" id="checkbox-4">
        </fieldset>
        
        <h2>Qual o Primeiro Website?</h2>
        <fieldset>
            <legend>Selecione a Resposta Correta: </legend>
            <label for="checkbox-nested-1">youtube.com
            <input type="checkbox" name="checkbox-nested-1" id="checkbox-nested-1">
            </label>
            <label for="checkbox-nested-2">google.com
            <input type="checkbox" name="checkbox-nested-2" id="checkbox-nested-2">
            </label>
            <label for="checkbox-nested-3">facebook.com
            <input type="checkbox" name="checkbox-nested-3" id="checkbox-nested-3">
            </label>
            <label for="checkbox-nested-4">symbolics.com
            <input type="checkbox" name="checkbox-nested-4" id="checkbox-nested-4">
            </label>
        </fieldset>
    </div>
</body>
</html>