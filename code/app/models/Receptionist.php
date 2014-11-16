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
		$userRepository = new UserRepository();
		if($userRepository->isExist($id)){
			$this->getStaff($id);
		}
		else{
			
		}
	}

//-----------------------------------------

	public function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}
	// code from http://stackoverflow.com/questions/4356289/php-random-string-generator
//-----------------------------------------
// check in
	// 1. activate customerService user
	// 2. set room state to unavailable 
	// 3. create customer object

	public function checkin($room,$billNumber){
		$customerServiceRepository = new CustomerServiceRepository();
		$id=$customerServiceRepository->getIDbyRoom($room);
		$obj = new CustomerService();
		$obj->getCustomerService($id);
		$obj->setBillNumber($billNumber);
		$obj->setPassword($this->generateRandomString(6));
		$obj->setState(true);
		$obj->saveToDB();

		$roomRepository = new RoomRepository();
		$roomID = $roomRepository->getID($room);
		$roomObj = new Room();
		$roomObj->getRoom($roomID);
		$roomObj->setAvailable(false);
		$roomObj->saveToDB();
	}

	public function reqCheckRoom($room){
		$customerServiceRepository = new CustomerServiceRepository();
		$id=$customerServiceRepository->getIDbyRoom($room);
		$obj = new CustomerService();
		$obj->getCustomerService($id);
		$obj->setState(false);
		$obj->saveToDB();

		$roomRepository = new RoomRepository();
		$roomId = $roomRepository->getID($room);
		$roomObj = new Room();
		$roomObj->getRoom($roomId);
		$roomObj->setAvailable(1);
		$roomObj->saveToDB();

		$requestRepository = new RequestRepository();
		$id = $requestRepository->newRequest();
		$requestRepository->setType($id, 3);
		$requestRepository->setRoom($id, $room);
		$requestRepository->setBillNumber($id, $obj->getBillNumber());
		$requestRepository->setCustomerServiceID($id, 0);
		$requestRepository->setState($id, 0);
	}

	public function addGuest($data){
		$customerRepository = new CustomerRepository();
		$id = $customerRepository->newCustomer();
		$customerRepository->setName($id,$data['name']);
		$customerRepository->setSurname($id,$data['surname']);
		$customerRepository->setNationalID($id,$data['nationalID']);
		$customerRepository->setDetail($id,$data['detail']);
		$customerRepository->setBillNumber($id,$data['billNumber']);
		$customerRepository->setState($id,true);
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