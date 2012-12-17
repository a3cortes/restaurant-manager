<?php 

class UsersController extends AppController 
{

    public function beforeFilter() {
        parent::beforeFilter();
    	$this->Auth->allow('logout');
    }

    public function index() {
    
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }


    public function add() 
    {

        if ($this->request->is('post')) 
        {
            $this->User->create();
			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
			
            if ($this->User->save($this->request->data)) 
            {
                $this->Session->setFlash(__('The user has been saved'), 'default' , array("class" => "alert-box success"));
                $this->redirect(array('action' => 'index'));
            } else 
            {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    
    
	public function login() 
	{
		$this->layout = "admin";
		if($this->request->is("post"))
		{
			
			
			if ($this->Auth->login()) 
			{
				if($this->Session->read("Auth.User.active") == 0)
				{
					$this->Auth->logout();
					$this->Session->setFlash("Your account is no longer active please contact the restaurant owner" , 'default' , array("class" => "alert-box alert"));
				}
				else
				{
					$this->User->id = $this->Session->read("Auth.User.id");
			     	$this->User->saveField("lastlogin" , date("Y-m-d H:i:s"));
					$this->Session->write("AUser", $this->Auth->user());
					
			     	$this->redirect("/admin/users/dashboard");
			     	$this->Session->delete('Message.flash');
				}
		      
		      
		    } else 
		    {
		      $this->Session->setFlash(__('Invalid username or password, try again'), 'default' , array("class" => "alert-box alert"));
		    }
		}
	}
	
	public function logout() {
	    $this->redirect($this->Auth->logout());
	}   
	
	//admion
	function admin_dashboard()
	{
		$this->loadModel("MenuItem");
 		$this->loadModel("Reservation");
		$this->set("recentMenu", $this->MenuItem->find('all', array("limit" => 5, "order"=>'MenuItem.modified DESC')));
		$this->set("reservations", $this->Reservation->find('all', array("limit" => 5, "order"=>'Reservation.booking_date ASC', "conditions" =>array("Reservation.active" => 1))));
	}
	
	function admin_index() 
	{
		$this->set("data",  $this->User->find('all' , array("conditions"=>array("active"=>1))));
	}
	
	function admin_edit($id) 
	{
		$this->set("data",  $this->User->find('first' , array("conditions"=>array("id"=>$id))));
		
		if(!empty($this->request->data))
		{
			$this->User->id = $this->request->data['User']['id'];
			
			$this->request->data = Set::filter($this->request->data);
			
			$this->User->save($this->request->data);
			$this->Session->setFlash("User updated", 'default' , array("class" => "alert-box success"));
			
			$this->redirect("/admin/users");
		}
	}
	
	function admin_add() 
	{
		if(!empty($this->request->data))
		{
				
			$this->User->save($this->request->data);
			$this->Session->setFlash("User added", 'default' , array("class" => "alert-box success"));
				
			$this->redirect("/admin/users");
		}
	}
	
	function admin_delete($id) 
	{
		$this->User->id = $id;
		$this->User->saveField("active", 0);
		
		$this->Session->setFlash("User deleted", 'default' , array("class" => "alert-box success"));
		
		$this->redirect("/admin/users");
	}
	
	
}

