<?php


class Reservation extends AppModel 
{
		public $name = "Reservation";
		public $actsAs = array('Containable');
		
		public $belongsTo = array(
				'Event' => array(
						'className'  => 'Event',
						'foreignKey'      => 'event_id'
						,'counterCache' => true
						,'counterScope' => array('Reservation.active' => 1) 
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

				,'phone' => array('rule' => 'numeric'
						,'message' => "Please provide a valid contact number")

				,'email' => array('rule' => 'email'
						,'message' => "A valid email is required")

				,'group_size' => array('rule' => 'numeric',
										'required' => true
										,'message' => "Group size is required")

				,'booking_date' => array('rule' => 'notEmpty'
						,'message' => "Resavation date is required")
		);
		
	function beforeSave($options = array())
	{
		$user_id = $this->getCurrentUser();
		$this->data[$this->name]['user_id'] = $user_id['id'];
	}
	

}