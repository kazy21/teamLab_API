<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/php/components/setMysql.php");
?>
<?php
// 画像データ取得
$sql = "SELECT picture FROM items WHERE name = ?";
$stmt = $db->prepare($sql);
$stmt->execute(array($_GET["name"]));
$result = mysql_query($sql, $dbLink);
$row = mysql_fetch_row($result);

// 画像ヘッダとしてjpegを指定（取得データがjpegの場合）
header("Content-Type: image/jpeg");

// バイナリデータを直接表示
echo $row[0];
?>
