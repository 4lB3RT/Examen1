<?php
require 'quadre.php';
class Tauler{

	private $peces=array();
	private $tipus;
	private $nRows=null;
	private $nCols=null;
	private $Color;


	function __construct($nRows=null,$nCols=null,$tipus,$color){
		$this->tipus = $tipus;
		$this->nRows = $nRows;
		$this->nCols = $nCols;
		$this->color = $color;

		switch ($this->tipus) {
			case '0':
			
				
				for($i=0;$i<$nCols;$i++){
					for($j=0;$j<$nRows;$j++){
						$this->peces[$i][$j]= new quadre('black');
						$this->escac($color);
					}

				}	
				break;
			
			case '1':
				
				break;
		}
	}

	function escac($i,$j){

			$this->peces[$i][$j]->setColor($color);
	
	}

	function show(){

		echo '<body style="background-color:'.$this->color.'"align="center">';
		echo'<table border=1 >';
			for($i=0;$i<$this->nRows;$i++){
				echo"<tr>";
				for($j=0;$j<$this->nCols;$j++){
					$this->peces[$i][$j]->show();
				}
				echo "</tr>";
			}
		}
}