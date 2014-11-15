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
		RoomRepository::setMaintainancing($id,$data['maintainancing']);
		RoomRepository::setClean($id,$data['clean']);
	}
//-----------------------------------------
// Add new User 
	public function editRoom($data){
		$room =new Room();
		$room->getRoom($data['RoomID']);
		$room->setBed($data['bed']);
		$room->setPrice($data['price']);
		$room->setRoomType($data['roomType']);
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
}

 ?>