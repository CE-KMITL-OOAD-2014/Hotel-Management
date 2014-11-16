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
		$roomRepository = new RoomRepository();
		if($roomRepository->isExist($id)){
			$this->setId($id);
			$this->setRoomNumber($roomRepository->getRoomNumber($id));
			$this->setPrice($roomRepository->getPrice($id));
			$this->setBed($roomRepository->getBed($id));
			$this->setRoomType($roomRepository->getRoomType($id));
			$this->setAvailable($roomRepository->getAvailable($id));
		}
		else{
			
		}
	}
//-----------------------------------------
// save
	public function saveToDB(){
		$roomRepository = new RoomRepository();
		$roomRepository->setRoomNumber($this->getID(), $this->getRoomNumber());
		$roomRepository->setPrice($this->getID(), $this->getPrice());
		$roomRepository->setBed($this->getID(), $this->getBed());
		$roomRepository->setRoomType($this->getID(), $this->getRoomType());
		$roomRepository->setAvailable($this->getID(), $this->getAvailable());
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

		public function delFromDB(){
			$roomRepository = new RoomRepository();
			if($roomRepository->isExist($this->getId())){
				$roomRepository->del($this->getId());
			}
			else {
			}
		}
//-----------------------------------------
}
 ?>