<?php 
class CustomerService extends User{
	private $state;
	private $room;
	private $cleanReqID;
	private $mealReqID;
	private $billNumber;
//-----------------------------------------
//Constructor
	public function __construct(){
		parent::__construct();
		$state = false;
		$room = 0;
		$cleanReqID = 0;
		$mealReqID = 0;
		$billNumber = 0;
	}
//-----------------------------------------
// Get customer service Object (use id of the User(parent class) not id of this field)

	public static function getCustomerService($id){
		if(UserRepository::isExist($id)){
			$customerObj = new CustomerService();
			$customerObj->setId($id);
			$customerObj->setUsername(UserRepository::getUsername($id));
			$customerObj->setPassword(UserRepository::getPassword($id));
			$customerObj->setRole(UserRepository::getRole($id));

			$cusServId = CustomerServiceRepository::getID($customerObj->getUsername());
			$customerObj->setState(CustomerServiceRepository::getState($cusServId));
			$customerObj->setRoom(CustomerServiceRepository::getRoom($cusServId));
			$customerObj->setMealReqID(CustomerServiceRepository::getMealReqID($cusServId));
			$customerObj->setCleanReqID(CustomerServiceRepository::getCleanReqID($cusServId));
			$customerObj->setBillNumber(CustomerServiceRepository::getBillNumber($cusServId));
			return $customerObj;
		}
		else{
		}
	}
//-----------------------------------------
// save
	public function saveToDB(){
		//parent::saveToDB();
		$id = CustomerServiceRepository::getID($this->getUsername());
		CustomerServiceRepository::setState($id, $this->getState());
		CustomerServiceRepository::setRoom($id, $this->getRoom());
		CustomerServiceRepository::setCleanReqID($id, $this->getCleanReqID());
		CustomerServiceRepository::setMealReqID($id, $this->getMealReqID());
		CustomerServiceRepository::setBillNumber($id, $this->getBillNumber());
	}

//-----------------------------------------
//get set method
	public function getState(){
		return $this->state;
	}

	public function getCleanReqID(){
		return $this->cleanReqID;
	}
	public function getMealReqID(){
		return $this->mealReqID;
	}

	public function getRoom(){
		return $this->room;
	}

	public function getBillNumber(){
		return $this->billNumber;
	}

	public function setState($data){
		$this->state = $data;
	}

	public function setCleanReqID($data){
		$this->cleanReqID = $data;
	}
	public function setMealReqID($data){
		$this->mealReqID = $data;
	}

	public function setRoom($data){
		$this->room = $data;
	}

	public function setBillNumber($data){
		$this->billNumber = $data;
	}
}


?>