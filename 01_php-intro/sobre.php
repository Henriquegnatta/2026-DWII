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
    <p>Olá sou <strong><?php echo $nome; ?> </strong>, Estudante de Tecnico em informatica, no IFPR de Ponta Grossa.</p>
    <p>Meus interesses</p>
    <a href="index.php" style ="color: $3b579d; font-weight:bold;">Voltar ao inicio</a>
</div>
<?php include 'includes/rodape.php';?>
</body>
</html>