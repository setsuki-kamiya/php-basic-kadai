<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food
    {
      // プロパティを定義する
      private $name;
      private $price;
      // メソッドを定義する
      public function show_price(){

        $this->price = 250;
        echo $this->price . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // インスタンス化する
    $food = new  Food('potato', 250);

    //メソッドにアクセスしメソッドを実行
   $food ->show_price();


    // クラスを定義する
    class Animal
    {
      private $name;
      private $weight;
      private $height;
      // メソッドを定義する
      public function show_height(){
        $this -> height =60;
        echo $this -> height.'<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $weight, float $height)
      {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
      }
    }

    // インスタンス化する
    $animal = new Animal('dog', 60, 5000);

    // インスタンス$animalの各プロパティの値を出力する
    $animal->show_height();
    ?>
  </p>
</body>

</html>