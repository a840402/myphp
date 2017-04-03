<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php print "計算機"?></title>
  </head>
  <body>
    <h2><?php echo "這是一個計算機功能！" ?></h2>
    <div class="computer-wrap">
      <form id="computer" action="index.php" method="post">
        <div class="number-wrap">
          <input type="text" name="text1">
          <select class="control" name="control">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">x</option>
            <option value="4">/</option>
          </select>
          <input type="text" name="text2">
          <input type="submit" name="count" value="計算">
          <div>
            <?php  // here's coding for compute
              $number1 = $_POST[text1];
              $number2 = $_POST[text2];
              $control = $_POST[control];
              if (empty($_POST[text1]) && empty($_POST[text2])) {
                echo "沒有輸入任何數字";
              } else if (empty($_POST[text1]) || empty($_POST[text2])) {
                echo "有一個欄位沒有輸入";
              } else {
                switch ($control) {
                  case '1':
                    $total = $number1 + $number2;
                    echo $total;
                    break;

                  case '2':
                    $total = $number1 - $number2;
                    echo $total;
                    break;

                  case '3':
                    $total = $number1 * $number2;
                    echo $total;
                    break;

                  case '4':
                    $total = $number1 / $number2;
                    echo $total1;
                    break;

                  default:
                    print "你沒有輸入任何數字";
                    break;
                }
              }
             ?>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
