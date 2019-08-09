# teamLab事前課題
teamLabインターンの事前課題
- 商品タイトル
- 説明文
- 価格
以上の情報をもつ商品データの登録・検索・変更・削除を行うAPIをWebインターフェースとして実装している（商品画像については、画像の扱い方が分からず、実装できませんでした）。

## ディレクトリ構成
```
teamLab_API
┣━ css
┣━ php
┃  ┗━ components
┣━ index.php
┣━ addItems.php
┣━ deleteItems.php
┣━ selectChangeItems.php
┣━ changeItems.php
┣━ reset.php
┗━ readme.md
```

## 各ディレクトリおよびファイルの説明
### css
cssファイルを格納するためのディレクトリです。
#### bootstrap.min.css
Bootstrap4を使用するためのcssファイル

#### common.css
自分で設定したcssを保存しておくためのcssファイル

### php
#### components
htmlのヘッダやフッターなど、複数のぺージに適用されるファイルを格納します。

### index.php
APIのメイン画面。ここでは、登録された商品情報の一覧を閲覧することができます。また、検索を行うことで、閲覧したい商品情報を絞り込むことができます。

### addItems.php
登録したい商品の「商品タイトル・説明文・価格」を入力し、商品情報を登録することができます。

### deleteItems.php
削除したい商品情報を選択することで、商品情報を削除することができます。

### selectChangeItems.php
商品情報で「商品タイトル・説明文・価格」のいずれかについて変更したい部分がある場合、該当する商品情報を選択します。

### changeItems.php
商品情報の変更を行うことができます。

### reset.php
データベースの情報を一度リセットします。

## MySQLについて
`reset.php`や`php > components > setMysql.php`内に記述されている通り、データベースのテーブル内では、商品情報のid、picture、name、description、priceについて格納される（JSONによる取扱は間に合いませんでした）。
