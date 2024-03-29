<?php
  $script_name = $_SERVER["SCRIPT_NAME"];
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/head.php");
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<div class="container">
  <div class="row">
    <div class="col-12">
<?php
$name = isset($_GET["name"]) ? trim($_GET["name"]) : "";
$name_html = htmlspecialchars($name);
print <<< __FORM__
  <form action="$script_name" method="GET">
    商品名: <input type="text" name="name" value="$name_html" />
    <input class="btn btn-primary" type="submit" value="検索" />
  </form>
__FORM__;

print <<< EOT
  <a href="$script_name">
    <button class="btn btn-primary" style="text-decoration: none;">
      リセット
    </button>
  </a>
EOT;
?>
      <a href="addItems.php">
        <button class="btn btn-primary" style="text-decoration: none;">
          登録
        </button>
  		</a>
      <a href="deleteItems.php">
        <button class="btn btn-primary" style="text-decoration: none;">
          削除
        </button>
  		</a>
      <a href="selectChangeItems.php">
        <button class="btn btn-primary" style="text-decoration: none;">
          変更
        </button>
  		</a>
    </div>
<?php
if ($name != "") {
  $stmt = $db->prepare("SELECT * FROM items WHERE name LIKE ? LIMIT 20");
  $stmt->execute(array($name."%"));
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/printMysql.php");
} else {
  $sql = "SELECT * FROM items";
  $stmt = $db->query($sql);
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/printMysql.php");
}
?>
  </div>
</div>

<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/footer.php");
?>
