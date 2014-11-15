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

	public function getCustomerService($id){
		if(UserRepository::isExist($id)){
			$this->getUser($id);

			$cusServId = CustomerServiceRepository::getID($this->getUsername());
			$this->setState(CustomerServiceRepository::getState($cusServId));
			$this->setRoom(CustomerServiceRepository::getRoom($cusServId));
			$this->setMealReqID(CustomerServiceRepository::getMealReqID($cusServId));
			$this->setCleanReqID(CustomerServiceRepository::getCleanReqID($cusServId));
			$this->setBillNumber(CustomerServiceRepository::getBillNumber($cusServId));
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

//-----------------------------------------

	public function addCleanRequest(){
		$id = RequestRepository::newRequest();
		$req = new Requests();
		$req->getRequest($id);
		$req->setType(1);
		$req->setRoom($this->getRoom());
		$req->setBillNumber($this->getBillNumber());
		$req->setCustomerServiceID($this->getID());
		$req->setState(0);
		$req->saveToDB();

		$this->setCleanReqID($id);
		$this->saveToDB();
	}

//-----------------------------------------

	public function addmealRequest($mealNumber){
		$id = RequestRepository::newRequest();
		$req = new Requests();
		$req->getRequest($id);
		$req->setType(2);
		$req->setRoom($this->getRoom());
		$req->setBillNumber($this->getBillNumber());
		$req->setCustomerServiceID($this->getID());
		$req->setState(0);
		$req->setMealID($mealNumber);
		$req->saveToDB();

		$this->setMealReqID($id);
		$this->saveToDB();
	}

//-----------------------------------------


	public function completeClean(){
		$reqTmp = new Requests();
		$reqTmp->getRequest($this->getCleanReqID());
		$reqTmp->setState(2);
		$reqTmp->saveToDB();

		$this->setCleanReqID(0);
		$this->saveToDB();
	}

//-----------------------------------------

	public function completeOrder(){
		$reqTmp = new Requests();
		$reqTmp->getRequest($this->getMealReqID());
		$reqTmp->setState(2);
		$reqTmp->saveToDB();

		$this->setMealReqID(0);
		$this->saveToDB();
	}

//-----------------------------------------
}


?>