<?php
$cookieName = 'city';
$cookieValue = 'seoul';

setcookie($cookieName, $cookieValue , time()+60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>쿠키생성연습</title>
</head>
<body>
  <h1>쿠키 연습</h1>
  <h2>쿠키 출력</h2>
  <?php
    echo "{$cookieName}라는 쿠키의 값은 {$_COOKIE[$cookieName]}";
  ?>
</body>
</html>