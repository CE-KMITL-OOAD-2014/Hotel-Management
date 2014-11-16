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
		$userRepository = new UserRepository();
		if($userRepository->isExist($id)){
			$this->getUser($id);
			$customerServiceRepository = new CustomerServiceRepository();
			$cusServId = $customerServiceRepository->getID($this->getUsername());
			$this->setState($customerServiceRepository->getState($cusServId));
			$this->setRoom($customerServiceRepository->getRoom($cusServId));
			$this->setMealReqID($customerServiceRepository->getMealReqID($cusServId));
			$this->setCleanReqID($customerServiceRepository->getCleanReqID($cusServId));
			$this->setBillNumber($customerServiceRepository->getBillNumber($cusServId));
		}
		else{
		}
	}
//-----------------------------------------
// save
	public function saveToDB(){
		$userRepository = new UserRepository();
		$customerServiceRepository = new CustomerServiceRepository();
		$id = $customerServiceRepository->getID($this->getUsername());
		$customerServiceRepository->setState($id, $this->getState());
		$customerServiceRepository->setRoom($id, $this->getRoom());
		$customerServiceRepository->setCleanReqID($id, $this->getCleanReqID());
		$customerServiceRepository->setMealReqID($id, $this->getMealReqID());
		$customerServiceRepository->setBillNumber($id, $this->getBillNumber());
		$userRepository->setPassword($this->getId(), $this->getPassword());
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
		$requestRepository = new RequestRepository();
		$id = $requestRepository->newRequest();
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
		$requestRepository = new RequestRepository();
		$id = $requestRepository->newRequest();
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

	public function delFromDB(){
		$customerServiceRepository = new CustomerServiceRepository();
		$id = $customerServiceRepository->getID($this->getUsername());
		if($customerServiceRepository->isExist($id)){
			parent::delFromDB();
			$customerServiceRepository->del($id);
		}
		else {
		}
	}
//-----------------------------------------
}


?>