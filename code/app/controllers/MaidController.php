<?php
	class MaidController extends BaseController{
	//----------------------------------------------------------		
		public function viewcheckClean(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="maid"){
					return View::make('maid-checkClean');
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

		public function acceptClean(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="maid"){
					$data = Input::all();
					$user->acceptClean($data['reqID']);
					Session::put('user', serialize($user));
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

		public function viewcheckRoom(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="maid"){
					$data = Input::all();
					$user->completeCheckReq($data['reqID']);
					return View::make('maid-checkRoom')->with('reqID',$data['reqID']);
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

		public function checkRoomComplete(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="maid"){
					$data = Input::all();
					$user->checkRoomComplete($data);
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