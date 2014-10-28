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
?>