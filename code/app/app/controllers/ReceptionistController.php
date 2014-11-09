<?php
	class ReceptionistController extends BaseController{
//----------------------------------------------------------		
		public function viewCheckin(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="receptionist"){
					return View::make('receptionist-checkin1-countMan');
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

		public function checkin(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="receptionist"){
					$data = Input::all();
					$user->checkin($data['roomNumber']);

					$tool = new CheckinTool();
					$tool->setPerson($data['person']);
					$tool->setBillNumber(GlobalRepository::getBillNumber());
					Session::put('checkinTool', serialize($tool));

					return Redirect::to('/addGuest');
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
		public function viewAddGuest(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="receptionist"){
					return View::make('receptionist-checkin2-viewAddGuest');
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

		public function addGuest(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="receptionist"){
					$data = Input::all();
					$data['billingNumber'] = GlobalRepository::getBillNumber();
					$user->checkin($data['roomNumber']);
					return Redirect::to('/addGuest');
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