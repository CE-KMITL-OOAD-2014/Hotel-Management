<?php 
	class User{
		private $id;
		private $role;
		private $username;
		private $password;

//-----------------------------------------
// construction
		public function __construct(){
			$id=NULL;
			$username=NULL;
			$password=NULL;
			$role=NULL;
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
		public function getUser($id){
			if(UserRepository::isExist($id)){
				$this->setId($id);
				$this->setUsername(UserRepository::getUsername($id));
				$this->setPassword(UserRepository::getPassword($id));
				$this->setRole(UserRepository::getRole($id));
			}
			else {
			}

		}
//-----------------------------------------
// save User
		public function saveToDB(){
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