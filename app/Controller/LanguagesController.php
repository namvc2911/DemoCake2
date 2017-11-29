<?php 
	class LanguagesController extends AppController{
			public function eng() {
	    $this->Session->write('Config.language', 'eng');
	    $this->redirect($this->referer());
	}

	public function vn() {
	    $this->Session->write('Config.language', 'vn');
	    $this->redirect($this->referer());
	}
	}


 ?>