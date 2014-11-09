<?php 
class CustomerServiceRepository {
		//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB

	public static function isExist($id){
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

	public static function newCustomerService(){ 
		$tmp = new CustomerServiceDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get ID of Object by username

	public static function getID($username){
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


	public static function getIDbyRoom($room){
		$tmp = CustomerServiceDB::where('room','=',$room)->get();
		if(count($tmp)!=0){
			return $tmp[0]->userID;
		}
		else {
			return NULL;
		}
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get data from database

	public static function getUserID($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->userID;
		}
		else {
			return NULL;
		}		
	}
	public static function getState($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->state;
		}
		else {
			return NULL;
		}		
	}

	public static function getRoom($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->Room;
		}
		else {
			return NULL;
		}		
	}

	public static function getCleanReqID($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->cleanReqID;
		}
		else {
			return NULL;
		}		
	}

	public static function getMealReqID($id){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			return $tmp->mealReqID;
		}
		else {
			return NULL;
		}		
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	// Seve data to database

	public static function setUserID($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->userID=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setState($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->state=$data;
			$tmp->save();
		}
		else {}
	}

	public static function setRoom($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->room=$data;
			$tmp->save();
		}
		else {}
	}

	public static function setCleanReqID($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->cleanReqID=$data;
			$tmp->save();
		}
		else {}
	}

	public static function setMealReqID($id,$data){
		$tmp = CustomerServiceDB::find($id);
		if($tmp!=NULL){
			$tmp->mealReqID=$data;
			$tmp->save();
		}
		else {}
	}
}
 ?>