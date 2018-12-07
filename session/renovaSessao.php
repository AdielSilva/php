<?php

require_once("netSession.php");
require_once("exemplo-01.php");

session_id('utf8q2sjk7iunekrc9oi97fr64');

session_regenerate_id(); //renova sessão

echo session_id();

var_dump($_SESSION);
?>