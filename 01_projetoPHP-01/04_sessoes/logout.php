<?php
/**
 * Diciplina: Desenvolvimento Web II(DWII)
 * Aula: 06 - Autenticação com sessões e controle de acesso
 * Arquivo: 04_sessoes/logout.php
 * Autor: Henrique Gnatta
 */
session_start();

session_unset();

session_destroy();

header('location: login.php');
exit;
?>