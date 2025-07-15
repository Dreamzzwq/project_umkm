<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<center>
<h1>Hai Hai, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
<a href="logout.php">Logout</a>
</center>
