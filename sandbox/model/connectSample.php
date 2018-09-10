<?php
//クラスファイルの読み込み
require_once 'lib/connect.php';
//クラスの生成
$obj=new connect();
//sql文の発行
$table="comment";
$sql2="SELECT * FROM comment WHERE id=:id";
//変数の設定
$test=2;
//クラスの中の関数の呼び出し
$items=$obj->select($table);
$items2=$obj->plural($sql2,$test);

$data = array();
?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>テスト</title>
</head>
<body>
  <?php foreach($items as $item) : ?>
    <p><?php echo $item['id']; ?></p>
    <p><?php echo $item['name']; ?></p>
    <p><?php echo $item['comment']; ?></p>
  <?php endforeach; ?>

<pre>
    <?php print_r($items2); ?>
</pre>

　<?php foreach($items2 as $item) : ?>
    <?php array_push($data,$item) ; ?>
  <?php endforeach; ?>

<pre>
    <?php print_r($data); ?>
</pre>

</body>
</html>