<?php

if(!isset($_SESSION))
{
    session_start();
}

if(!isset($_SESSION['id']))
{
   die("Acesso negado! <p><a href=\"index.php\">Clique aqui para fazer login</a></p>");
}
?>