<?php
class Admin extends User
{
//-----------------------------------------
//Constructor
	public function __construct()
	{
		parent::__construct();
	}

//-----------------------------------------
// Get Admin
	public function getAdmin($id){
		if(UserRepository::isExist($id)){
			$this->getUser($id);
		}
		else{
			
		}
	}


//-----------------------------------------
// Add new User 
	public function addStaff($data){
		$userId = UserRepository::newUser();
		UserRepository::setUsername($userId,$data['username']);
		UserRepository::setPassword($userId,$data['password']);
		UserRepository::setRole($userId,$data['role']);

		$staffId = StaffRepository::newStaff();
		StaffRepository::setUserID($staffId,$userId);
		StaffRepository::setStaffID($staffId,$data['staffID']);
		StaffRepository::setName($staffId,$data['name']);
		StaffRepository::setIDnumber($staffId,$data['IDnumber']);
		StaffRepository::setLocation($staffId,$data['location']);
		StaffRepository::setEmail($staffId,$data['email']);
		StaffRepository::setTel($staffId,$data['tel']);

		if($data['role']=='kitchen'){
			$kitchenRequestID = StaffRequestRepository::newStaffRequest();
			StaffRequestRepository::setUserID($kitchenRequestID, $userId);
			StaffRequestRepository::setRequestID($kitchenRequestID, 0);
		}
	}
//-----------------------------------------
// Add new customer
	public function addCustomer($data){
		$userId = UserRepository::newUser();
		UserRepository::setUsername($userId,$data['username']);
		UserRepository::setPassword($userId,$data['password']);
		UserRepository::setRole($userId,"customer");
		
		$customerId = CustomerServiceRepository::newCustomerService();
		CustomerServiceRepository::setUserID($customerId,$userId);
		CustomerServiceRepository::setRoom($customerId,$data['room']);
		CustomerServiceRepository::setState($customerId,false);
	}
//-----------------------------------------
}
 ?>