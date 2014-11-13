<?php
class Staff extends User
{
	private $staffID;
	private $name;
	private $IDnumber;
	private $location;
	private $email;
	private $tel;
	
	function __construct()
	{
		parent::__construct();
		$this->staffID=NULL;
		$this->name=NULL;
		$this->IDnumber=NULL;
		$this->location=NULL;
		$this->email=NULL;
		$this->tel=NULL;
	}
 
//-----------------------------------------
// get set method
	public function getStaffID(){
		return 	$this->staffID;
	}
	public function getName(){
		return 	$this->name;
	}
	public function getIDnumber(){
		return 	$this->IDnumber;
	}
	public function getLocation(){
		return 	$this->location;
	}
	public function getEmail(){
		return 	$this->email;
	}
	public function getTel(){
		return 	$this->tel;
	}
	//- - - - - - - - - - - - - - - - - - -
	public function setStaffID($tmp){
		$this->staffID=$tmp;
	}
	public function setName($tmp){
		$this->name=$tmp;
	}
	public function setIDnumber($tmp){
		$this->IDnumber=$tmp;
	}
	public function setLocation($tmp){
		$this->location=$tmp;
	}
	public function setEmail($tmp){
		$this->email=$tmp;
	}
	public function setTel($tmp){
		$this->tel=$tmp;
	}
//-----------------------------------------
// get Staff

	public function getStaff($id){
		if(UserRepository::isExist($id)){
			$this->getUser($id);		
			$staffId = StaffRepository::getID($this->getUsername());
			$this->setStaffID(StaffRepository::getStaffID($staffId));
			$this->setName(StaffRepository::getName($staffId));
			$this->setLocation(StaffRepository::getLocation($staffId));
			$this->setEmail(StaffRepository::getEmail($staffId));
			$this->setTel(StaffRepository::getTel($staffId));
			$this->setIDnumber(StaffRepository::getIDnumber($id));
		}
		else {

		}
	}

//-----------------------------------------
// set Staff
		public function saveToDB(){
			parent::saveToDB();
			$id = StaffRepository::getID($this->getUsername());
			if(StaffRepository::isExist($id)){
				StaffRepository::setStaffID($id,$this->getStaffID());
				StaffRepository::setName($id,$this->getName());
				StaffRepository::setIDnumber($id,$this->getIDnumber());
				StaffRepository::setLocation($id,$this->getLocation());
				StaffRepository::setEmail($id,$this->getEmail());
				StaffRepository::setTel($id,$this->getTel());
			}
			else {
			}
		}

//-----------------------------------------
// coppy constructor
/*		public function coppyStaff($tmp){
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
				"\nRole : ".$this->role.
				"\nstaffID : ".$this->staffID.
				"\nName : ".$this->name.
				"\nIDnum : ".$this->IDnumber.
				"\nLocation : ".$this->location.
				"\nEmail : ".$this->email.
				"\nTel : ".$this->tel."\n";
	}
}
/*
		public static function getStaff($user){
			if($user!=NULL){
				if($user->getRole()=="staff") {
					$staff = new Staff();
					$staff = $user->coppyUser();
					$staff->setStaffID(StaffRepository::getStaffID());
					$staff->setName(StaffRepository::getName());
					$staff->setIDnumber(StaffRepository::getIDnumber());
					$staff->setLocation(StaffRepository::getLocation());
					$staff->setEmail(StaffRepository::getEmail());
					$staff->setTel(StaffRepository::getTel());
					return $staff;
				}
				else {
					return NULL;
				}
			}
			else {
				return NULL;
			}


		}
*/
?>