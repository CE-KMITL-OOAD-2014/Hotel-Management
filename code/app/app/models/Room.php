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

	function __construct()
	{
		$this->id=NULL;
		$this->roomNumber=NULL;
		$this->price=NULL;
		$this->bed=NULL;
		$this->roomType=NULL;
		$this->available=NULL;
		$this->maintainancing=NULL;
		$this->clean=NULL;
	}

//-----------------------------------------
// Get
	public static function getRoom($id){
		if(RoomRepository::isExist($id)){
			$obj = new Room();
			$obj->setId($id);
			$obj->setRoomNumber(RoomRepository::getRoomNumber($id));
			$obj->setPrice(RoomRepository::getPrice($id));
			$obj->setBed(RoomRepository::getBed($id));
			$obj->setRoomType(RoomRepository::getRoomType($id));
			$obj->setAvailable(RoomRepository::getAvailable($id));
			$obj->setMaintainancing(RoomRepository::getMaintainancing($id));
			$obj->setClean(RoomRepository::getClean($id));
			return $obj;
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
		RoomRepository::setMaintainancing($this->getID(), $this->getMaintainancing());
		RoomRepository::setClean($this->getID(), $this->getClean());
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
	 public function getMaintainancing(){
	 	return $this->maintainancing;
	 }
	 public function getClean(){
	 	return $this->clean;
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
	 public function setMaintainancing($tmp){
	 	$this->maintainancing=$tmp;
	 }
	 public function setClean($tmp){
	 	$this->clean=$tmp;
	 }

//-----------------------------------------
}
 ?>