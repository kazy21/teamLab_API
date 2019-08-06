<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/head.php");
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<div class="container">
  <div class="row">
<?php
  $name = isset($_GET["name"]) ? trim($_GET["name"]) : "";
  $description = isset($_GET["description"]) ? trim($_GET["description"]) : "";
  $price = isset($_GET["price"]) ? trim($_GET["price"]) : "";
  $name_html = htmlspecialchars($name);
  $description_html = htmlspecialchars($description);
  $price_html = htmlspecialchars($price);
  print <<< EOT
    <form action="/php/components/changeMysql.php" method="GET">
      <div class="col-12">商品タイトル：<input type="text" name="name" value="$name_html" /></div>
      <div class="col-12">説明文：<input type="text" name="description" value="$description_html" /></div>
      <div class="col-12">価格：<input type="text" name="price" value="$price_html" /></div>
      <div class="col-12"><input class="btn btn-primary" type="submit" value="変更" /></div>
    </form>
EOT;
?>
  </div>
</div>

<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/footer.php");
?>
