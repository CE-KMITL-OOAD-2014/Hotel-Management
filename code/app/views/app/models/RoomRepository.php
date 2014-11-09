<?php 
class RoomRepository{

	public static function isExist($id){
		$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public static function getID($roomNumber){
		$tmp = RoomDB::where('roomNumber','=',$roomNumber)->get();
		if(count($tmp)!=0){
			return $tmp[0]->id;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
	public static function newRoom(){
		$tmp = new RoomDB();
		$tmp->save();
		return $tmp->id;
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	 public static function getRoomNumber($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->roomNumber;
		}
		else {
			return NULL;
		}
	 }
	 public static function getPrice($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->price;
		}
		else {
			return NULL;
		}
	 }
	 public static function getBed($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->bed;
		}
		else {
			return NULL;
		}
	 }
	 public static function getRoomType($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->roomType;
		}
		else {
			return NULL;
		}
	 }
	 public static function getAvailable($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->available;
		}
		else {
			return NULL;
		}
	 }
	 public static function getMaintainancing($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->maintainancing;
		}
		else {
			return NULL;
		}
	 }
	 public static function getClean($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->clean;
		}
		else {
			return NULL;
		}
	 }

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

	 public static function setRoomNumber($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->roomNumber=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public static function setPrice($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->price=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public static function setBed($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->bed=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public static function setRoomType($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->roomType=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public static function setAvailable($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->available=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public static function setMaintainancing($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->maintainancing=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public static function setClean($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->clean=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
}