<?php 

class Room
{
	private $id;
	private $roomNumber;
	private $price;
	private $bed;
	private $roomType;
	private $available;
	private $maintainancing;
	private $clean;

	public function __construct()
	{
		$id=NULL;
		$roomNumber=NULL;
		$price=NULL;
		$bed=NULL;
		$roomType=NULL;
		$available=NULL;
		$maintainancing=NULL;
		$clean=NULL;
	}

//-----------------------------------------
// Get
	public function getRoom($id){
		if(RoomRepository::isExist($id)){
			$this->setId($id);
			$this->setRoomNumber(RoomRepository::getRoomNumber($id));
			$this->setPrice(RoomRepository::getPrice($id));
			$this->setBed(RoomRepository::getBed($id));
			$this->setRoomType(RoomRepository::getRoomType($id));
			$this->setAvailable(RoomRepository::getAvailable($id));
		}
		else{
			
		}
	}
//-----------------------------------------
// save
	public function saveToDB(){
		//parent::saveToDB();
		RoomRepository::setRoomNumber($this->getID(), $this->getRoomNumber());
		RoomRepository::setPrice($this->getID(), $this->getPrice());
		RoomRepository::setBed($this->getID(), $this->getBed());
		RoomRepository::setRoomType($this->getID(), $this->getRoomType());
		RoomRepository::setAvailable($this->getID(), $this->getAvailable());
	}
//-----------------------------------------
//get set method
	 public function getId(){
	 	return $this->id;
	 }
	 public function getRoomNumber(){
	 	return $this->roomNumber;
	 }
	 public function getPrice(){
	 	return $this->price;
	 }
	 public function getBed(){
	 	return $this->bed;
	 }
	 public function getRoomType(){
	 	return $this->roomType;
	 }
	 public function getAvailable(){
	 	return $this->available;
	 }


	 public function setId($tmp){
	 	$this->id=$tmp;
	 }
	 public function setRoomNumber($tmp){
	 	$this->roomNumber=$tmp;
	 }
	 public function setPrice($tmp){
	 	$this->price=$tmp;
	 }
	 public function setBed($tmp){
	 	$this->bed=$tmp;
	 }
	 public function setRoomType($tmp){
	 	$this->roomType=$tmp;
	 }
	 public function setAvailable($tmp){
	 	$this->available=$tmp;
	 }

//-----------------------------------------
// set Meal
		public function delFromDB(){
			if(RoomRepository::isExist($this->getId())){
				RoomRepository::del($this->getId());
			}
			else {
			}
		}
//-----------------------------------------
}
 ?>