<?php
session_start();
session_unset(); // limpa as variáveis
session_destroy(); // destrói a sessão
header("Location: index.php"); // redireciona pra onde quiser
exit;
?>