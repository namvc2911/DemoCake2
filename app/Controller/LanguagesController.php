<?php 
	class LanguagesController extends AppController{
			public function admin_eng() {
	    $this->Session->write('Config.language', 'eng');
	    $this->redirect($this->referer());
	}

	public function admin_vn() {
	    $this->Session->write('Config.language', 'vn');
	    $this->redirect($this->referer());
	}
	}


 ?>