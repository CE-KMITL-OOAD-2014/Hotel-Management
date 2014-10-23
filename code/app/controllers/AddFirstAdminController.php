<?php
	class AddFirstAdminController extends BaseController{
		public function makeView(){
			return View::make('addAdmin');
		}
//----------------------------------------------------------
		public function makeViewComplete(){
			return View::make('addAdminComplete');
		}
	}

