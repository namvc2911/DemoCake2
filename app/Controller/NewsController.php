<?php
class NewsController extends AppController
{
    var $uses = "News";
    var $layout = "admin";
    // var $components = array( 'RequestHandler' );
    // var $helpers = array('Html','Ajax','Javascript');
    public function beforeFilter()
    {
        parent::beforeFilter();
    }
    public function admin_list()
    {
        $this->set('title_for_layout', 'News');
         $data = $this->News->find('all', array(
            'conditions' => array(
                'id > 0'
            ),
            'recursive' => -1
        ));

        $this->set('data', $data);


        
    }
   public function admin_delete($id = null){
        if($this->request->is('get')){
            $data = $this->News->find('first', array(
                'conditions'=>array('id = '.$id),
                'recursive'   =>-1
            ));
            if(!empty($data)){
                $this->News->delete($id);
            
                $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
            }else{
                $this->Session->setFlash('Error','default',array('class'=>"alert alert-success"));
            }
            $this->redirect('list');
        }
    }
    
    public function admin_edit($id = null)
    {
        if ($this->request->is('post') || $this->request->is('put')) {
            //print_r($this->request->data);exit();
            $this->News->id = $id;
            $this->News->set(array(
                'date_updated' => date('Y:m:d H:i:s')
            ));
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash('Success', 'default', array(
                    'class' => "alert alert-success"
                ));
                $this->redirect(array(
                    'action' => 'list'
                ));
            }
        } else {
            $this->News->id      = $id;
            $this->request->data = $this->News->read(); //đọc thông tin user với $id, gán vào request->data hiển thị view
        }
    }
    public function admin_add()
    {
        $this->set('title_for_layout', 'Add user');
        if ($this->request->is('post') || $this->request->is('put')) {
            $now = date('Y:m:d H:i:s');
            $this->News->set(array(
                'date_created' => $now
            ));
            $this->News->set(array(
                'date_updated' => $now
            ));
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash('Success', 'default', array(
                    'class' => "alert alert-success"
                ));
                $this->redirect(array(
                    'action' => 'list'
                ));
            }
        }
    }
    public function admin_review($id = null){
        // $this->News->bindTranslation(array('News.title' => 'titleTranslation'));
        // $this->News->bindTranslation(array('News.content' => 'titleTranslation'));

        $this->set('title_for_layout', 'Review');
        $detail = $this->News->find('first', array(
            
            'conditions'=>array('News.id'=>$id),
        ));
        //$detail =  $this->News->find('first',array('conditions'=>array('News.id'=>$id)));
        if(empty($detail['News']['view'])){
            $detail['News']['view'] = 0;
        }
        $view = $detail['News']['view'];
        $view = $view + 1;
        $this->News->id = $id;
        $data['News']['view'] = $view;
        if ($this->News->save($data)) {
          
        }

        $this->set('detail', $detail);
        $this->set('title_for_layout', 'News');
          $data2 = $this->News->find('all',array(
            'oder'=>array('create_at'=>'desc'),

            'limit'=>'10'));


    
        $this->set('data2', $data2);
         $data3 = $this->News->find('all',array(
           'oder'=>array('create_at'=>'asc'),

            'limit'=>'10'));


    
        $this->set('data3', $data3);



    }
    public function admin_ajax(){
        if($this->request->is('post')){
            $this->set('title_for_layout', 'News');
            $data = $this->News->find('all', array(
            'conditions' => array(
                'News.title Like'=>'%'. $this->request->data['keyword'] . '%',
            ),
            'recursive' => -1
            ));
            $this->set('data',$data);
        }
    }
    public function admin_findajax(){
         if($this->request->is('post')){
            $this->set('title_for_layout', 'News');
            $data = $this->News->find('all', array(
            'conditions' => array(
                'News.title Like'=>'%'. $this->request->data['keyword'] . '%',
            ),
            'recursive' => -1
            ));
            $this->set('data',$data);
        }
    }
}

?>