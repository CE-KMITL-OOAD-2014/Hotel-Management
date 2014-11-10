<?php 
class Request
{
	private $id;
	private $type;
	private $room;
	private $billNumber;
	private $customerServiceID;
	private $state;

	/*
	type : 1 = clean
		 : 2 = meal

	State Description :
		Meal :
				add | cooking | act Serve | served | complete | cancel
			0	1		0			0			0		0			0
			1	1		1			0			0		0			0
			2	1		1			1			0		0			0
			2	1		1			1			1		0			0
			3 	1		1			1			1		1			0
			4	1		0			0			0		0			1
			5	1		1			0			0		0			1
			6	1		1			1			0		0			1
			7	1		1			1			1		0			1

		Clean :
				add | accept | complete | cancel
			0	1		0			0		0
			1	1		1			0		0
			2	1		1			1		0
			3 	1		0			0		1
			4	1		1			0		1


	*** use customerServiceID for refer to user
	*** use billNumber to add Bill(will do after this)
	*/

	function __construct()
	{
	 $this->id=NULL;
	 $this->room=NULL;
	 $this->active=NULL;
	 $this->acceptorStaffID=NULL;
	 $this->accepted=NULL;
	 $this->mealID=NULL;
	}

// get
	public function getId(){
		return $this->id;
	}
	public function getRoom(){
		return $this->room;
	}
	public function getActive(){
		return $this->active;
	}
	public function getAcceptorStaffID(){
		return $this->acceptorStaffID;
	}
	public function getAccepted(){
		return $this->accepted;
	}
	public function getMealID(){
		return $this->mealID;
	}
// set
	public function setId($tmp){
		$this->id=$tmp;
	}
	public function setRoom($tmp){
		$this->room=$tmp;
	}
	public function setActive($tmp){
		$this->active=$tmp;
	}
	public function setAcceptorStaffID($tmp){
		$this->acceptorStaffID=$tmp;
	}
	public function setAccepted($tmp){
		$this->accepted=$tmp;
	}
	public function setMealID($tmp){
		$this->mealID=$tmp;
	}
//
}
 ?>