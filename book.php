<?php
class Books{
	private $price;
	private $title;
	function __construct($par1,$par2){
		$this->price=$par1;
		$this->title=$par2;
	}
	function setPrice($par){
		$this->price=$par;
	}
	function setTitle($par){
		$this->title=$par;
	}
	function getPrice(){
		return $this->price;
	}
	function getTitle(){
		return $this->title;
	}
}
class Novel extends Books{
	var $publisher;
	function setPublisher($par){
		$this->publisher=$par;
	}
	function getPublisher(){
		return $this->publisher;
	}
}
$physics=new Books;
$math=new Books;
$chemistry=new Books(5.1,"Advanced Chemistry");
$physics->setTitle("Physics for High School");
$math->setTitle("Algebra");
$physics->setPrice(3.4);
$math->setPrice(4.5);
//$chemistry->setTitle("Advanced Chemistry");
$books=array($physics,$math,$chemistry);
foreach($books as $book):
	echo ($book->getTitle())."<br/>";
	echo ($book->getPrice())."<br/>";
endforeach;
echo $book->getTitle();
const pi=3.14;
$pi=3.45;
echo pi;
?>
