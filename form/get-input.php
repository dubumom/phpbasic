
<h1>get input</h1>
<?php
  $category = $_GET['category'];
  $product_id = $_GET['productid'];
  $email = filter_input(
    INPUT_GET,
    'email' ,
    FILTER_VALIDATE_EMAIL
  );
  $limit = filter_input(
    INPUT_GET,
    'limit' ,
    FILTER_VALIDATE_INT
  );


  if($email == false){ #이메일에 메일형식이 넘어오지 않는다면
    die();
  }
  if($limit == false){ #리미트에 숫자가 넘어오지 않는다면
    #die(); 실행하지 말아라
    $limit = 10;
  }

  echo "category: {$category} <br> productid:{$product_id} <br> limit: {$limit} <br> email: {$email}";
?>
