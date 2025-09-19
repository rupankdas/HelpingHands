<?php
session_start();
session_destroy();
header("Location: login.html"); // or wherever your login page is
exit();
?>