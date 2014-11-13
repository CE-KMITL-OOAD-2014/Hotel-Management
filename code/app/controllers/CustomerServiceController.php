<?php
	class CustomerServiceController extends BaseController{
//----------------------------------------------------------
		public function addCleanReq(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="customer"){
					if($user->getCleanReqID()==0){
						$user->addCleanRequest();
						Session::put('user', serialize($user));
						$user = unserialize(Session::get('user'));
						return Redirect::to('/');
					}
					else{
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
		public function viewAddMealReq(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="customer"){
					return View::make('customer-addMealReq');
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
		public function addMealReq(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="customer"){
					if($user->getMealReqID()==0){
						//$tmp = new GlobalDB();
						//$tmp->name = 'a';
						//$tmp->Data=$user->getMealReqID();
						//$tmp->save();

						$data = Input::all();
						$user->addMealRequest($data['mealNumber']);

						Session::put('user', serialize($user));
						return Redirect::to('/');
					}
					else{
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

		public function completeClean(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="customer"){
					if($user->getCleanReqID()!=0){
						$user->completeClean();

						Session::put('user', serialize($user));
						return Redirect::to('/');
					}
					else{
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

		public function completeOrder(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="customer"){
					if($user->getMealReqID()!=0){
						$user->completeOrder();

						Session::put('user', serialize($user));
						return Redirect::to('/');
					}
					else{
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
	}