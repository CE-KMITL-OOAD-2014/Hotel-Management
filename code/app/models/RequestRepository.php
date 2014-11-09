<?php 
class RequestRepository{
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB

	public static function isExist($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	} 
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// new user

	public static function newRequest(){
		$tmp = new RequestDB();
		$tmp->save();
		return $tmp->id;
	}


}
 ?>