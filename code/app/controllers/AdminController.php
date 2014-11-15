<?php
	class AdminController extends BaseController{
//----------------------------------------------------------
		public function viewAddStaff(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					return View::make('admin-addStaff');
				}
				else{
					Session::forget('user');
					return Redirect::to('/');
				}
			}
			else {
				return Redirect::to('/login');
			}
		}

//----------------------------------------------------------

		public function addStaff(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					$data = Input::all();
					$user->addStaff($data);
					return Redirect::to('/');
				}
				else{
					Session::forget('user');
					return Redirect::to('/');
				}
			}
			else {
				return Redirect::to('/login');
			}
		}

//----------------------------------------------------------

		public function addCustomer(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					$data = Input::all();
					$user->addCustomer($data);
					return Redirect::to('/');
				}
				else{
					Session::forget('user');
					return Redirect::to('/');
				}
			}
			else {
				return Redirect::to('/login');
			}
		}

//----------------------------------------------------------

		public function viewAddCustomer(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					return View::make('admin-addCustomer');
				}
				else{
					Session::forget('user');
					return Redirect::to('/');
				}
			}
			else {
				return Redirect::to('/login');
			}
		}

//----------------------------------------------------------

		public function viewEditStaff(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					return View::make('admin-editStaff');
				}
				else{
					Session::forget('user');
					return Redirect::to('/');
				}
			}
			else {
				return Redirect::to('/login');
			}
		}

//----------------------------------------------------------

		public function viewStaffEdit(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					$tmp = Input::all();
					if($tmp['action']=='edit'){
						return View::make('admin-staffEdit')->with('userid',$tmp['userid']);
					}
					else{
						$user->deleteStaff($tmp['userid']);
						return Redirect::to('/');
					}
				}
				else{
					Session::forget('user');
					return Redirect::to('/');
				}
			}
			else {
				return Redirect::to('/login');
			}
		}

//----------------------------------------------------------


		public function editStaffComplete(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					$tmp = Input::all();
					$user->editStaff($tmp);
					return Redirect::to('/');
				}
				else{
					Session::forget('user');
					return Redirect::to('/');
				}
			}
			else {
				return Redirect::to('/login');
			}
		}

//----------------------------------------------------------

}