
<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed);
        $stmt->fetch();

        if (password_verify($password, $hashed)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
        } else {
            echo "Invalid credentials!";
        }
    } else {
        echo "No such user!";
    }

    $stmt->close();
    $conn->close();
}
?>
