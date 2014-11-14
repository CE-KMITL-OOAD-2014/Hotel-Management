<?php 
class Receptionist extends Staff
{
	function __construct()
	{
		parent::__construct();
	}

//-----------------------------------------
// Get Receptionist

	public function getReceptionist($id){
		if(UserRepository::isExist($id)){
			$this->getStaff($id);
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
		$obj = new CustomerService();
		$obj->getCustomerService($id);
		$obj->setBillNumber($billNumber);
		$obj->setState(true);
		$obj->saveToDB();

		$roomID = RoomRepository::getID($room);
		$roomObj = new Room();
		$roomObj->getRoom($roomID);
		$roomObj->setAvailable(false);
		$roomObj->saveToDB();
	}

	public function reqCheckRoom($room){
		$id=CustomerServiceRepository::getIDbyRoom($room);
		$obj = new CustomerService();
		$obj->getCustomerService($id);
		$obj->setState(false);
		$obj->saveToDB();

		$roomId = RoomRepository::getID($room);
		$roomObj = new Room();
		$roomObj->getRoom($roomId);
		$roomObj->setAvailable(1);
		$roomObj->saveToDB();

		$id = RequestRepository::newRequest();
		RequestRepository::setType($id, 3);
		RequestRepository::setRoom($id, $room);
		RequestRepository::setBillNumber($id, $obj->getBillNumber());
		RequestRepository::setCustomerServiceID($id, 0);
		RequestRepository::setState($id, 0);
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

	public function pay($reqId){
		$reqTmp = new Requests();
		$reqTmp->getRequest($reqId);
		$reqTmp->setState(2);
		$reqTmp->saveToDB();
	}

//-----------------------------------------
}
 ?>