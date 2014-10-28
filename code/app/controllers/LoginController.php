<?php
	class LoginController extends BaseController{
//----------------------------------------------------------		
		public function home(){
			if(Session::get('user', 'null')!='null'){
				$user = unserialize(Session::get('user'));
				if($user->getRole()=="admin"){
					return View::make('admin');
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
					$userTmp = User::getUser($userDbTmp[0]->id);
					if($userTmp->getRole()=='admin'){
						$newUserTmp = new Admin();
						$newUserTmp->coppyUser($userTmp);
						$userTmp = $newUserTmp;
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