<?php
	class CustomerServiceController extends BaseController{
//----------------------------------------------------------
		public function addCleanReq(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="customer"){
					$user->addCleanRequest();
					Session::put('user', serialize($user));
					$user = unserialize(Session::get('user'));
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
		public function addCleanReq(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="customer"){
					$user->addCleanRequest();
					Session::put('user', serialize($user));
					$user = unserialize(Session::get('user'));
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
//----------------------------------------------------------
	}