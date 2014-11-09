<?php 
	class User{
		private $id;
		private $role;
		private $username;
		private $password;

//-----------------------------------------
// construction
		public function __construct(){
			$this->id=NULL;
			$this->username=NULL;
			$this->password=NULL;
			$this->role=NULL;
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
		public function getRole(){
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
			if(UserRepository::isExist($id)){
				$userObj = new User();
				$userObj->setId($id);
				$userObj->setUsername(UserRepository::getUsername($id));
				$userObj->setPassword(UserRepository::getPassword($id));
				$userObj->setRole(UserRepository::getRole($id));
				return $userObj;
			}
			else {
				return NULL;
			}

		}
//-----------------------------------------
// save User
		public function setUser(){
			if(UserRepository::isExist($this->id)){
				UserRepository::setUsername($this->id,$this->username);
				UserRepository::setPassword($this->id,$this->password);
				UserRepository::setRole($this->id,$this->role);
			}
			else {
			}
		}

//-----------------------------------------
// coppy constructor
/*		public function coppyUser($tmp){
			$this->id=$tmp->getId();
			$this->role=$tmp->getRole();
			$this->username=$tmp->getUsername();
			$this->password=$tmp->getPassword();
		}
*/
//-----------------------------------------
// print line
		public function println(){
			echo 	"Username : ".$this->username.
					"\nPassword : ".$this->password.
					"\nRole : ".$this->role."\n";
		}

//-----------------------------------------
	}
?>