<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>
<body>

<p>
  <?php
  // Foodクラスの作成
  class Food{
    // プロパティの定義
    private $name;
    private $price;

    public function __construct(string $name, int $price){
      $this -> name = $name;
      $this -> price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price(){
      echo $this -> price . '<br>';
    }
  }

  // インスタンス化
  $apple = new Food('りんご', 100);

  print_r($apple);

  echo '<br>';


  // Animalクラスの作成
  class Animal{
    // プロパティの定義
    private $name;
    private $height;
    private $weight;

   public function __construct(string $name, int $height, int $weight){
    $this -> name = $name;
    $this -> height = $height;
    $this -> weight = $weight;
   }

  //  heightの値を出力するメソッド
    public function show_height(){
    echo $this -> height . '<br>';
    }
  }
  // インスタンス化

   $cat = new Animal('ねこ', 50, 3000);

   print_r($cat);

   echo '<br>';


   $apple -> show_price();

   $cat -> show_height();
    

  ?>
</p>
  
</body>
</html>