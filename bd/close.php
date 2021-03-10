<?php
session_start();
unset($_SESSION["s_envio"]);
session_destroy();
header("Location: ../index.php");
?>