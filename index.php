<?php 
/**
 * 
 * Arquivo:index.php (raiz do repositorio 2026-DWII)
 * Diciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 - PHP para Web:Formulario, GET e POST
 * Autor: Henrique Gnatta
 * Conceitos: Ponto de entrada, array associativo, forach, date(),htmlspecialchars()
 * 
 * 
 * Hub de navegação - exibido quando o servidor raiz: 
 * php -S localhost:8000
 *
 * Poor estar fora das subpastas,este arquivo NÃO usa os 
 * includes compartilhados(Cabecalho.php, nav.php, rodape.php).
 * Cabeçalho, nav e rodape são definidos inline aqui.
 */

$nome ="Henrique Gnatta";
$subtitulo ="Repositorio 2026- Desenvolvimento Web II";
//Array associativo: cada aula é um bloco [...] com suas chaves.
//Para adicionar novass aulas:copie um bloco e edite os valores.
$aula = [
    [
        "numero" => "00",
        "nome" =>"Apresentação Pessoal",
        "descricao" => "Pagina esterica com HTML e CSS - foto de perfil e layout responsivo.",
        "link" =>"00_apresentacao/index.html",
        "icone" =>"💻",
        "cor"=>"#6b7280",
        "conceitos"=>"HTML semântico, CSS Flexbox, responsividade", ],
        [
            "numero" => "03",
            "nome" =>"Portifolio Dinâmico com PHP",
            "descricao"=>"Mini-site de portifolio com variaveis,includes e menu dinâmico.",
            "link"=>"01_php-intro/index.php",
            "icone"=>"🐘",
            "cor"=> "#3b579d",
            "conceitos"=>"Variaveis, echo, includes, foreach, operador ternario",],
            [
            "numero" => "04",
            "nome" =>"Formulario de Contato",
            "descricao"=>"Formulario com validação no servidor, proteção XSS e padrão PRG.",

            "link"=>"02_formularios/contato.php",
            "icone"=>"📫",
            "cor"=> "#3ba34a",
            "conceitos" => '$_POST, validação, htmlspecialchhars(),header() +exit', ],];
            ?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'includes/cabecalho.php'; ?>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($subtitulo); ?></title>
    <!--
    index.php está na RAIZ (2026-DWII/).
    A pasta includes/ tambem está na raiz - mesmo nivel.
    Por isso o caminho é direto: "includes/style.css"
    (sem "../" - esse prefixo só aparece nas subpastas).
    arquivo separado - sem nenhum css embutido aqui.

    -->
   

</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($nome); ?></h1>
        <p><?php echo htmlspecialchars($subtitulo); ?></p>
</header>

<div class="conteiner">
    <div class="box-info" style="margin-top: 0;">
        <h3>Como executar este repositorio</h3>
        <p style="font-size: 14px;color:#374151;">
            Suba o servidor PHP na <strong>raiz</strong> para acessar todas as aulas: </p>
            <div style="background: #010000;
            color:#a8e6a3;
            padding:10px 16px;
            border-radius:6 px;
            margin-top:10px;
            margin-left:100px;
            font-family:'Courier New',monospace;
            font-size:13px;
            line-height:1.8;">
            cd ~/workpaces/2026-DWII<br>php -S localhost:8000
            </div>
            <p style="font-size:13px;
            color:#6b7280;
            margin-top:8px;">
            Esta página é o hub de navegação. Use os botões abaixo para acessar cada projeto.
</p></div>
    <!-- Listagem das aulas-- foreach percorre o array $aulas -->
     <h2 class="secao">📁 Projetos por Aula</h2>

     <?php foreach ($aula as $aula): ?>
<main>
        <!-- border-left-color dinâmica: cada aula tem sua cor definida no array Isso evita criar um classe CSS diferente para cada card.
     -->
        <div class="card-aula" style="border-left-color:<?php echo $aula['cor']; ?>;">
        <div class="icone"><?php echo $aula['icone']; ?></div>
        <div class="conteudo">
            <span class="badge">Aula <?php echo htmlspecialchars($aula['numero']) ?> </span>
            <h3 style="color: <?php echo $aula ['cor']; ?>;">
            <?php echo htmlspecialchars($aula['nome']); ?></h3>
            <p><?php echo htmlspecialchars($aula['descricao']); ?></p>
            <span class="conceitos">
                🔑<?php echo htmlspecialchars($aula['conceitos']); ?>
     </span><br>
     <a href="<?php echo htmlspecialchars($aula['link']); ?>"
     class="btn"
     style="background:<?php echo $aula['cor']; ?>;">
     Abrir 
     </a>
     </div>
     </div>
     </main>
     <?php endforeach; ?>

     <!-- TIMESTAMP -- demonstra date() - igual ao index.php do portifolio -->
    <p style="text-align: right;
    font-size:13px;
    color:#9ca3af;
    margin-top:8px;">
    ⏱ Gerado em:<?php echo date("d/m/Y \á\s H:i:s"); ?>
     </p>
     <div>
        <!--RODAPÉ -- mesmo padrão visual do rodape.php das subpastas -->
        <footer>
            <?php echo htmlspecialchars($nome); ?>
            &copy; <?php echo date("Y"); ?>
            | Desenvolvimento com PHP| IFPR - Ponta grossa
     </footer>









</body>
</html>