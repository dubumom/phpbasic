<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>상품검색</title>
</head>
<body>
  <h1>상품검색</h1>
  <form action="get-input.php" novalidate><!--novalidate: html차원의 유효성검사 없애기-->

    <input type="hidden" name="area" value="green">

    <div>
      <label for="email"></label>
      <input type="email" name="email" id="email" placeholder="email">
    </div>
    <div>
      <label for="category"></label>
      <input type="text" name="category" id="category" placeholder="category">
    </div>
    <div>
      <label for="productid"></label>
      <input type="text" name="productid" id="productid" placeholder="productid">
    </div>
    <div>
      <label for="limit"></label>
      <input type="text" name="limit" id="limit" placeholder="limit">
    </div>

    <button>검색</button>
  </form>
</body>
</html>