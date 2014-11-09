<?php 
/**
* 
*/
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
	public static function getAdmin($id){
		if(UserRepository::isExist($id)){
			$adminObj = new Admin();
			$adminObj->setId($id);
			$adminObj->setUsername(UserRepository::getUsername($id));
			$adminObj->setPassword(UserRepository::getPassword($id));
			$adminObj->setRole(UserRepository::getRole($id));
			return $adminObj;
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
		if($data['role']=='admin'){

		}
		else{
			$staffId = StaffRepository::newStaff();
			StaffRepository::setUserID($staffId,$userId);
			StaffRepository::setStaffID($staffId,$data['staffID']);
			StaffRepository::setName($staffId,$data['name']);
			StaffRepository::setIDnumber($staffId,$data['IDnumber']);
			StaffRepository::setLocation($staffId,$data['location']);
			StaffRepository::setEmail($staffId,$data['email']);
			StaffRepository::setTel($staffId,$data['tel']);

			if($data['role']=='manager'){

			}
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