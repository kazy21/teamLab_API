<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<?php
  $sql = "DELETE FROM items WHERE id = ?";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($_GET["id"]));
  header("location: /index.php"); exit; // リロードする
?>
