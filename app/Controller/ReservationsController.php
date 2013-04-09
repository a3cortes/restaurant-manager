<?php 

App::uses('CakeEmail', 'Network/Email');
App::uses('CakeTime', 'Utility');

class ReservationsController extends AppController 
{
	public  $helpers = array('Html', 'Form', 'Js');//, 'Cache'
	
	function beforeFilter() 
	{
		parent::beforeFilter();
		$this->loadModel("Setting");
		$this->loadModel("Event");
	}
	
	
/* 	function index()
	{
		$this->autoRender = false; 
		debug($this->Booking->find('all'));
		
	} */
	
	function newbooking()
	{
		
		$this->set("events", $this->Event->find('all' , array('conditions' => array("Event.active"=>1 ))));
		$this->set("title_for_layout", "Shine Cafe, Bar and Lounge. Make a reservation.");

		$r = $this->Event->get_booking_events();
		
		foreach($r as $event)
		{
			$data[$event['Event']['id']] = $event['Event']['name'];
		}
		
		$this->set('data',$data);
		
		if(!empty($this->request->data))
		{
 			//debug($this->request->data);
			//add seconds.
			
			$this->request->data['Reservation']['booking_date'] = date("Y-m-d", strtotime($this->request->data['Reservation']['booking_date']))
			. " " . $this->request->data['Reservation']['booking_time_hour']
			. ":" . $this->request->data['Reservation']['booking_time_min'] .":00";
			
			if($this->Reservation->save($this->request->data['Reservation']))
			{
				$this->send_admin_email($this->request->data);
				
				$this->Session->setFlash("Thank you, reservation sent." , 'default' , array("class" => "alert-box success"));	
				$this->redirect("/reservations/newbooking");
				exit;
			}
			else
			{
				//$this->Session->setFlash("Reservation request not sent, Please call us on 9561 8810");
			}
			//debug($this->request->data['Booking']);die(); 
		}
		
	}
	

	
	function admin_index() 
	{
		  $this->paginate = array(
        			'conditions' => array("Reservation.active"=>1, "DATE(Reservation.booking_date) >= CURRENT_DATE" ),
        			'limit' => 10,
					"order"=>"Reservation.booking_date ASC"
		  		
    );
		$this->set("reservations", $this->Paginate('Reservation'));
		$this->set("reservationsToday", $this->Reservation->find('all',array("conditions"=>array("DATE(Reservation.booking_date) = CURRENT_DATE", "Reservation.active"=>1))));
		$this->set("reservationsTomorrow", $this->Reservation->find('all',array("conditions"=>array("DATE(Reservation.booking_date) = CURRENT_DATE + INTERVAL 1 DAY", "Reservation.active"=>1))));
		$this->set("events", $this->Event->find('all',array("conditions"=>array("Event.active"=>1))));
	}
	
	
	function admin_details() 
	{
		$res = $this->Reservation->find('first', array("conditions"=>array("Reservation.id"=> $this->request->params['pass'][0])));
		
		$this->set("reservation", $res);
		$this->set("reservationsOnday", $this->Reservation->find('all',array("conditions"=>array("Reservation.id !=".$res['Reservation']['id'] ,"DATE(Reservation.booking_date) ='" . date("Y-m-d", strtotime($res['Reservation']['booking_date'])) ."'"))));
		$this->set("reservationsBy", $this->Reservation->find('all',array("conditions"=>array("Reservation.id !=".$res['Reservation']['id'] ,"Reservation.email ='" . $res['Reservation']['email'] ."'"))));
	}
	
	
	
