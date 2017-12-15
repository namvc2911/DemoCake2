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
        $this->Auth->allow(array('admin_list','admin_review','admin_ajax'));
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
        
        $this->loadModel('User');
        $this->set('users', $this->User->find('all'));
        
        
        
    }
    public function admin_delete($id = null)
    {
        if ($this->request->is('get')) {
            $data = $this->News->find('first', array(
                'conditions' => array(
                    'id = ' . $id
                ),
                'recursive' => -1
            ));
            if (!empty($data)) {
                $this->News->delete($id);
                
                $this->Session->setFlash('Success', 'default', array(
                    'class' => "alert alert-success"
                ));
            } else {
                $this->Session->setFlash('Error', 'default', array(
                    'class' => "alert alert-success"
                ));
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
    public function admin_review($slug = null)
    {
       $counter = $this->News->updateAll(array(
            'News.view' => 'News.view + 1'
        ), array(
            'News.slug' => $slug
        ));
        $detail = $this->News->find('first', array(
            
            'conditions' => array(
                'News.slug' => $slug
            )
        ));
        
        $data2 = $this->News->find('all', array(
            'oder' => array(
                'News.create_at desc'
            ),
            
            'limit' => '10'
        ));
         $this->set('data2', $data2);
        $this->loadModel('User');
        $this->set('users', $this->User->find('all'));
         $this->set(compact('counter', 'detail', 'data2', 'slug'));
        
        
    }
    public function admin_ajax()
    {
         
    }
    public function admin_findajax()
    {
        
        if ($this->request->is('post')) {
            $data = array();
            $this->set('title_for_layout', 'News');
             if ($this->request->data['keyword'] != '') {
                $data = $this->News->find('all', array(
                    'conditions' => array(
                        'News.title Like' => '%' . $this->request->data['keyword'] . '%'
                    ),
                    'recursive' => -1
                ));
            }
            $this->set('data', $data);
        }
    }
    

    public function admin_getdata(){
        $data = $this->News->find('all', array(
            'oder' => array(
                'News.create_at desc'
            ),
            
            'limit' => '10'
        ));
          $this->set('data', $data);
          $result = mysqli_fetch($data);
          $d = array();
          while ($row=mysqli_fetch($result)) {
              $d[]=$row ;
          }
          echo json_encode($d);
    }
}
?>