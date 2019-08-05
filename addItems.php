<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/head.php");
  require_once($_SERVER["DOCUMENT_ROOT"] . "/setMysql.php");
?>

<div class="container">
  <div class="row">
    <form action="addMysql.php" method="GET">
      <div class="col-12">商品タイトル：<input type="text" name="name" /></div>
      <div class="col-12">説明文：<input type="text" name="description" /></div>
      <div class="col-12">価格：<input type="text" name="price" /></div>
      <div class="col-12"><input type="submit" value="登録" /></div>
    </form>
  </div>
</div>

<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/footer.php");
?>
