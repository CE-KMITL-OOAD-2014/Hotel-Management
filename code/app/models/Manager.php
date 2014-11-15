<?php 

class Manager extends Staff  {
	public function __construct()
	{
		parent::__construct();
	}
//-----------------------------------------
// Get Manager

	public function getManager($id){
		if(UserRepository::isExist($id)){		
			$this->getStaff($id);
		}
		else{
			
		}
	}

//-----------------------------------------
// Add new Room

	public function addRoom($data){
		$id = RoomRepository::newRoom();
		RoomRepository::setRoomNumber($id,$data['roomNumber']);
		RoomRepository::setPrice($id,$data['price']);
		RoomRepository::setBed($id,$data['bed']);
		RoomRepository::setRoomType($id,$data['roomType']);
		RoomRepository::setAvailable($id,$data['available']);
	}
//-----------------------------------------
// Add new User 
	public function editRoom($data){
		$room =new Room();
		$room->getRoom($data['roomID']);
		$room->setBed($data['bed']);
		$room->setPrice($data['price']);
		$room->setRoomType($data['roomType']);
		$room->setAvailable($data['available']);
		$room->saveToDB();
	}

//-----------------------------------------
// Add new User 
	public function deleteRoom($id){
		$room =new Room();
		$room->getRoom($id);
		$room->delFromDB();
	}
//-----------------------------------------
// Add new User 
	public function cancelReq($reqID){
		$reqTmp = new Requests();
		$reqTmp->getRequest($reqID);
		$reqTmp->setState(9);
		$reqTmp->saveToDB();
	}
//-----------------------------------------
}

 ?>