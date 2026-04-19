<?php
/**
 * Arquivo : includes/cabecalho.php
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula : 04 - PHP para Web: Formularios, GET e POST
 * Autor : Henrique Gnatta
 * Conceitos : Modularização, includes, isset(), caminho dinâmico
 * 
 * responsibilidade:gera <meta>, <title>, link para o CSS
 * externo e inclui o <nav class="php">
 * Variaaveis esperadas na página que inclui este arquivo:
 *   $titulo_pagina - String(opcional): texto da aba do navegador 
 * $caminho_raiz - string:caminho relativo até a raiz do rpojeto
 *       Ex: "../" para oaginas em 01_intro-php/ ou 02_formularios/ (um nivel acima)
 */


//isset () verifica se a variavel foi definida antes de usá-la.
//Valor padrão ativa caso a pagina esqueça de declarar $titulo_pagina.

if (!isset($titulo_pagina)) $titulo_pagina = "Portifolio - DWII";
if(!isset($caminho_raiz)) $caminho_raiz = "./";
if(!isset($caminho_raiz)) $caminho_raiz = "";
?>
<?php include 'nav.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo_pagina); ?></title>


<!--<link aponta para o CSS usando $caminho_raiz.
01_php-intro/index.php $caminho_raiz = '../' '../includes/style.css'
02_formularios/contato.php igual: '../includes/style.css'
Assim um unico arquivo CSS serve a todas as pastas.-->

<link rel="stylesheet" type="text/css" href="<?php echo $caminho_raiz; ?>includes/style.css"/>
