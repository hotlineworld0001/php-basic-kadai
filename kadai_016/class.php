
<?php

//クラス Food
class Food{
	
	//Food プロパティ 名前、価格
	private $name;
	private $price;
	
	//初期値設定
	public function __construct($name,$price){
		$this->name = $name;
		$this->price = $price;
	}
	
	//価格表示
	public function show_price(){
		echo $this->price.'<br>';
	}
}

//クラス Animal
class Animal{
	
	//Animal プロパティ 名前、高さ、重さ
	private $name;
	private $height;
	private $weight;
	
	//初期値設定
	public function __construct($name,$height,$weight){
		$this->name = $name;
		$this->height = $height;
		$this->weight = $weight;
	}
	
	//高さ表示
	public function show_height(){
		echo $this->height.'<br>';
	}
}

//ポテト作成
$potato = new Food('potato',250);

//犬作成
$dog = new Animal('dog',60,5000);

print_r($potato);
echo '<br>';
print_r($dog);
echo '<br>';


echo $potato->show_price();
echo $dog->show_height();

?>