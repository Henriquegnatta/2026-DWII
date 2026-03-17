<?php 
/**
 * Arquivo: 01_php-intro/index.php (exemplo - aplique o padrão)
 * Diciplinas: Desenvolvimento Web e introdução ap PHP
 * Aula  : 03 - Arquitetura Web e introdução ao PHP
 * Autor:  Henrique Gnatta
 * 
 * 
 * 
 * 
*/
$nome ="Henrique Gnatta";
$Profissao ="Estudante de Tecnologia";
$curso ="Tecnico em Informartica";
$pagina_atual = "inicio";
$caminho_raiz = "../";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio -<?php echo $nome; ?></title>
</head>

<?php include '../includes/cabecalho.php'; ?>


<body>
  

<div class="hero">
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $Profissao; ?>
    <?php echo $curso; ?></p>
</div>
<div class="conteiner">
    <h2>Bem-vindo ao meu portfolio</h2>
    <p>Este pagina foi gerada pelo PHP em:<strong><?php echo date("d/m/Y \à\s H:i:s"); ?></strong></p>
</div>
<?php include '../includes/rodape.php';?>
</body>
</html>