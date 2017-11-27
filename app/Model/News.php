<?php 
	class News extends AppModel{
		var $name = "News";
		 
		public $belongsTo = array(
			'User'=>array(
			'className' =>'User',
			'foreignKey'	=> 'user_id'
			)

		);
		public $actsAs = array(
       'Translate' => array(
            'title', 'content'
        )
    );
		// $this->News->locale  =  'en' ; 
		// $results  =  $this ->Post ->find ( 'first' ,  array ( 
  //   	'conditions'  =>  mảng ( 'News.id'  => $id ) 
		
	}

 ?>