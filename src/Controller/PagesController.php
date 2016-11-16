<?php


namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;



class PagesController extends AppController
{
  	public $uses = array('User');

   public function home(){
       $this->viewBuilder()->layout(false);
       $this->set(array(
			'design' => 'home'
			));
    }
    public function login(){
       $this->viewBuilder()->layout(false);
       $this->set(array(
     'design' => 'login'
     ));
    }
    public function contact(){
       $this->viewBuilder()->layout(false);
       $this->set(array(
     'design' => 'contact'
     ));
    }
    public function agent(){
       $this->viewBuilder()->layout(false);
       $this->set(array(
     'design' => 'agent'
     ));
    }
    public function property(){
       $this->viewBuilder()->layout(false);
       $this->set(array(
     'design' => 'property'
     ));
    }
    public function propertyup(){
       $this->viewBuilder()->layout(false);
       $this->set(array(
     'design' => 'propertyup'
     ));
    }
    public function newreg(){
       $this->viewBuilder()->layout(false);
       $this->set(array(
     'design' => 'newreg'
     ));
    }
    public function processreg(){
    $this->autoRender = false;

    $fname = $this->request->data('fname');
		$lname = $this->request->data('lname');
		$address = $this->request->data('address');
    $uname = $this->request->data('uname');
		$email = $this->request->data('email');
    $pass = $this->request->data('pass');
    $who = $this->request->data('whos');
    $time = time();
    $shuf =  str_shuffle("qwertyuioplk");
		$shuffle = $shuf.$time;


    if ($this->request->is('post')) {

			$data = $this->request->data;
			$data['firstName'] = $fname;
			$data['lastName'] = $lname;
			$data['email']= $email;
      $data['password']= sha1($pass);
      $data['address']= $address;
      $data['vcode']= $shuffle;
      $data['throttle']= $who;

      debug($data);
      $this->User->save($data);
      $this->User->create();



		}



    }

}
