
<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login_form.html");
    exit();
}
?>

<h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
<a href="logout.php">Logout</a>
