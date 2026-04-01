<?php 
/**
* Diciplina: Desenvolvimento Web II(DWII)
 * Aula: 06 - Autenticação com sessões e controle de acesso
 * Arquivo: 04_sessoes/auth.php
 * Autor: Henrique Gnatta
 */
/**
 * requer_login()
 * Verifica se há sessoes para login e encerra
 * chamar no topo de qualquer pagina protegia
 */
function requer_login(): void
{
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    if(!isset($_SESSION['usuario'])){
        header('Location: login.php');
        exit;
    }
}
/**
 * usuario_logado()
 * Retorna o nome do usuario da sessão ou string vazia.
 */
function usuario_logado(): string
{
    return $_SESSION['usuario'] ?? '';
}
?>