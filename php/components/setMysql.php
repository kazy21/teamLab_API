<?php
//Connect Database
$db = new PDO("mysql:host=localhost;dbname=items;charset=utf8","root","");
//Make Table
$create_query = <<< __SQL__
  CREATE TABLE IF NOT EXISTS items (
    id          INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    picture     BLOB,     /* 商品画像 */
    name        TEXT,     /* 商品タイトル */
    description TEXT,     /* 説明文 */
    price       INTEGER   /* 価格 */
  );
__SQL__;
//Exec SQL
$result = $db->exec($create_query);
if ($result === false) {
    print_r($db->errorInfo()); exit;
}
?>
