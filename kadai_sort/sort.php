<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
 /* 
  $nums = [15, 4, 18, 23, 10 ];
    sort($nums);
    echo"昇順にソートします。<br>";
    foreach($nums as $num) {
        echo $num . '<br>';
    }

   rsort ($nums);
   echo "降順にソートします。<br>";
   foreach($nums as $num) {
    echo $num . '<br>';
   }
    */
    
  //$nums = [15, 4, 18, 23, 10 ];

    function sort_2way($array , $order) {
        $nums = [15, 4, 18, 23, 10 ];

    if($order){
        sort($nums);
        echo "昇順にソートします。<br>";
        foreach($nums as $num) {
        echo $num . '<br>';
        }
    } else {
        rsort($nums);
        echo "降順にソートします。<br>";
        foreach($nums as $num) {
        echo $num . '<br>';
        }
    }
    }

    sort_2way($array , true);
    sort_2way($array , false);

    ?>
    </p>
</body>

</html>