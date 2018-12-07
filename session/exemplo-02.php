<?php

require_once("netSession.php");

session_unset();

echo $_SESSION['nome'];

session_destroy();
?>