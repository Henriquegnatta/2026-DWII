<?php
/**
 * Diciplina: Desenvolvimento Web II(DWII)
 * Aula: 06 - Autenticação com sessões e controle de acesso
 * Arquivo: 04_sessoes/painel.php
 * Autor: Henrique Gnatta
 */
session_start();
$logado = isset($_SESSION['usuario']);
$titulo_pagina = 'Pagina  pública';
$caminho_raiz = '../';
$pagina_atual = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>

</head>
<body>
    <div class="container" style="text-align:center;">
 <h1 class="titulo-secao">🌐Pagina Publica</h1>
 <p>Este conteudo é visivel para qaulquer visitante, sem login</p>
 <?php if ($logado): ?>
 <p> Olá, <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong>! Você está autenticado</p> 
 <a href="painel.php"
 style="background:#3ba34a; color:white; padding:10px 24px; border-radius:6px; text-decoration:none; font-weight:bold;"> Ir para o painel</a> 
<?php else: ?>
    <a href="login.php" style="background: #3b579d; color:white; padding:10px 24px; border-radius:6px; text-decoration:none; font-weight:bold;">🔐 Acesso a area restrita
</a>
<?php endif; ?>
</div>
<?php require_once __DIR__ . '/../includes/rodape.php';?>


</body>
</html>