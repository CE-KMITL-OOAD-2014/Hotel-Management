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
}

 ?>