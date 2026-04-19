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
$nome="Henrique Gnatta";
$pagina_atual = "Projetos";
$caminho_raiz = "../";
?>

<?php include '../includes/cabecalho.php';?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos -<?php echo $pagina_atual?></title>
</head>
<body>
    <div class="hero">
        <h2>Meus projetos </h2>
</div>
<div class="pop">
<h4>1-Projeto:Sistema de cardapio online
    <br>
    Projeto feito juntamente com specer cenko tivemos a proposta de desenvolver um projeto em python juntamente com banco de dados,esse isistema tem uma tela para o gerente poder ocntrolar oque á no cardapio com ele podendo fazer um crud nos pordutos dele e o cliente tinha um login que poderia entrar ver os itens disponiveis no cardapio
    <p>
    2-Projeto:Criado um banco de dados do zero com os tema leis de transito,feito com spencer e jeferson e criado para definir e classiificar cada lei 
</p>
    
    3-Projeto futuro:Desenvolver um Mod para minecraft usando Java<br>
    Prendo criar um mod rpg juntamente com amigos feito em java feito par adiversão e aprendizado

</h4>
</div>
<?php include '../includes/rodape.php';?>
</body>
</html>