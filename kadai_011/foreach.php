<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題011</title>
</head>

<body>
   <p>
       <?php
       // 連想配列に値を代入する
       $vege_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
      
       // 連想配列キーと値を1つずつ順番に出力する
      foreach ($vege_data as $key => $value) {
      echo "{$key}：{$value}<br>";
      }

       ?>
