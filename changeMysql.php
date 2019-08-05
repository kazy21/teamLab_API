<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/setMysql.php");
?>

<?php
  $sql = "UPDATE items SET name = ?, description = ?, price = ?";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($_GET["name"],$_GET["description"],$_GET["price"]));
  header("location: /index.php"); exit; // リロードする
?>
