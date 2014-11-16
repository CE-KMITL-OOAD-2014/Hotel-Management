<?php 
class CustomerServiceRepository {
		//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB

	public function isExist($id){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			$tmp2 = CustomerServiceDB::find(CustomerServiceRepository::getID($tmp->username));
			if($tmp2!=NULL){
				return true;
			}
			else {
				return false;
			}
		}
		else {
			return false;
		}
	} 

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// New User

	public function newCustomerService(){ 
		$tmp = new CustomerServiceDB();
		$tmp->save();
		return $tmp->id;
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		public function del($id){ 
		$tmp = CustomerServiceDB::find($id);
		$tmp->delete();
	}	

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get ID of Object by username

	public function getID($username){
		$tmp = UserDB::where('username','=',$username)->get();
		if(count($tmp)!=0){
			$tmp = CustomerServiceDB::where('userID','=',$tmp[0]->id)->get();
			if(count($tmp)!=0){
				return $tmp[0]->id;
			}
			else return NULL;
		}
		else {
			return NULL;
		}
	}


	public function getIDbyRoom($room){
		$tmp = CustomerServiceDB::where('room','=',$room)->get();
		if(count($tmp)!=0){
			return $tmp[0]->userID;
		}
		else {
			return NULL;
		}
	}

	public function getIDbyBill($billId){
		$tmp = CustomerServiceDB::where('billNumber','=',$billId)->get();
		
		if(count($tmp)!=0){
			return $tmp[0]->userID;
		}
		else {
			return NULL;
		}
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get data from database

	public function getUserID($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->userID;
		}
		else {
			return NULL;
		}		
	}
	public function getState($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->state;
		}
		else {
			return NULL;
		}		
	}

	public function getRoom($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->room;

		}
		else {
			return NULL;
		}		
	}

	public function getCleanReqID($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->cleanReqID;
		}
		else {
			return NULL;
		}		
	}

	public function getMealReqID($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->mealReqID;
		}
		else {
			return NULL;
		}		
	}

	public function getBillNumber($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->billNumber;
		}
		else {
			return NULL;
		}		
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	// Seve data to database
	// all get, set in repo class use it own id in DB, not from parent DB

	public function setUserID($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->userID=$data;
			$tmp->save();
		}
		else {}
	}
	public function setState($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->state=$data;
			$tmp->save();
		}
		else {}
	}

	public function setRoom($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->room=$data;
			$tmp->save();
		}
		else {}
	}

	public function setCleanReqID($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->cleanReqID=$data;
			$tmp->save();
		}
		else {}
	}

	public function setMealReqID($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->mealReqID=$data;
			$tmp->save();
		}
		else {}
	}

	public function setBillNumber($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->billNumber=$data;
			$tmp->save();
		}
		else {}
	}
}
 ?>