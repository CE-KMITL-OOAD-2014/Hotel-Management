<?php 
/**
* 
*/
class Receptionist extends Staff
{
	function __construct()
	{
		parent::__construct();
	}

//-----------------------------------------
// Get Receptionist

	public static function getReceptionist($id){
		if(UserRepository::isExist($id)){
			$user = new Receptionist();
			$user->setId($id);
			$user->setUsername(UserRepository::getUsername($id));
			$user->setPassword(UserRepository::getPassword($id));
			$user->setRole(UserRepository::getRole($id));
			return $user;
		}
		else{
			
		}
	}

//-----------------------------------------
// check in
	// 1. activate customerService user
	// 2. set room state to unavailable 
	// 3. create customer object

	public function checkin($room){
		$id=CustomerServiceRepository::getIDbyRoom($room);
		$obj = CustomerService::getCustomerService($id);
		$obj->setState(true);
		$obj->saveToDB();

		$roomID = RoomRepository::getID($room);
		$roomObj = Room::getRoom($roomID);
		$roomObj->setAvailable(true);
		$roomObj->saveToDB();
	}

	public function addCustomer($data){

		$id = CustomerRepository::newCustomer();
		CustomerRepository::setCustomerBillingID($data['billingNumber']);
		CustomerRepository::setName($id,$data['name']);
		CustomerRepository::setSurename($id,$data['surename']);
		CustomerRepository::setNationalID($id,$data['nationalID']);
		CustomerRepository::setDetail($id,$data['detail']);
		CustomerRepository::setState($id,$data['state']);
	}

//-----------------------------------------
}
 ?>