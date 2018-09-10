<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AmountDetails</title>
<?php 

use model\amount as modelAmount;
require_once ('C:\xampp\htdocs\sandbox\collection\amount.php');
$amount01 = new modelAmount\jpy($_POST["amount"]);
$detail = $amount01 -> calcBills();
?>
</head>
<body>
<table border="1">
<?php foreach($detail as $i => $val) : ?>
  <?php if($i >= 1000) : ?>
    <p><?php echo $val." bills of ￥".$i; ?></p>
  <?php else : ?>
    <p><?php echo $val." bills of ￥".$i; ?></p>
    <?php endif ; ?>
  <?php endforeach; ?>
  <p><?php echo "-------------------------" ?></p>
  <p><?php echo "TOTAL ￥".$_POST["amount"]; ?></p>
</table>
</body>
</html>