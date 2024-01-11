<?php
session_set_cookie_params(86400,"/");
session_start();
$_SESSION['token'] = md5(microtime());
echo $_SESSION['token'];
?>