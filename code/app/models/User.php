<?php 
	class User{
		private $id;
		private $role;
		private $username;
		private $password;

		public function __construct(){
			$this->id=NULL;
			$this->username=NULL;
			$this->password=NULL;
		}

//-----------------------------------------
// get set function

		public function getId(){
			return $this->id;
		}
		public function getUsername(){
			return $this->username;
		}
		public function getPassword(){
			return $this->password;
		}
		public function getRole($tmp){
			return $this->role;
		}

		//- - - - - - - - - - - - - - - - - 

		public function setId($tmp){
			$this->id=$tmp;
		}
		public function setUsername($tmp){
			$this->username=$tmp;
		}
		public function setPassword($tmp){
			$this->password=$tmp;
		}
		public function setRole($tmp){
			$this->role=$tmp;
		}

//-----------------------------------------
// get User
		public static function getUser($id){
			$userDbTmp = UserDB::find($id);
			$userObj = new User();
			if($userDbTmp!=NULL){
				$userObj->setId($userDbTmp->id);
				$userObj->setUsername($userDbTmp->username);
				$userObj->setPassword($userDbTmp->password);
				return $userObj;
			}
			else {
				return NULL;
			}

		}
//-----------------------------------------
// set User
		public function updateUser(){
			$userDbTmp = UserDB::find($this->getId());
			$userDbTmp->username = $this->getUser();
			$userDbTmp->password = $this->getPassword();
			$userDbTmp->save();
		}

//-----------------------------------------
//

//-----------------------------------------
	}
?>