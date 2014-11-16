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
		$userRepository = new UserRepository();
		$staffRepository = new StaffRepository();
		if($userRepository->isExist($id)){
			$this->getUser($id);		
			$staffId = $staffRepository->getID($this->getUsername());
			$this->setStaffID($staffRepository->getStaffID($staffId));
			$this->setName($staffRepository->getName($staffId));
			$this->setLocation($staffRepository->getLocation($staffId));
			$this->setEmail($staffRepository->getEmail($staffId));
			$this->setTel($staffRepository->getTel($staffId));
			$this->setIDnumber($staffRepository->getIDnumber($staffId));
		}
		else {

		}
	}

//-----------------------------------------
// set Staff
		public function saveToDB(){
			parent::saveToDB();
			$staffRepository = new StaffRepository();
			$id = $staffRepository->getID($this->getUsername());
			if($staffRepository->isExist($id)){
				$staffRepository->setStaffID($id,$this->getStaffID());
				$staffRepository->setName($id,$this->getName());
				$staffRepository->setIDnumber($id,$this->getIDnumber());
				$staffRepository->setLocation($id,$this->getLocation());
				$staffRepository->setEmail($id,$this->getEmail());
				$staffRepository->setTel($id,$this->getTel());
			}
			else {
			}
		}

//-----------------------------------------
// delete from DB
		public function delFromDB(){
			$staffRepository = new StaffRepository();
			$id = $staffRepository->getID($this->getUsername());
			if($staffRepository->isExist($id)){
				parent::delFromDB();
				$staffRepository->del($id);
			}
			else {
			}
		}
	}
?>