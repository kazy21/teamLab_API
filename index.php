<?php
  $currentDir = dirname(__FILE__);
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/head.php");
  require_once($_SERVER["DOCUMENT_ROOT"] . "/set_mysql.php");
?>

<?php
$sql = "SELECT * FROM items";
$stmt = $db->query($sql);
?>

<div class="container">
  <div class="row">
<?php
foreach ($stmt as $row) {
  print<<<EOT
    <div class="col-12 col-md-6 col-lg-4 product-info">
      <div class="row">
        <span class="col-12 name">{$row['name']}</span>
        <span class="col-12 description">{$row['description']}</span><br>
        <span class="col-12 price">{$row['price']}円</span>
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
