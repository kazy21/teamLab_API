<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<?php
if (isset($_GET["name"]) && isset($_GET["description"]) && isset($_GET["price"])) {
  if ($_GET["name"] == "" || $_GET["description"] == "" || $_GET["price"] == "") {
    echo "<p>全ての項目について入力して下さい。</p>"; exit;
  }
  $sql = "INSERT INTO items (name, description, price)". "VALUES(?, ?, ?);";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($_GET["name"],$_GET["description"],$_GET["price"]));
  header("location: /index.php"); exit; // リロードする
}
?>
