<?php
session_start();
if (isset($_SESSION['login']))
{
session_destroy();
header("location:Authentification.html");

exit();
}
else
header("location:index.html");
?>