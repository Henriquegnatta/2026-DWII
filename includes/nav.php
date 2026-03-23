<?php 
/**
 * Arquivo :includes/nav.php
 * Diciplina: Desenvolvimento Web II (2026-DWII)
 * Aula : 04 - PHP para Web:Formularios, GET E POST 
 * Autor : Henrique Gnatta 
 * Conceitos: Menu dinâmico, operador ternário, $caminho_raiz
 * 
*/ 
 if(!isset($pagina_atual)) $pagina_atual = "";
 if(!isset($pagina_atual)) $pagina_atual = "../";
 
 function menu_class($item,$atual){
  return ($item == $atual) ? 'class="ativo"': '';
 }
?>
<nav>
  <a href="<?php echo $caminho_raiz; ?>01_php-intro/index.php"
  <?php echo menu_class("inicio",$pagina_atual); ?>>
  🏠Inicio
</a>
<a href="<?php echo $caminho_raiz; ?>01_php-intro/sobre.php"
<?php echo menu_class("sobre", $pagina_atual); ?>>
👤Sobre
</a>
<a href ="<?php echo $caminho_raiz; ?>01_php-intro/projetos.php"
<?php echo menu_class("Projetos", $pagina_atual);?>>
🚀Projetos
</a>

<a href="<?php echo $caminho_raiz; ?>02_formularios/contato.php"
<?php echo menu_class("contato", $pagina_atual); ?>>
📩Contato
</a>
<a href="<?php echo $caminho_raiz; ?>03_pdo/index.php"
<?php echo menu_class("Catalogo", $pagina_atual);?>>
📥Catalogo
</a>

</nav>

