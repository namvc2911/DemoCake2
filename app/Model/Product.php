<?php 
	class Product extends AppModel{
		var $name = "Product";
		public $belongsTo = array(
			'Type_Product'=>array(
			'className' =>'TypeProduct',
			'foreignKey'	=> 'type_id'
			)

		);
		
	}

 ?>