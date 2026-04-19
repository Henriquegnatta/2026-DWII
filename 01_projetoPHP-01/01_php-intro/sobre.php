<?php 
/**
 * Arquivo: 01_php-intro/index.php (exemplo - aplique o padrão)
 * Diciplinas: Desenvolvimento Web e introdução ap PHP
 * Aula  : 03 - Arquitetura Web e introdução ao PHP
 * Autor:  Henrique Gnatta
 * 
*/
$nome ="Henrique Gnatta";
$Pagina_atual="Sobre";
?>
<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre -<?php echo $nome; ?> </title>
   
</head>

<body>
    <?php include '../includes/cabecalho.php';?>
    
        
    <h1>Sobre mim</h1>
    <p>Olá sou <strong><?php echo $nome; ?> </strong>, Estudante de Tecnico em informatica, no IFPR de Ponta Grossa. Nacido em 04/07/2009 atualmente 3° ano do do IFPR 
 pretendo seguir na area de TI, tenho mais facilidade na parte do back-end nos projetos</p>
    <p>Meus interesses</p>
    Gosto de passar meu tempo Jogando e assistindo<br>
    <a>Voltar ao inicio</a>

<?php include '../includes/rodape.php';?>
</body>
</html>