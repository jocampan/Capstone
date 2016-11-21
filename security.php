<?php
session_start();

if (!isset($_SESSION['userSession'])) {
 header("Location: ../login/index.php");
}

?>