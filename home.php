<?php 
  session_start();
  include "services/database.php";

  if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
  } else {
    $username = "pengguna";
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/home.css" />
    <title>Quiz Ambis</title>
  </head>
  <body>
    <section>
      <header>
        <a href="#home.php" class="logo">QuizAmbis<span>.</span></a>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="quiz.html">Quiz</a></li>
          <li><a href="#">About</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </header>

      <?php
        if ($_SESSION['status'] != "y") {
          header("Location: login.php");
        }
      ?>

      <div class="content">
        <div class="textBox">
          <h2>Halo, <span><?php echo $username?>!</span></h2>
          <p>Raih prestasi dan tingkatkan pemahamanmu melalui kuis-kuis berkualitas di Quiz Ambis. Siapkah kamu menerima tantangan?</p>
          <a href="quiz.html">Try Now</a>
        </div>

        <div class="imgBox">
          <img src="image/gajah1.png" class="quiz" />
        </div>
      </div>
    </section>
  </body>
</html>
