<?php
App::import('Sanitize');
App::uses('CakeEmail', 'Network/Email');
class PagesController extends AppController {

	var $name = 'Pages';
	var $helpers = array('Html', 'Form');//, 'Cache'
	function beforeFilter() 
	{
		parent::beforeFilter();
		$this->set("title_for_layout", "Shine Cafe, Bar and Lounge. Breakfast, Lunch, Dinner at Glen Waverley. Functions, Parties, Wood Fired Pizza, Cocktails");
	}
	
	function display()
	{
		//debug($this->params['pass'][0]);
		$this->autoRender = false;
		$this->layout = 'default';
		
		
		
		$this->render($this->params['page'],'default');
	}


	function content()
	{
		//$this->autoRender = false;
		$current_view = (array_pop($this->request->params['pass']));
	
		$this->view = "content/".$current_view;
	}
	
	
	function home()
		{
			//$this->cacheAction = '1 hour';
			$this->layout = 'default';
			$this->view = "home";
	 
		}
		
	function contact_email()
	{
		$this->autoRender = false;
		
		
		$from = "From: Shine Cafe <booking@shinecafe.com/>";
		$subject = ucwords($this->request->data['type']). " enquiry from Shine Cafe";
		$to ="heshanh@gmail.com,functions@shinecafe.com";
		
		$body = "Name : " .  $this->request->data['name'] ."<br />";
		$body .= "Email : " .  $this->request->data['email'] ."<br />";
		$body .= "Phone : " .  $this->request->data['phone'] ."<br />";
		$body .= "Enquiry : " .  $this->request->data['enquiry'] ."<br />";
		
		$header = $from ."\r\n";
		$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		mail($to,  $subject , $body, $header);
		
		$this->Session->setFlash("Thank you, we will contact you shortly" , 'default' , array("class" => "alert-box success"));
		$this->redirect("/contact-us.html");

	}
	
	
}
?>