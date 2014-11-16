<?php 

class Manager extends Staff  {
	public function __construct()
	{
		parent::__construct();
	}
//-----------------------------------------
// Get Manager

	public function getManager($id){
		$userRepository = new UserRepository();
		if($userRepository->isExist($id)){		
			$this->getStaff($id);
		}
		else{
			
		}
	}

//-----------------------------------------

	public function addRoom($data){
		$roomRepository = new RoomRepository();
		$id = $roomRepository->newRoom();
		$roomRepository->setRoomNumber($id,$data['roomNumber']);
		$roomRepository->setPrice($id,$data['price']);
		$roomRepository->setBed($id,$data['bed']);
		$roomRepository->setRoomType($id,$data['roomType']);
		$roomRepository->setAvailable($id,$data['available']);
	}
//-----------------------------------------

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

	public function deleteRoom($id){
		$room =new Room();
		$room->getRoom($id);
		$room->delFromDB();
	}
//-----------------------------------------

	public function cancelReq($reqID){
		$reqTmp = new Requests();
		$reqTmp->getRequest($reqID);
		$reqTmp->setState(9);
		$reqTmp->saveToDB();
	}
//-----------------------------------------
}

 ?>