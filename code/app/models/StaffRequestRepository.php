<?php 
class StaffRequestRepository{

	public static function isExist($id){
		$tmp = StaffRequestDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	// user id of user, not of staff

	public static function getID($userID){
		$tmp = StaffRequestDB::where('userID','=',$userID)->get();
		if(count($tmp)!=0){
			return $tmp[0]->id;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
	public static function newStaffRequest(){
		$tmp = new StaffRequestDB();
		$tmp->save();
		return $tmp->id;
	}
	
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public static function getUserID($id){
		$tmp = StaffRequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->userID;
		}
		else {
			return NULL;
		}
	}
	public static function getRequestID($id){
		$tmp = StaffRequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->requestID;
		}
		else {
			return NULL;
		}
	}

	public static function setUserID($id, $data){
		$tmp = StaffRequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->userID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setRequestID($id, $data){
		$tmp = StaffRequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->requestID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
}