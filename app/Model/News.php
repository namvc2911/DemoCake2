<?php 
	class News extends AppModel{
		var $name = "News";
		 
		public $belongsTo = array(
			'User'=>array(
			'className' =>'User',
			'foreignKey'	=> 'user_id'
			)

		);
		
    
		// $this->News->locale  =  'en' ; 
		// $results  =  $this ->Post ->find ( 'first' ,  array ( 
  //   	'conditions'  =>  mảng ( 'News.id'  => $id ) 
		
	}

 ?>