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
					$tool = new CheckinTool();
					$tool->setPerson($data['person']);
					$tool->setBillNumber(GlobalRepository::getBillNumber());
					Session::put('checkinTool', serialize($tool));

					$user->checkin($data['roomNumber'],$tool->getBillNumber());
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
				$tool = unserialize(Session::get('checkinTool'));
				if($user->getRole()=="receptionist" && $tool->getPerson()>$tool->getCount()){
					return View::make('receptionist-checkin2-viewAddGuest');
				}
				else{
					Session::forget('checkinTool');
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
				$user = unserialize(Session::get('user')); 				// get user object from session
				$tool = unserialize(Session::get('checkinTool'));		// get tool object from session
				// check that this user is Receptionist and AddGuest Process is still not complete.
				if($user->getRole()=="receptionist" && $tool->getPerson()>$tool->getCount()){
					
					$data = Input::all();
					$data['billNumber'] = $tool->getBillNumber();
					$user->addGuest($data);

					// count process up for add next guest.
					$tool->setCount($tool->getCount()+1);
					Session::put('checkinTool', serialize($tool));
					return Redirect::to('/addGuest');
				}
				else{
					return Redirect::to('/');
				}
			}
			else {
				return Redirect::to('/login');
			}
		}

//----------------------------------------------------------
	}