	function admin_confirm()
	{
		
		$this->autoRender = false;
		
		if($this->request->params['pass'][0] > 0)
		{
			$settings = $this->Setting->getAll();
			
			$res_id = $this->request->params['pass'][0];
			
			$data = array("Reservation" =>array("id"=> $res_id, "confirmed"=>1, "confirmed_on" => date("Y-m-d H:i:s")));
// 			debug($data);
			$r = $this->Reservation->read(null , $res_id);
			$this->Reservation->save($data);
			$this->Session->setFlash("Reservation confirmed at ". date("Y-m-d H:i:s"). " for " .$r['Reservation']['name'], 'default' , array("class" => "alert-box success"));
			
			$r = $this->Reservation->findById($res_id);
			//	debug($r);
			$email = array();
			
			$email['r']['name'] = $r['Reservation']['name'];
			$email['r']['date'] = date("D jS M,  h:i A",strtotime( $r['Reservation']['booking_date']));
			$email['r']['size'] = $r['Reservation']['group_size'];
			$email['r']['venue'] = $settings['address'];
			$email['r']['location'] = $settings['name'];
			$email['r']['phone'] = $settings['phone'];
			
			$email['d']['to'] = $r['Reservation']['email'];
			$email['d']['from'] = $settings['email_from'];
			$email['d']['sub'] = "Booking confirmation from ". $settings['name'];
			
			
			//debug($email);die();
			$this->admin_send_confirm_email($email);
			//$this->redirect("/admin/reservations");
			
			
		}else
		{
			echo "No";
		}
	}
	
	
	private function send_admin_email($data)
	{
		$settings = $this->Setting->getAll();
		
		
		
		$email = new CakeEmail();
		$email->from("newbooking@shine.com.au");
		$email->to($settings['admin_email']);
		$email->subject("New bookin on " . $settings['name']);
		$email->emailFormat('html');
		
		
		$html =  "<b>" . $data['Reservation']['name'] ."</b> has made a reservation for " . date("D M jS H:iA", strtotime($data['Reservation']['booking_date'])) . " on " .$settings['name'] ;
		$html .= "<br><br> Please login to the <a href='http://shinecafe.com/admin'>Online console</a> to confirm the reservation";
		$html .= "<br>";
		
		$email->send($html);
	//debug( $email);die();
		
		
	}
	
	
	
	function admin_send_confirm_email($data)
	{
	
	
		
		//	die($file);
		$email = new CakeEmail();
		$email->template('', 'email');
		$email->viewVars(array('data' => $data));
		$email->from(array($data['d']['from'] => $data['r']['location']));
		$email->to($data['d']['to']);
		$email->subject($data['d']['sub']);
		$email->emailFormat('html');
		
		$email->send();
	
	}
	
	function admin_delete()
	{
		$this->autoRender = false;
		if($this->request->params['pass'][0] != '')
		{
			$this->Reservation->id = $this->request->params['pass'][0];
			$this->Reservation->saveField("active",0);
			$this->Session->setFlash("Reservation deleted" , 'default' , array("class" => "alert-box success"));
		}
		
		$this->redirect("/admin/reservations");
	}
	
	
	
	function admin_settings() 
	{
		$this->loadModel("ReservationEvent");
		
		$this->set("data", $this->ReservationEvent->find('all' , array("conditions"=>"active=1")));
		
	
	}


	function admin_lookup()
	{
		$this->autoRender = false;
		if($this->request->is('ajax'))
		{
			$term = $this->request->data['term'];

			$cond = array( 'or' => array( 'Reservation.name like' => '%'.$term.'%', 'Reservation.email like' => '%'.$term.'%', 'Reservation.phone like' => '%'.$term.'%'));
			$fields = array('id', 'name', 'email', 'phone', 'booking_date');
			$r = $this->Reservation->find('all', array('fields' => $fields, 'recursive' => -1, 'conditions' => $cond));
			$data = array();
			foreach($r as $row)
			{
				$data[] = array('id' => $row['Reservation']['id'], 'value' => $row['Reservation']['name'] .' (' . $row['Reservation']['email'] .') - '. $row['Reservation']['phone'] .' on ' . CakeTime::nice($row['Reservation']['booking_date']));
			}

			echo json_encode($data);

		}
	}

	function admin_calendar()
	{
		$this->autoRender = false;

		$fields = array('id', 'name', 'booking_date');
		$r = $this->Reservation->find('all', array('recursive' =>0, 'fields' =>$fields));
		$path = '/admin/reservations/details/';

		foreach ($r as $row) 
		{
			$out[] = array('id' => $row['Reservation']['id'], 
											'title' => $row['Reservation']['name'], 
											'start' => date('Y-m-d H:i', strtotime($row['Reservation']['booking_date'])), 
											'url' => $path.$row['Reservation']['id']);
		}

		echo json_encode($out);
	}
	
}