<?php 
class CustomerRepository {
		//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB

	public static function isExist($id){
		$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// New User

	public static function newCustomer(){ 
		$tmp = new CustomerDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get ID of active Customer

	public static function getID(){
		$tmp = CustomerDB::where('state','=',true)->get();
		if(count($tmp)!=0){
			for($i = 0 ; $i<count($tmp) ; $i++){
				$idTmp[$i] = $tmp[0]->id;
			}
			return $idTmp;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get data from database

	public static function getCustomerBillingID($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->customerBillingID;
		}
		else {
			return NULL;
		}
	}
	public static function getName($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->name;
		}
		else {
			return NULL;
		}
	}
	public static function getSurename($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->surename;
		}
		else {
			return NULL;
		}
	}
	public static function getNationalID($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->nationalID;
		}
		else {
			return NULL;
		}
	}
	public static function getDetail($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->detail;
		}
		else {
			return NULL;
		}
	}
	public static function getState($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->state;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// Seve data from database

	public static function setCustomerBillingID($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->customerBillingID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setName($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->name=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setSurename($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->surename=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setNationalID($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->nationalID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setDetail($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->detail=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setState($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->state=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
}
 ?>