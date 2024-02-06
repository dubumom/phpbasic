<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>조건문</title>
</head>
<body>
  <h1>조건문</h1>
  <?php
  $result = 1<3;
  echo $result; # 1->true, 아무것도 안나옴->false
  ?>
  <hr>
  <pre>
    if(조건){
      참이면 할일
    } else{
      거짓이면 할일
    }
  </pre>
  <?php
  $n1 = 1;
  $n2 = 3;
  if($n1<$n2){
    echo $n1 . '은' . $n2 . '보다 작다';
  } else{
    echo $n1 . '은' . $n2 . '보다 크다';
  }
  ?>

  <h2>논리 연산자</h2>
  <pre>
    a && b -> a,b 둘다 참일 때 결과가 참
    a || b -> a,b 둘중 하나라도 참일 때 결과가 참
  </pre>
  <?php
  if(1>3 && 2<5){
    echo '조건은 참이다';
  } else {
    echo '조건은 거짓이다';
  }
  ?>
  <hr>
  <?php
  if(1>3 || 2<5){
    echo '조건은 참이다';
  } else {
    echo '조건은 거짓이다';
  }
  ?>

  <pre>
    a && b -> and
    a || b -> or
  </pre>
  <?php
  if(1>3 and 2<5){
    echo '조건은 참이다';
  } else {
    echo '조건은 거짓이다';
  }
  ?>
  <hr>
  <?php
  if(1>3 or 2<5){
    echo '조건은 참이다';
  } else {
    echo '조건은 거짓이다';
  }
  ?>
  <hr>
  <pre>
  xor -> 논리식이 서로 다르면 참을 반환함. (XOR 연산)


  </pre>
  <?php
  if(1>3 xor 2<5){ // 거짓, 참 -> 참
    echo '조건은 참이다';
  } else {
    echo '조건은 거짓이다';
  }
  ?>
</body>
</html>