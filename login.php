<?php 
session_start();
    include "services/database.php";

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "y";

            header("Location: home.php");
        } else {
            $error = "Username atau password salah!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Ambis</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
    <div class="card">
        <h2>Login</h2>
        <h4>Quiz Ambis</h4>
        <?php if (isset($error)) : ?>
            <div class="alert" style="color: red; text-align: center" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <label for="">Username</label>
            <input type="text" id="username" placeholder="Username" name="username">
            <label for="">Password</label>
            <input type="password" id="password" placeholder="Password" name="password">
            <button type="submit" name="login">Login</button>
        </form>
        <p>Belum memiliki akun? <a href="signup.php">Sign Up</a></p>
    </div>
</div>
</body>
</html>