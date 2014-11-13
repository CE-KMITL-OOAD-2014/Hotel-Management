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

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	
	public static function setType($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->type=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setRoom($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->room=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setBillNumber($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->billNumber=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setCustomerServiceID($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->customerServiceID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setState($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->state=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setMealID($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->mealID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setNumber($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->number=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	
	public static function getType($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->type;
		}
		else {
			return NULL;
		}
	}
	public static function getRoom($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->room;
		}
		else {
			return NULL;
		}
	}
	public static function getBillNumber($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->billNumber;
		}
		else {
			return NULL;
		}
	}
	public static function getCustomerServiceID($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->customerServiceID;
		}
		else {
			return NULL;
		}
	}
	public static function getState($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->state;
		}
		else {
			return NULL;
		}
	}
	public static function getMealID($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->mealID;
		}
		else {
			return NULL;
		}
	}
	public static function getNumber($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->number;
		}
		else {
			return NULL;
		}
	}
}
 ?>