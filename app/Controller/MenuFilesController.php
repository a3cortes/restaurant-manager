<?php 

App::import('Sanitize');
class MenuFilesController extends AppController 
{
	function beforeFilter() 
	{
		parent::beforeFilter();
		$this->loadModel("MenuItem");
		$this->loadModel("MenuGroup");
	}
	
	
	function admin_index($id) 
	{
		$this->set('data' , $this->MenuFile->findById($id));
		
		if($this->request->is('post'))
		{
			debug($this->request->data);
			if($this->request->data['MenuFile']['path']['size'] == 0)
			{
				$this->MenuFile->id = $id;
				$this->MenuFile->saveField("name", $this->request->data['MenuFile']['name']);
			}else 
			{
				$this->MenuFile->save($this->request->data);
			}
			
			$this->redirect("/admin/menus/settings");
		}
	}
	
	function admin_delete($id)
	{
		$this->autoRender = false;
		if($id > 0)
		{
			$this->MenuFile->delete($id);
		}
		$this->Session->setFlash("Menu deleted" , 'default' , array("class" => "alert-box success"));
		$this->redirect("/admin/menus/settings");
	}
	


} 