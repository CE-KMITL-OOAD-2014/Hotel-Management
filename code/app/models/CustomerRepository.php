<?php 
class CustomerRepository {
		//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB

	public function isExist($id){
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

	public function newCustomer(){ 
		$tmp = new CustomerDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get ID of active Customer

	public function getID(){
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

	public function getBillNumber($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->billNumber;
		}
		else {
			return NULL;
		}
	}
	public function getName($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->name;
		}
		else {
			return NULL;
		}
	}
	public function getSurname($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->surname;
		}
		else {
			return NULL;
		}
	}
	public function getNationalID($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->nationalID;
		}
		else {
			return NULL;
		}
	}
	public function getDetail($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->detail;
		}
		else {
			return NULL;
		}
	}
	public function getState($id){
	 	$tmp = CustomerDB::find($id);
		if($tmp!=NULL){
			return $tmp->state;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// Save data to database

	public function setBillNumber($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->billNumber=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setName($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->name=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setSurname($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->surname=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setNationalID($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->nationalID=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setDetail($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->detail=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setState($id,$data){
		$tmp = CustomerDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->state=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
}
 ?>