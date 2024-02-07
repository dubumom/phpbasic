<?php
  $title = 'login';
  include('inc/header.php');
  include('inc/function.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($email == false){
      $status = '이메일 형식으로 입력하세요!';
    }
    output($_POST);
  }

/*
  #사이트 접속한 사용자 환경
  echo $_SERVER['HTTP_USER_AGENT'] ;

  #사이트 도메인 (순수한 사이트 주소)
  echo $_SERVER['SERVER_NAME'];

  #현재페이지의 주소에서 도메인 제외(요청된 주소 전체 알 수 있음)
  echo $_SERVER['REQUEST_URI'];

  #현재페이지의 주소에서 도메인과 넘겨지는 값 제외 (현재 파일을 알 수 있음)
  echo $_SERVER['PHP_SELF'];
*/
?>
<h2>Login</h2>
<p>로그인해주세요</p>
<form action="" method="POST" novalidate>
  <p>
    <label for="email">email</label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="name">name</label>
    <input type="name" name="name" id="name">
  </p>

  <button>login</button>
</form>
<div class="error">
  <?php
    if(isset($status)){
      echo $status;
    }
  ?>
</div>


<?php
  include('inc/footer.php');
?>