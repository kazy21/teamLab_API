<pre><?php
// データベースへの接続
try {
    $db = new PDO("mysql:host=localhost;dbname=items;charset=utf8","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (PDOException $e) {
    echo "Connect Error".$e->getMessage();
    exit;
}
// テーブルを作成する
$create_query = <<< __SQL__
    CREATE TABLE IF NOT EXISTS items (
        picture     BLOB,     /* 商品画像 */
        name        TEXT,     /* 商品タイトル */
        description TEXT,     /* 説明文 */
        price       INTEGER   /* 価格 */
    );
__SQL__;
$result = $db->exec($create_query); // SQLを実行
if ($result === false) { // エラーがあれば表示
    print_r($db->errorInfo()); exit;
}
$db->exec("DELETE FROM items"); // 以前挿入したことがあれば一度初期化
// データを挿入
$idata = array(
    array("name"=>"バナナ", "description"=>"黄色い果物", "price"=>150),
    array("name"=>"イチゴ", "description"=>"赤い果物", "price"=>300),
    array("name"=>"イクラ", "description"=>"鮭のタマゴ", "price"=>270),
    array("name"=>"カツオ", "description"=>"高知県名産", "price"=>980),
    array("name"=>"タマゴ", "description"=>"高たんぱく", "price"=>210)
);
foreach ($idata as $i) {
    // 挿入する値をクォートする
    $name = $db->quote($i["name"]);
    $description = $db->quote($i["description"]); // 文字列にクォート('...')を足す
    $price = intval($i["price"]);
    $result = $db->exec(
        "INSERT INTO items (name,description,price)".
        "VALUES($name, $description, $price)"); // SQLを実行
    if ($result === FALSE) { // エラーがあれば表示
        print_r($db->errorInfo());
    }
}
// データを表示
$stmt = $db->query("SELECT * FROM items");
while ($row = $stmt->fetch()) {
    $name = $row["name"];
    $description = $row["description"];
    $price = $row["price"];
    echo " $name ($description) → {$price}円\n";
}
