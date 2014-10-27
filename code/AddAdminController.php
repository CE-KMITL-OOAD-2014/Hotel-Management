<?php
	class AddAdminController extends BaseController{
		public function makeView(){
			$data['alert']=" ";
			return View::make('addAdmin',$data);
		}
//----------------------------------------------------------
		public function makeViewComplete(){
			$data['alert']="completeAddAdmin";
			return View::make('login',$data);
		}

//----------------------------------------------------------
		public function addAdmin(){
			$data=Input::all();
			var_dump($data);
		}
	}

