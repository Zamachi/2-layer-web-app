
<?php
define("VREDNOSTNOVCA", 0.5);
class Bill{
	
	private $novac;
	private $vrednost;
	public function __construct(){
		
		$this->novac=$_POST['kolicina'];
		$this->vrednost=VREDNOSTNOVCA;
		echo $this->toString();
	}
	
	public function calculateAmount(){
		
		return floatval(substr($this->novac,1)/$this->vrednost);
		
	}
	
	public function getNovac(){
		
		return $this->novac;
	}
	
	private function toString(){
		
		return "<br>Ova musterija je: ".date('d/m/Y H:i:s')." narucila ".($this->calculateAmount())." novcica u iznosu od: ".($this->getNovac()).".<br>";
		
	}
	
	
	
}




?>

<html>

	<body>
	
		<?php
			
			$racun=new Bill();
			
			
		
		?>
		
	</body>

</html>