<pre><?php
//Connect Database
try {
    $db = new PDO("mysql:host=localhost;dbname=items;charset=utf8","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (PDOException $e) {
    echo "Connect Error".$e->getMessage();
    exit;
}
// Create Table if NOT exists
$create_query = <<< __SQL__
    CREATE TABLE IF NOT EXISTS items (
        id          INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
        picture     BLOB,     /* 商品画像 */
        name        TEXT,     /* 商品タイトル */
        description TEXT,     /* 説明文 */
        price       INTEGER   /* 価格 */
    );
__SQL__;
$result = $db->exec($create_query); //exec SQL
if ($result === false) {
    print_r($db->errorInfo()); exit;
}
$db->exec("DELETE FROM items");
//Insert Data
$idata = array(
    array("name"=>"バナナ", "description"=>"黄色い果物", "price"=>150),
    array("name"=>"イチゴ", "description"=>"赤い果物", "price"=>300),
    array("name"=>"イクラ", "description"=>"鮭のタマゴ", "price"=>270),
    array("name"=>"カツオ", "description"=>"高知県名産", "price"=>980),
    array("name"=>"タマゴ", "description"=>"高たんぱく", "price"=>210)
);
foreach ($idata as $i) {
    $name = $db->quote($i["name"]);
    $description = $db->quote($i["description"]);
    $price = intval($i["price"]);
    $result = $db->exec(
        "INSERT INTO items (name,description,price)".
        "VALUES($name, $description, $price)");
    if ($result === FALSE) {
        print_r($db->errorInfo());
    }
}
header("location: /index.php"); exit; //reload
