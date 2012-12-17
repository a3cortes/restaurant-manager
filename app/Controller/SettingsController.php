<?php

App::import('Sanitize');

class SettingsController extends AppController
{
	function beforeFilter()
	{
		parent::beforeFilter();
	}


	function admin_index()
	{
//		$this->set("data", $this->Setting->getAll());
		$this->set("data", $this->Session->read('site_data'));

		if(!empty($this->request->data))
		{
			foreach($this->request->data['Setting'] as $k=>$v)
			{
				$this->Setting->primaryKey = "setting";
				$this->Setting->id = $k;
				$this->Setting->set("setting_val", $v);
				$this->Setting->save();
			}

			$this->Session->setFlash("Settings saved!" , 'default' , array("class" => "alert-box success"));
			$this->redirect("/admin/settings");
		}
	}

}