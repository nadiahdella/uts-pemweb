<?php 

include 'zodiak-oop.php';

class Zodiak_Match extends Zodiak{
	public $match;

	public function __construct($zodiak, $match){
		$this->zodiak = $zodiak;
		$this->match = $match;
	}

	public function __toString(){
		return $this->zodiak . " cocok dengan " . $this->match . "<br><br>";
	}
}

$match1 = new Zodiak_Match("Aries", "Libra");
$match2 = new Zodiak_Match("Gemini", "Capricorn");
$match3 = new Zodiak_Match("Aquarius","Leo");

echo $match1;
echo $match2;
echo $match3;

?>