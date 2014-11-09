<?php 
class Request
{
	private $id;
	private $room;
	private $active;
	private $acceptorStaffID;
	private $accepted;
	private $mealID;

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