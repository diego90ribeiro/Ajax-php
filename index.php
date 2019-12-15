<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/toastr.min.css">
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/index.js" type="text/javascript"></script>
        <script src="js/toastr.min.js" type="text/javascript"></script>
        <title>requisição de pagina com AJAX</title>
    </head>
    <body>
        <h1>Toast</h1>
        <form id="formulario">
            <input type="text" name="nome" id="nome" autocomplete="off" placeholder="Digite seu Nome">
            <input type="text" name="idade" id="idade" autocomplete="off" placeholder="Digite sua Idade">
            <input type="button" id="salvar" name="salvar" value="Salvar">
        </form>
        <div id="resposta"><!--div para retornar Toast--></div>
    </body>
</html>
