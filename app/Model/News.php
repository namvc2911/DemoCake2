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
        'Utils.Sluggable' => array(
            'label' => 'title',
            'method' => 'multibyteSlug',
            'separator' => '-'
        )
    );
		// $this->News->locale  =  'en' ; 
		// $results  =  $this ->Post ->find ( 'first' ,  array ( 
  //   	'conditions'  =>  mảng ( 'News.id'  => $id ) 
		
	}

 ?>