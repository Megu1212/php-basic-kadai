<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題016</title>
</head>

<body>
   <p>
       <?php

       // クラスを定義する
       class Food {

       // プロパティを定義する
        private $name;
        private $price;

       //コンストラクタ
        public function __construct (string $name,int $price){
          $this -> name = $name;
          $this -> price = $price; 
        }
      
       // メソッドを定義する
       public function show_price() {
          return $this->price ;
        }    
       }

       // クラスを定義する
       class Animal {

        // プロパティを定義する
         private $name;
         private $height;
         private $weight;
 
        //コンストラクタ
         public function __construct (string $name,int $height,int $weight){
           $this -> name = $name;
           $this -> height = $height;
           $this -> weight = $weight; 
         }
 
        // メソッドを定義する
        public function show_height() {
           return $this->height ;
         }         
 
      }

       // メソッドにアクセスして実行する
       $potato = new Food ('potato', 250);
       $dog = new Animal ('dog', 60, 5000);   
       
       // インスタンスの各プロパティの値を出力する
       print_r($potato);
       echo '<br>';
       //echo $potato -> show_price() ;

      print_r($dog);
      echo '<br>';
      echo $potato -> show_price() ;
      echo '<br>';
      echo $dog -> show_height() ;
      
       ?>
   </p>
</body>

</html>