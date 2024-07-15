<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way(&$array, $order)
    {
      if ($order === true) {
        // 昇順にソートする
        sort($array);
      } elseif ($order === false) {
        // 降順にソートする
        rsort($array);
      }
    }

    // ソートする配列を宣言する
    $nums = [15, 4, 18, 23, 10];

    // 昇順にソートする
    sort_2way($nums, true);
    echo "昇順にソートします\n<br>";
    foreach ($nums as $num) {
      echo $num . "\n<br>";
    }

    // ソートする配列を再宣言（順序の変更を確認するため）
    $nums = [15, 4, 18, 23, 10];

    // 降順にソートする
    sort_2way($nums, false);
    echo "降順にソートします\n<br>";
    foreach ($nums as $num) {
      echo $num . "\n<br>";
    }
    ?>
  </p>
</body>

</html>