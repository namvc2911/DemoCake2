<?php 
	class BillDetail extends AppModel{
		var $name = "BillDetail";
		public $belongsTo = array(
			'Bill'=>array(
				'className' =>'Bill',
				'foreignKey'=>'bill_id'
			)

		);
		public $belongsTo = array(
			'Product' => array(
				'className' =>'Product',
				'foreignKey'=>'Product_id'
			)

		);
	}
 ?>