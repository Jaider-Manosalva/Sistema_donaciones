<?php 

	class Login extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function login()
		{
			$data['page_id'] = 1;
			$data['page_tag'] = "Login";
			$data['page_title'] = "Login";
			$data['page_name'] = "login";
			//$data['page_content'] = "";
			$this->views->getView($this,"login",$data);
		}

	}
 ?>