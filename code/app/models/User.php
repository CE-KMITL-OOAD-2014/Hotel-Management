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
			$userRepository = new UserRepository();
			if($userRepository->isExist($id)){
				$this->setId($id);
				$this->setUsername($userRepository->getUsername($id));
				$this->setPassword($userRepository->getPassword($id));
				$this->setRole($userRepository->getRole($id));
			}
			else {
			}

		}
//-----------------------------------------
// save User
		public function saveToDB(){
			$userRepository = new UserRepository();
			if($userRepository->isExist($this->id)){
				$userRepository->setUsername($this->id,$this->username);
				$userRepository->setPassword($this->id,$this->password);
				$userRepository->setRole($this->id,$this->role);
			}
			else {
			}
		}
//-----------------------------------------
// set Staff
		public function delFromDB(){
			$userRepository = new UserRepository();
			if($userRepository->isExist($this->getId())){
				$userRepository->del($this->getId());
			}
			else {
			}
		}

//-----------------------------------------
	}
?>