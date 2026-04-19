<?php 
/**
 *Arquivo : includes/rodape.php
  *Disciplina: Desenvolvimento Web II (2026-DWII) 
  *Aula : 04 - PHP para Web: Formularios, GET e POST
  *Autor : Henrique Gnatta        
  *Conceitos : Modularização, date(), isset(), fallback defensivo 
 */

  $autor = isset($nome) ? htmlspecialchars($nome) : "Portifolio";
  ?>

<footer>
  <?php echo $autor;?>
  &copy; <?php echo date("Y");?>
  | Desenvolvimento com PHP
  |IFPR - Ponta Grossa
</footer>