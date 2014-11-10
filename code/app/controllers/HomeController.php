<?php
	class HomeController extends BaseController{
//----------------------------------------------------------		
		public function home(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					return View::make('admin');
				}
				else if($user->getRole()=="manager"){
					return View::make('manager');
				}
				else if($user->getRole()=="customer"){
					return View::make('customer');
				}
				else if($user->getRole()=="receptionist"){
					return View::make('receptionist');
				}
				else if($user->getRole()=="kitchen"){
					return View::make('Kitchen');
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
		public function login(){
			if(Session::get('user', 'null')!='null'){
				return Redirect::to('/');
			}
			else {
				return View::make('login');
			}
		}
//----------------------------------------------------------
		public function authen(){
			if(Session::get('user', 'null')!='null'){
				return Redirect::to('/');
			}
			else {
				$data = Input::all();
				$userDbTmp = UserDB::where('username','=',$data['username'])->where('password','=',$data['password'])->get();
				if(count($userDbTmp)!=0){
					if($userDbTmp[0]->role=='admin'){
						$userTmp = Admin::getAdmin($userDbTmp[0]->id);
					}
					else if($userDbTmp[0]->role=='manager'){
						$userTmp = Manager::getManager($userDbTmp[0]->id);
					}
					else if($userDbTmp[0]->role=='receptionist'){
						$userTmp = Receptionist::getReceptionist($userDbTmp[0]->id);
					}
					else if($userDbTmp[0]->role=='kitchen'){
						$userTmp = Kitchen::getKitchen($userDbTmp[0]->id);
					}
					else if($userDbTmp[0]->role=='customer'){
						$userTmp = CustomerService::getCustomerService($userDbTmp[0]->id);
						if($userTmp->getState()){

						}
						else{
							return Redirect::to('/');
						}
					}
					Session::put('user', serialize($userTmp));
				}
				return Redirect::to('/');
			}
		}
//----------------------------------------------------------
		public function logout(){
			if(Session::get('user', 'null')!='null'){
				Session::forget('user');
			}
			return Redirect::to('/');
		}
//----------------------------------------------------------
//----------------------------------------------------------
//----------------------------------------------------------
		public function createAdmin(){
			$userDBtmp = new UserDB();
			$userDBtmp->username="mactest";
			$userDBtmp->password="test001";
			$userDBtmp->role="admin";
			$userDBtmp->save();
			return Redirect::to('/');
		}
//----------------------------------------------------------
//----------------------------------------------------------
//----------------------------------------------------------
	}