<?php 
class Requests
{
	private $id;
	private $type;
	private $room;
	private $billNumber;
	private $customerServiceID;
	private $state;
	private $mealID;
	private $date;

	/*
	type : 1 = clean
		 : 2 = meal
		 : 3 = check room

	State Description :
		Meal :
				add | cooking | act Serve | served | complete | cancel
			0	1		0			0			0		0			0
			1	1		1			0			0		0			0
			2	1		1			1			0		0			0
			2	1		1			1			1		0			0
			3 	1		1			1			1		1			0
			9	x		x			x			x		x			1

		Clean :
				add | accept | complete | cancel
			0	1		0			0		0
			1	1		1			0		0
			2	1		1			1		0
			9 	x		x			x		1


		Check room :
				add | accept | complete
			0	1		0		0
			1	1		1		0
			2	1		1		1


	*** use customerServiceID for refer to user
	*** use billNumber to add Bill(will do after this)
	*/

	public function __construct()
	{
	 	$this->id=NULL;
	 	$this->type=NULL;
	 	$this->room=NULL;
	 	$this->billNumber=NULL;
	 	$this->customerServiceID=NULL;
	 	$this->state=NULL;
	 	$this->mealID=NULL;
	 	$this->date=NULL;
	}
//-----------------------------------------
// Get
	public function getRequest($id){
		$requestRepository = new RequestRepository();
		if($requestRepository->isExist($id)){
			$this->setId($id);
	 		$this->setType($requestRepository->getType($id));
	 		$this->setRoom($requestRepository->getRoom($id));
	 		$this->setBillNumber($requestRepository->getBillNumber($id));
	 		$this->setCustomerServiceID($requestRepository->getCustomerServiceID($id));
	 		$this->setState($requestRepository->getState($id));
	 		$this->setMealID($requestRepository->getMealID($id));
	 		$this->setDate($requestRepository->getDate($id));
		}
		else{
		}
	}

//-----------------------------------------
// save
	public function saveToDB(){
		$requestRepository = new RequestRepository();
		$requestRepository->setType($this->getID(), $this->getType());
		$requestRepository->setRoom($this->getID(), $this->getRoom());
		$requestRepository->setBillNumber($this->getID(), $this->getBillNumber());
		$requestRepository->setCustomerServiceID($this->getID(), $this->getCustomerServiceID());
		$requestRepository->setState($this->getID(), $this->getState());
		$requestRepository->setMealID($this->getID(), $this->getMealID());
		$requestRepository->setDate($this->getID(), $this->getDate());
	}
//-----------------------------------------
// get
	public function getId(){
		return $this->id;
	}
	public function getType(){
		return $this->type;
	}
	public function getRoom(){
		return $this->room;
	}
	public function getBillNumber(){
		return $this->billNumber;
	}
	public function getCustomerServiceID(){
		return $this->customerServiceID;
	}
	public function getState(){
		return $this->state;
	}
	public function getMealID(){
		return $this->mealID;
	}
	public function getDate(){
		return $this->date;
	}

	public function setId($data){
		$this->id=$data;
	}
	public function setType($data){
		$this->type=$data;
	}
	public function setRoom($data){
		$this->room=$data;
	}
	public function setBillNumber($data){
		$this->billNumber=$data;
	}
	public function setCustomerServiceID($data){
		$this->customerServiceID=$data;
	}
	public function setState($data){
		$this->state=$data;
	}
	public function setMealID($data){
		$this->mealID=$data;
	}
	public function setDate($data){
		$this->date=$data;
	}

}
 ?>