<?php 
class RequestRepository{
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit

	public function isExist($id){
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

	public function newRequest(){
		$tmp = new RequestDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	
	public function setType($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->type=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setRoom($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->room=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setBillNumber($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->billNumber=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setCustomerServiceID($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->customerServiceID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setState($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->state=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setMealID($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->mealID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setDate($id,$data){
		$tmp = RequestDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->date=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	
	public function getType($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->type;
		}
		else {
			return NULL;
		}
	}
	public function getRoom($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->room;
		}
		else {
			return NULL;
		}
	}
	public function getBillNumber($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->billNumber;
		}
		else {
			return NULL;
		}
	}
	public function getCustomerServiceID($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->customerServiceID;
		}
		else {
			return NULL;
		}
	}
	public function getState($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->state;
		}
		else {
			return NULL;
		}
	}
	public function getMealID($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->mealID;
		}
		else {
			return NULL;
		}
	}
	public function getDate($id){
		$tmp = RequestDB::find($id);
		if($tmp!=NULL){
			return $tmp->date;
		}
		else {
			return NULL;
		}
	}
}
 ?>