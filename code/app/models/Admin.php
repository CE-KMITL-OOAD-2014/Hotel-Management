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
		if($data['role']=='kitchen'){
			$kitTmp = new Kitchen();
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

			$userDBtmp = new StaffDB();
			$userDBtmp->staffID=$kitTmp->getStaffID();
			$userDBtmp->name=$kitTmp->getName();
			$userDBtmp->IDnumber=$kitTmp->getIDnumber();
			$userDBtmp->location=$kitTmp->getLocation();
			$userDBtmp->email=$kitTmp->getEmail();
			$userDBtmp->tel=$kitTmp->getTel();
			$userDBtmp->save();
		}
	}
}
 ?>