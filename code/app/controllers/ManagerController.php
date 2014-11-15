<?php
	class ManagerController extends BaseController{
//----------------------------------------------------------		
		public function viewAddRoom(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="manager"){
					return View::make('manager-addRoom');
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

		public function addRoom(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="manager"){
					$data = Input::all();
					$user->addRoom($data);
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
		public function viewEditRoom(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="manager"){
					return View::make('manager-editRoom');
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

		public function viewRoomEdit(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="manager"){
					$tmp = Input::all();
					if($tmp['action']=='edit'){
						return View::make('manager-roomEdit')->with('roomid',$tmp['roomid']);
					}
					else{
						$user->deleteRoom($tmp['roomid']);
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


		public function editRoomComplete(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="manager"){
					$tmp = Input::all();
					$user->editRoom($tmp);
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