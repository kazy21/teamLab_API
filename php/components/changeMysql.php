<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<?php
  $sql = "UPDATE items SET name = ?, description = ?, price = ? WHERE id = ?";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($_POST["name"], $_POST["description"], $_POST["price"], $_GET["id"]));
  header("location: /index.php"); exit; // リロードする
?>
