<?php
$title = 'home';
require_once('inc/header.php');
#include_once 그냥 한번만 불러오기 -> 에러가 있어도 뒤어꺼 보여줌
#require_once 중요한 데이터 가져올때 (ex 장바구니 등) -> 에러가 있으면 뒤에꺼 안보여줌.
#include_once('inc/header.php');

echo $_SERVER['SERVER_NAME'];

?>
  <p>ABC.com에 오신것을 환영합니다!</p>
  <?php
  include('inc/footer.php');
?>