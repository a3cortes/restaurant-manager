<?php


class Event extends AppModel 
{
		public $actsAs = array('Containable',
				'Upload.Upload' => array(
						'path' => array("path"=> "webroot/files/events/"
								,"pathMethod" => "flat"
						)
				)
		);
		
		public $hasMany = array(
				'Reservation' => array(
						'className'  => 'Reservation',
						'foreignKey'      => 'event_id'
				)
		);
		
		
		public $validate = array (
				'name' => array('NotEmpty' => array(
											'rule' =>'notEmpty'
											,'required' => true
											,'allowEmpty' => false
											,'message' => "Name is required"
											)
									)

		);
		function beforeSave($options = array())
		{
			$user_id = $this->getCurrentUser();
			$this->data[$this->name]['user_id'] = $user_id['id'];
			

			$this->data[$this->name]['event_date'] = date("Y-m-d", strtotime($this->data[$this->name]['event_date']))
			. " " . $this->data[$this->name]['booking_time_hour']
			. ":" . $this->data[$this->name]['booking_time_min'] .":00";
			
			
			//$this->data[$this->name]['event_date'] = date("Y-m-d H:i:s", strtotime($this->data[$this->name]['event_date']));
			
			//debug($this->data[$this->name]['end']);
			//debug(date("Y-m-d H:i:s", strtotime($this->data[$this->name]['end'])));
		}
		
		function get_booking_events()
		{
			$r = $this->query("SELECT * FROM events Event where  (active =1 and published =1) or (booking=1)");
		
			return $r;
		}
		
}