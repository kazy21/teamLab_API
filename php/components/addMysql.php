<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>

<?php
  $sql = "INSERT INTO items (name, description, price) VALUES (?, ?, ?)";
  $stmt = $db->prepare($sql);
  $stmt->execute(array($_POST["name"], $_POST["description"], $_POST["price"]));
  header("location: /index.php"); exit; //reload
?>
