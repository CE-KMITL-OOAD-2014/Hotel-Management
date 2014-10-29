<?php 
/**
* 
*/
class Admin extends User
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public function adduser($data){
		$kitTmp = new Staff();
		$kitTmp->setUsername($data['username']);
		$kitTmp->setPassword($data['password']);
		$kitTmp->setRole($data['role']);
		$kitTmp->setStaffID($data['staffID']);
		$kitTmp->setName($data['name']);
		$kitTmp->setIDnumber($data['IDnumber']);
		$kitTmp->setLocation($data['location']);
		$kitTmp->setEmail($data['email']);
		$kitTmp->setTel($data['tel']);

		$userDBtmp = new UserDB();
		$userDBtmp->username=$kitTmp->getUsername();
		$userDBtmp->password=$kitTmp->getPassword();
		$userDBtmp->role=$kitTmp->getRole();
		$userDBtmp->save();

		$userDBtmp2 = new StaffDB();
		$userDBtmp2->userID=$userDBtmp->id;
		$userDBtmp2->staffID=$kitTmp->getStaffID();
		$userDBtmp2->name=$kitTmp->getName();
		$userDBtmp2->IDnumber=$kitTmp->getIDnumber();
		$userDBtmp2->location=$kitTmp->getLocation();
		$userDBtmp2->email=$kitTmp->getEmail();
		$userDBtmp2->tel=$kitTmp->getTel();
		$userDBtmp2->save();
	}
}
 ?>