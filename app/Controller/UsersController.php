<?php
class UsersController extends AppController
{
    var $uses = array('User');
    var $layout = "admin";
    
    public function beforeFilter()
    {
        
        parent::beforeFilter();
        $this->Auth->allow(array('admin_facebook','admin_list','admin_google','admin_add'));
        
    }
    public function admin_login()
    {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash('Username hoặc pass sai');
            }
        }
        
    }
    public function admin_logout()
    {
        $this->redirect($this->Auth->logout());
        $this->redirect(array(
            'action' => 'login'
        ));
    }
    
    public function admin_list()
    {
        //Lay du lieu trong table users
        $array_user = $this->User->find('all', array(
            'conditions' => array(
                'id > 0'
            ),
            'recursive' => -1
        ));
        //đưa dữ liệu lấy được qua view bằng biến users
        $this->set('users', $array_user);
    }
    public function admin_delete($id = null)
    {
        if ($this->request->is('get')) {
            $data = $this->User->find('first', array(
                'fields' => array(
                    'id',
                    'name'
                ),
                'conditions' => array(
                    'id' => $id
                ),
                'recursive' => -1
            ));
            if (!empty($data)) {
                $this->Session->setFlash('Success');
                $this->User->delete($id);
            } else {
                $this->Session->setFlash('Error');
            }
            $this->redirect(array(
                'action' => 'list'
            ));
        }
    }
    
    public function admin_edit($id = null)
    {
        if ($this->request->is('post') || $this->request->is('put')) {
            //print_r($this->request->data);exit();
            $this->User->id = $id;
            $this->User->set(array(
                'date_updated' => date('Y:m:d H:i:s')
            ));
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Success', 'default', array(
                    'class' => "alert alert-success"
                ));
                $this->redirect(array(
                    'action' => 'list'
                ));
            }
        } else {
            $this->User->id      = $id;
            $this->request->data = $this->User->read(); //đọc thông tin user với $id, gán vào request->data hiển thị view
        }
    }
    public function admin_add()
    {
        $this->set('title_for_layout', 'Add user');
        if ($this->request->is('post') || $this->request->is('put')) {
            $now = date('Y:m:d H:i:s');
            $this->User->set(array(
                'date_created' => $now
            ));
            $this->User->set(array(
                'date_updated' => $now
            ));
            if ($this->User->save($this->request->data)) {
              
                $this->redirect(array('controller'=>'users',
                    'action' => 'list'
                ));
            }
            
            
            //nếu request ajax
            
        }
    }
    public function admin_facebook()
    {
      
      if($this->request->is('post') || $this->request->is('put')){
            $now = date('Y:m:d H:i:s');
            $info = $this->request->data;

            $this->User->set(array(
            'name'=>$info['name'],
            'email'=>$info['email'],
            
            'facebook_id'=>$info['id'],
            'date_created'=>$now,
            'date_updated'=>$now

        ));
        if($this->User->save($this->request->data)){
            $this->Session->setFlash('Success', 'default', array(
                    'class' => "alert alert-success"
                ));
             $this->redirect(array(
                    'action' => 'list'
                ));
              
        }
      }
      
        
    }
    public function admin_google(){
        if($this->request->is('post')|| $this->request->is('put')){
              $now = date('Y:m:d H:i:s');
            $info = $this->request->data;
            debug($info);die;
            $this->User->set(array(
                'name'=>$info['ig'],
                'email'=>$info['U3'],
                'id'   =>$info['Eea'],
                 'date_created'=>$now,
                'date_updated'=>$now
            ));

            if($this->User->save()){
                $this->Session->setFlash('Success', 'default', array(
                    'class' => "alert alert-success"
                ));
             $this->redirect(array(
                    'action' => 'list'
                ));

            }

        }

    
            

    }   
    
}

?>