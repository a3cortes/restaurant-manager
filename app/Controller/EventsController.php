<?php


class EventsController extends AppController
{

	function beforeFilter()
	{
		parent::beforeFilter();
		$this->loadModel("Setting");
	}


	function index()
	{
		$this->set("events", $this->Event->find('all' , array('order'=>"Event.event_date", 'conditions' => array("Event.active"=>1, "Event.published"=>1 ))));
		$this->set("title_for_layout", "Shine Cafe, Bar and Lounge. Events");
	}



	function admin_index()
	{
/* 		$this->set('data', $this->Event->findById($id));

		$this->paginate = array(
				'conditions' => array("Event.active"=>1 , "Event.event_id"=>$id),
				'limit' => 10,
				"order"=>"Event.booking_date DESC"

		); */
		$this->set("events", $this->Event->find('all' , array('conditions' => array("Event.active"=>1 ))));
	}




	function admin_edit($id)
	{
		$this->set('data', $this->Event->findById($id));


		if(!empty($this->request->data))
		{
			$this->Event->save($this->request->data);

			$this->Session->setFlash("Event event updated" , 'default' , array("class" => "alert-box success"));


			$this->redirect('/admin/Events');
		}

	}


	function admin_delete()
	{
                $this->autoRender = false;
                if($this->request->data['id'] > 0)
		{
			$this->Event->id = $this->request->data['id'];
			$this->Event->saveField("active", 0);
			$this->Session->setFlash("Event delete" , 'default' , array("class" => "alert-box success"));
			echo true;
		}else
		{
			echo "No";
		}
	}

	function admin_add()
	{
		if(!empty($this->request->data))
		{

			$this->Event->save($this->request->data);
			$this->Session->setFlash("Event event added" , 'default' , array("class" => "alert-box success"));
			$this->redirect('/admin/Events');
		}
	}
}