<?php 
class RoomRepository{

	public function isExist($id){
		$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public function getID($roomNumber){
		$tmp = RoomDB::where('roomNumber','=',$roomNumber)->get();
		if(count($tmp)!=0){
			return $tmp[0]->id;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
	public function newRoom(){
		$tmp = new RoomDB();
		$tmp->save();
		return $tmp->id;
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		public function del($id){ 
		$tmp = RoomDB::find($id);
		$tmp->delete();
	}	
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	 public function getRoomNumber($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->roomNumber;
		}
		else {
			return NULL;
		}
	 }
	 public function getPrice($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->price;
		}
		else {
			return NULL;
		}
	 }
	 public function getBed($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->bed;
		}
		else {
			return NULL;
		}
	 }
	 public function getRoomType($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->roomType;
		}
		else {
			return NULL;
		}
	 }
	 public function getAvailable($id){
	 	$tmp = RoomDB::find($id);
		if($tmp!=NULL){
			return $tmp->available;
		}
		else {
			return NULL;
		}
	 }

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

	 public function setRoomNumber($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->roomNumber=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public function setPrice($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->price=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public function setBed($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->bed=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public function setRoomType($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->roomType=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }
	 public function setAvailable($id,$data){
	 	$tmp = RoomDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->available=$data;
		 	$tmp->save();
	 	}
	 	else{}
	 }

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
}