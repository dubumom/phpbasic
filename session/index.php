<?php
  #제일 상단에 적어야 작동함.
  session_start();
  $_SESSION['city'] = 'seoul';
  $_SESSION['gu'] = 'jongro';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>세션 연습</title>
</head>
<body>
  <h1>세션 연습</h1>
  <p>
    <a href="index.php">index</a>
    <a href="about.php">about</a>
    <a href="logout.php">logout</a>
  </p>
  <h2>세션 출력</h2>
  
  <p>
    <?php
      echo "{$_SESSION['city']}시{$_SESSION['gu']}구 값의 세션이 생성되었습니다.<br>"
    ?>
    <?php
      print_r($_SESSION);

      $_SESSION = array();
      $_SESSION['city'] = 'seoul';
      $_SESSION['gu'] = 'jongro';

      foreach($_SESSION as $session) {
        echo "<li> {$session} </li>";
      }

      foreach($_SESSION as $key => $session){
        echo "<li> {$key} = {$session} </li>";
      }
    ?>
  </p>
</body>
</html>