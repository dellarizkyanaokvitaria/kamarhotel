<?php
session_start();
session_destroy();
header("Location: http://localhost/kamarhotel/login/index.php");
exit;
?>