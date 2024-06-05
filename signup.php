<?php 
    include "services/database.php";

    if (isset($_POST['signup'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "INSERT INTO user (username, password) VALUES ('$username','$password')";
        
        if ($db->query($sql)) {
            header("Location: login.php");
        } else {
            $error = "Data anda tidak terekam!";
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
            <h2>Sign Up</h2>
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
                <button type="submit" name="signup">Sign Up</button>
            </form>
            <p>Sudah punya akun? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>