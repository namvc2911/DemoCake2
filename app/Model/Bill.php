<?php 
	class Bill extends AppModel{
		var $name = "Bill";
		public $belongsTo = array(
        'Customer'=>array(
            'className' => 'Customer',
            'foreignKey' => 'customer_id'
        )
    );
	
	
	}
 ?>