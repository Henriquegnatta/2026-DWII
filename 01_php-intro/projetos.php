<?php 
$nome="Henrique Gnatta";
?>

<?php include 'includes/cabecalho.php';?>
<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    background: #f3f4f6
}


nav a{
    color:white; 
    text-decoration: none;
    margin-right:20px; 
    font-weight:bold;
}
nav a:hover {
    text-decoration: underline;
}
.hero{
    background:linear-gradient(135deg, #3b579d, #2a4080);
    color:white; 
    text-align: center; 
    padding: 60px 20px;
}
.hero h3{
    font-size:2.5em;
    margin-bottom:10px;
  
}

.hero p{
    font-size: 1.2em;
    opacity:0.9;
}
.conteiner{
    max-width: 800px;
    margin:40px auto;
    padding: 0 20px;
}
footer{
    background:#010000;
    color: #6b7280;
    text-align:center;
    padding:20px;
    margin-top: 60px;
    font-size:14px

}
h4{
    margin-left:10px;
}
</style>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos -<?php echo $nome?></title>
</head>
<body>
    <div class="hero">
        <h3>Meus projetos </h3>
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
<?php include 'includes/rodape.php';?>
</body>
</html>