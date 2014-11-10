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

	//DO NOT FORGET!!! customer Service must have it own room number already!!

	public function checkin($room,$billNumber){
		$id=CustomerServiceRepository::getIDbyRoom($room);
		$obj = CustomerService::getCustomerService($id);
		$obj->setBillNumber($billNumber);
		$obj->setState(true);
		$obj->saveToDB();

		$roomID = RoomRepository::getID($room);
		$roomObj = Room::getRoom($roomID);
		$roomObj->setAvailable(false);
		$roomObj->saveToDB();
	}

	public function addGuest($data){

		$id = CustomerRepository::newCustomer();
		CustomerRepository::setName($id,$data['name']);
		CustomerRepository::setSurname($id,$data['surname']);
		CustomerRepository::setNationalID($id,$data['nationalID']);
		CustomerRepository::setDetail($id,$data['detail']);
		CustomerRepository::setBillNumber($id,$data['billNumber']);
		CustomerRepository::setState($id,true);
	} 

//-----------------------------------------
}
 ?>