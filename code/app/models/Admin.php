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
		$userRepository = new UserRepository();
		if($userRepository->isExist($id)){
			$this->getUser($id);
		}
		else{
			
		}
	}


//-----------------------------------------
// Add new Staff 
	public function addStaff($data){
		$userRepository = new UserRepository();
		$userId = $userRepository->newUser();
		$userRepository->setUsername($userId,$data['username']);
		$userRepository->setPassword($userId,$data['password']);
		$userRepository->setRole($userId,$data['role']);

		$staffRepository = new StaffRepository();
		$staffId = $staffRepository->newStaff();
		$staffRepository->setUserID($staffId,$userId);
		$staffRepository->setStaffID($staffId,$data['staffID']);
		$staffRepository->setName($staffId,$data['name']);
		$staffRepository->setIDnumber($staffId,$data['IDnumber']);
		$staffRepository->setLocation($staffId,$data['location']);
		$staffRepository->setEmail($staffId,$data['email']);
		$staffRepository->setTel($staffId,$data['tel']);

		if($data['role']=='kitchen'){
			$staffRequestRepository= new StaffRequestRepository();
			$kitchenRequestID = $staffRequestRepository->newStaffRequest();
			$staffRequestRepository->setUserID($kitchenRequestID, $userId);
			$staffRequestRepository->setRequestID($kitchenRequestID, 0);
		}
	}
//-----------------------------------------
// Add new customer
	public function addCustomer($data){
		$userRepository = new UserRepository();
		$userId = $userRepository->newUser();
		$userRepository->setUsername($userId,$data['username']);
		$userRepository->setPassword($userId,$data['password']);
		$userRepository->setRole($userId,"customer");
		
		$customerServiceRepository = new CustomerServiceRepository();
		$customerId = $customerServiceRepository->newCustomerService();
		$customerServiceRepository->setUserID($customerId,$userId);
		$customerServiceRepository->setRoom($customerId,$data['room']);
		$customerServiceRepository->setState($customerId,false);
	}

//-----------------------------------------
// Edit Staff 
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
// Delete Staff 
	public function deleteStaff($id){
		$user =new Staff();
		$user->getStaff($id);
		$user->delFromDB();
	}
//-----------------------------------------

	public function editCustomer($data){
		$user = new CustomerService();
		$user->getCustomerService($data['userID']);
		$user->setUsername($data['username']);
		$user->setPassword($data['password']);
		$user->setRoom($data['room']);
		$user->saveToDB();
	}

//-----------------------------------------

	public function deleteCustomer($id){
		$user =new CustomerService();
		$user->getCustomerService($id);
		$user->delFromDB();
	}
//-----------------------------------------
}
 ?>