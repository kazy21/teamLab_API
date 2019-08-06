<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/head.php");
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<div class="container">
  <div class="row">
    <form action="/php/components/addMysql.php" method="GET" class="col-12">
      <div class="col-12">
        商品タイトル<br>
        <input type="text" name="name" />
      </div>
      <div class="col-12">
        説明文<br>
        <textarea name="description" rows="8" cols="80" class="input-description"></textarea>
      </div>
      <div class="col-12">価格<br>
        <input type="text" name="price" />
      </div>
      <div class="col-12">
        <input class="btn btn-primary" type="submit" value="登録" />
      </div>
    </form>
  </div>
</div>

<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/footer.php");
?>
