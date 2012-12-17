<?php 

class MenuCat extends AppModel 
{
	public $actsAs = array('Containable');
	public $hasMany = array(
				
			"MenuItem" => array(
					'className'    => 'MenuItem',
					'conditions' => array('active' => 1)
					,'order' => 'MenuItem.porder',
					
			)
	);
	
	function beforeSave($options = array())
	{
		$user_id = $this->getCurrentUser();
		$this->data[$this->name]['user_id'] = $user_id['id'];
	}
}
?>