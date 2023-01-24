<?php
// print_r(123);
session_start();
session_unset();
session_destroy();
header("location: ./index.php");
?>