<?php 
	foreach($data as $item) {
		echo $item['News']['title'];
		echo "<br/>";
	 echo $this->Html->link('Review',array('controller'=>'news','action'=>'review',$item['News']['slug']), array('class' => 'btn btn-primary'));

		echo "<br>";
	}
?>