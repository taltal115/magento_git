<?php 

class TutsPlus_Demo_Model_Product {

	public $f_name = "tal";
	public $l_name = "shitrit";

	public function __construct() {
		echo $this->f_name.' '.$this->l_name.'.';
	}

} 

?>