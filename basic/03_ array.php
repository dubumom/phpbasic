<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>배열</title>
</head>
<body>
  <h1>배열</h1>
  <pre>
    $배열명 = array();
    $배열명[0] = 값;
    echo $배열명[0];
  </pre>
  <?php
    $langs = array(); #빈배열 생성
    $langs[0] = 'html';
    $langs[1] = 'css';
    $langs[2] = 'javascript';
    $langs[3] = 'php';

  echo $langs[0];
  var_dump($langs[0]); #값의 원형을 보고 싶을 때는 var_dump로 확인
  ?>
  <hr>
  <pre>
    $배열명 = array(값,값,값);
    특정값의 유무를 알려주는 함수 : isset(대상)
  </pre>
  <?php
    $backs = array('php','asp','jsp');
    echo $backs[1];

    if(isset($backs[3])){
      echo $backs[3];
    } else {
      echo '$backs 배열에는 인덱스 3번째 값이 없다';
    }
  ?>

  <hr>
  <pre>
    for(조기값, 조건, 증감){
      echo  반복할일
    }
    배열의 개수
    count(배열명)
  </pre>
  <ul>
    <!-- <li>html</li>
    <li>css</li>
    <li>javascript</li> -->
  </ul>
  <?php
      $langs = array('html','css','javascript');

    for($i = 0; $i <count($langs); $i++){
      echo '<li>'. $langs[$i] . '</li>';
    }
  ?>
  <hr>
  <h2>foreach</h2>
  <pre>
    foreach(배열명 as 각원소를 대변할 변수 명) {
      echo  반복할 일;
    }
  </pre>
  <?php
    foreach($langs as $lang) {
      echo '<li>'. $lang . '</li>';
    }
  ?>
  <h2>연관배열(associative array)</h2>
  <pre>
    배열명 = array(); // 빈배열 생성
    배열명['키 값'] = 값;
    배열명['키 값'] = 값;
    배열명['키 값'] = 값;

    foreach(배열명 as )
  </pre>
  <?php
    $fronts = array();
    $fronts['html'] = 1;
    $fronts['css'] = 2;
    $fronts['javascript'] = 3;

    echo $fronts['html'];
    # echo $fronts[0]; -> 출력 불가
  ?>

  <hr>
  <?php
    //html은 난이도 1입니다... 

    foreach($fronts as $front){
      echo '<li>'. $front . '</li>';
    }

    foreach($fronts as $key => $front){
      echo '<li>'. $key.'은 난이도'.$front . '입니다.</li>';
    }
  ?>
  <hr>
  <h2>값 출력하기</h2>
  <?php
  echo $langs[0];
  var_dump($langs); //원형 그대로
  print_r($langs); //인간 친화적
  print_r($fronts);
  ?>
  <pre>
    <?php
    print_r($langs);
    print_r($fronts);
    ?>
  </pre>
</body>
</html>