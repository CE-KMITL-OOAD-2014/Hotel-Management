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
// Add new User 
	public function editStaff($data){
		$user =new Staff();
		$user->getStaff($data['userID']);
		$user->setUsername($data['username']);
		$user->setPassword($data['password']);
		$user->setStaffID($data['staffID']);
		$user->setName($data['name']);
		$user->setIDnumber($data['IDnumber']);
		$user->setLocation($data['location']);
		$user->setEmail($data['email']);
		$user->setTel($data['tel']);
		$user->saveToDB();
	}

//-----------------------------------------
// Add new User 
	public function deleteStaff($id){
		$user =new Staff();
		$user->getStaff($id);
		$user->delFromDB();
	}
//-----------------------------------------
// Add new User 
	public function editCustomer($data){
		$user =new CustomerService();
		$user->getCustomerService($data['userID']);
		$user->setUsername($data['username']);
		$user->setPassword($data['password']);
		$user->setRoom($data['room']);
		$user->saveToDB();
	}

//-----------------------------------------
// Add new User 
	public function deleteCustomer($id){
		$user =new CustomerService();
		$user->getCustomerService($id);
		$user->delFromDB();
	}
//-----------------------------------------
}
 ?>