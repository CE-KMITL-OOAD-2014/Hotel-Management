<?php 
class StaffRequestRepository{

	public function isExist($id){
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

	public function getID($userID){
		$tmp = StaffRequestDB::where('userID','=',$userID)->get();
		if(count($tmp)!=0){
			return $tmp[0]->id;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
	public function newStaffRequest(){
		$tmp = new StaffRequestDB();
		$tmp->save();
		return $tmp->id;
	}
	
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public function getUserID($id){
		$tmp = StaffRequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->userID;
		}
		else {
			return NULL;
		}
	}
	public function getRequestID($id){
		$tmp = StaffRequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->requestID;
		}
		else {
			return NULL;
		}
	}

	public function setUserID($id, $data){
		$tmp = StaffRequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->userID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setRequestID($id, $data){
		$tmp = StaffRequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->requestID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
}