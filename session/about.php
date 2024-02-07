<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 연습</title>
</head>
<body>
  <h1>about as</h1>
  <p>
    <a href="index.php">index</a>
    <a href="about.php">about</a>
    <a href="logout.php">logout</a>
  </p>

  <?php
  var_dump(isset($_SESSION));

    #$_SESSION 값이 null(비어있는 값)아니고 isset의 값이 있다면
    //if($_SESSION != null && isset($_SESSION) == true){

    #$_SESSION 값이 0보다 크면
    if(count($_SESSION)>0){
      echo "{$_SESSION['city']}시{$_SESSION['gu']}구 값의 세션이 생성되었습니다.<br>";
    }else {
      echo "세션값이 없습니다.";
    }
  ?>
</body>
</html>