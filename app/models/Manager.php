<?php 

class Manager extends Staff  {
	public function __construct()
	{
		parent::__construct();
	}
//-----------------------------------------
// Get Manager

	public static function getManager($id){
		if(UserRepository::isExist($id)){
			$user = new Manager();
			$user->setId($id);
			$user->setUsername(UserRepository::getUsername($id));
			$user->setPassword(UserRepository::getPassword($id));
			$user->setRole(UserRepository::getRole($id));
			$staffId = StaffRepository::getID($user->getUsername());
			$user->setStaffID(StaffRepository::getStaffID($staffId));
			$user->setName(StaffRepository::getName($staffId));
			$user->setIDnumber(StaffRepository::getIDnumber($staffId));
			$user->setLocation(StaffRepository::getLocation($staffId));
			$user->setEmail(StaffRepository::getEmail($staffId));
			$user->setTel(StaffRepository::getTel($staffId));
			return $user;
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
		RoomRepository::setAvaialable($id,$data['avaialable']);
		RoomRepository::setMaintainancing($id,$data['maintainancing']);
		RoomRepository::setClean($id,$data['clean']);
	}
}

 ?>