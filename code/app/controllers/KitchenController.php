<?php
	class KitchenController extends BaseController{
//----------------------------------------------------------
		public function viewAddMeal(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="kitchen"){
					return View::make('kitchen-addMeal');
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

		public function addMeal(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="kitchen"){
					$data = Input::all();
					$user->addMeal($data);
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

		public function viewcheckOrder(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="kitchen"){
					return View::make('kitchen-checkOrder');
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

		public function acceptOrder(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="kitchen"){
					$data = Input::all();
					$user->acceptOrder($data['reqID']);
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

		public function viewEditMeal(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="kitchen"){
					return View::make('kitchen-editMeal');
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

		public function viewMealEdit(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="kitchen"){
					$tmp = Input::all();
					if($tmp['action']=='edit'){
						return View::make('kitchen-mealEdit')->with('mealid',$tmp['mealid']);
					}
					else{
						$user->deleteMeal($tmp['mealid']);
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


		public function editMealComplete(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="kitchen"){
					$tmp = Input::all();
					$user->editMeal($tmp);
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