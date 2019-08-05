<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/setMysql.php");
?>

<?php
  // データベースに挿入
  $sql = "DELETE FROM items WHERE name = ?";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($_GET["name"]));
  header("location: /index.php"); exit; // リロードする
?>
