<?php
/**
 * Arquivo:03_pdo/includes/cab_pdo.php
 * Diciplina: Desenvolvimento Web II (2026-DWII)
 * Aula:05 - PHP + MariaDB: persistencia de dados via PDO
 * 
 * 
 * 
 * Proxy local que reutiliza o cabecalho.php global da raiz/ includes/__DIR__ = 03_pdo/includes/ -> ../../includes/ = <raiz>
 */


if(!isset($titulo_pagina)) $titulo_pagina = "Catalogo de Tecnologias";
if(!isset($pagina_atual)) $pagina_atual = "";
$caminho_raiz = '../';

include __DIR__ . '/../../includes/cabecalho.php';

?>