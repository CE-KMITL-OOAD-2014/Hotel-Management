<?php 
class CustomerService extends User{
	private $state;
	private $room;
	private $cleanReqID;
	private $mealReqID;
//-----------------------------------------
//Constructor
	public function __construct(){
		parent::__construct();
		$state = false;
	}
//-----------------------------------------
// Get
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
}


?>