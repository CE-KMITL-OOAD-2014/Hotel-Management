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
	private $number;

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
			4	x		x			x			x		x			1

		Clean :
				add | accept | complete | cancel
			0	1		0			0		0
			1	1		1			0		0
			2	1		1			1		0
			3 	x		x			x		1


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
	 	$this->number=NULL;
	}
//-----------------------------------------
// Get
	public function getRequest($id){
		if(RequestRepository::isExist($id)){
			$this->setId($id);
	 		$this->setType(RequestRepository::getType($id));
	 		$this->setRoom(RequestRepository::getRoom($id));
	 		$this->setBillNumber(RequestRepository::getBillNumber($id));
	 		$this->setCustomerServiceID(RequestRepository::getCustomerServiceID($id));
	 		$this->setState(RequestRepository::getState($id));
	 		$this->setMealID(RequestRepository::getMealID($id));
	 		$this->setNumber(RequestRepository::getNumber($id));
		}
		else{
		}
	}

//-----------------------------------------
// save
	public function saveToDB(){
		//parent::saveToDB();
		RequestRepository::setType($this->getID(), $this->getType());
		RequestRepository::setRoom($this->getID(), $this->getRoom());
		RequestRepository::setBillNumber($this->getID(), $this->getBillNumber());
		RequestRepository::setCustomerServiceID($this->getID(), $this->getCustomerServiceID());
		RequestRepository::setState($this->getID(), $this->getState());
		RequestRepository::setMealID($this->getID(), $this->getMealID());
		RequestRepository::setNumber($this->getID(), $this->getNumber());
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
	public function getNumber(){
		return $this->number;
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
	public function setNumber($data){
		$this->number=$data;
	}

}
 ?>