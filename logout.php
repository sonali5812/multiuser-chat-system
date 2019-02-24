<?php
session_start();
session_destroy();
//unset(name);


header("location:index.php");
?>