<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php basic</title>
</head>
<body>
<h1>This is the title</h1>
  <?php echo 'hello world'; ?>
  <?php
  // echo 'hello world';
  # echo 'hello world';
  ?>
  <h2>변수 선언</h2>
  <pre>
    $ 변수명 = 값

    * 숫자시작 안됨 / 나머지는 다 됨.
  </pre>

  <?php
  $name = '홍길동';
  echo $name.'님 반갑습니다.' ; #띄어쓰기 상관없이 .으로 문자와 변수를 연결
  ?>
  <hr>
  <?php
  $name = '홍길동';
  echo "$name 님 반갑습니다." ; # 변수와 문자를 연결하고 싶다면 ""로 쓰면 됨. 대신 변수와 글자를 띄어써주기 
  ?>
</body>
</html>