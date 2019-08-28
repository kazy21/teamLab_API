<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/head.php");
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<?php
$sql = "SELECT * FROM items";
$stmt = $db->query($sql);
?>

<div class="container">
  <div class="row">
    <a href="index.php">
      <button class="btn btn-primary" style="text-decoration: none;">
        商品情報一覧に戻る
      </button>
    </a>
    <span class="col-12">変更を行いたい項目を選択してください。</span>
<?php
foreach ($stmt as $row) {
  print<<<EOT
    <div class="col-12 col-md-6 col-lg-4 product-info">
      <div class="row">
        <div class="col-12">
          <a href="changeItems.php?id={$row['id']}&name={$row['name']}&description={$row['description']}&price={$row['price']}">
            <div class="contents">
              <div class="row contents-inside">
                <span class="col-12 name">{$row['name']}</span>
                <span class="col-12 description">{$row['description']}</span><br>
                <span class="col-12 price">{$row['price']}円</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
EOT;
}
?>
  </div>
</div>

<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/footer.php");
?>
