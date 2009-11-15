<?php

class Captcha extends Controller {
	var  $captcha = null;
	
	function Captcha()
	{
		parent::Controller();
		ini_set("display_errors",1);
		
		
		$this->load->library('WWWCaptcha',array(BASEPATH.'fonts/texb.ttf'),'captcha');
		
		
		
	
	}
	
	
	function  index()
	{
//$this->
		$this->captcha->makeCaptcha();
		exit();
	}
	
}

/* End of file captcha.php */
/* Location: ./system/application/controllers/captcha.php */