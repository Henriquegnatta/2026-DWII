<?php 
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

<body style="font-family:Arial,sans-serif;margin :0; backfround:#f43f4f6;">
    <?php include 'includes/cabecalho.php';?>
    <div style="max-width:800px; margin:40px auto; padding: 0 20px;">
    <h1 style="color: # 3b579d">Sobre mim</h1>
    <p>Olá sou <strong><?php echo $nome; ?> </strong>, Estudante de Tecnico em informatica, no IFPR de Ponta Grossa. Nacido em 04/07/2009 atualmente 3° ano do do IFPR 
 pretendo seguir na area de TI, tenho mais facilidade na parte do back-end nos projetos</p>
    <p>Meus interesses</p>
    Gosto de passar meu tempo Jogando e assistindo<br>
    <a href="index.php" style ="color: $3b579d; font-weight:bold;">Voltar ao inicio</a>
</div>
<?php include 'includes/rodape.php';?>
</body>
</html>