<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/head.php");
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<div class="container">
  <div class="row">
    <a href="index.php">
      <button class="btn btn-primary" style="text-decoration: none;">
        商品情報一覧に戻る
      </button>
    </a>
<?php
  $name = isset($_GET["name"]) ? trim($_GET["name"]) : "";
  $description = isset($_GET["description"]) ? trim($_GET["description"]) : "";
  $price = isset($_GET["price"]) ? trim($_GET["price"]) : "";
  $id = isset($_GET["id"]) ? trim($_GET["id"]) : "";
  $name_html = htmlspecialchars($name);
  $description_html = htmlspecialchars($description);
  $price_html = htmlspecialchars($price);
  $id_html = htmlspecialchars($id);
  print <<< EOT
    <form action="/php/components/changeMysql.php?id=$id_html" method="POST" class="col-12">
      <div class="col-12">
        商品タイトル<br>
        <input type="text" name="name" value="$name_html" />
      </div>
      <div class="col-12">
        説明文<br>
        <textarea name="description" rows="8" cols="80" class="input-description">$description_html</textarea>
      </div>
      <div class="col-12">
        価格<br>
        <input type="text" name="price" value="$price_html" />
      </div>
      <div class="col-12">
        <input class="btn btn-primary" type="submit" name="submit" value="変更" />
      </div>
    </form>
EOT;
?>
  </div>
</div>

<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/footer.php");
?>
