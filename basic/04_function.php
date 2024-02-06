<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>함수</title>
</head>
<body>
  <h1>함수</h1>
  <h2>지역변수 전역변수</h2>
  <?php
  function sum($a, $b){
    $result = $a + $b;
    return $result; // 지역변수
  };
  $total = sum (54564646, 546546);
  //echo $result; -> 지역변수라 출력 안됨.
  ?>

  <h2>변수 출력 함수</h2>
  <?php
    $langs = [
      'html',
      'css',
      'javascript'
    ];
    print_r($langs);
  ?>

  <?php

  function output($val){
    echo'<pre>';
    print_r($val);
    echo '</pre>';
  }
  output($langs);


  ?>

  <pre>
    <?php
      print_r($langs);
    ?>
  </pre>
</body>
</html>