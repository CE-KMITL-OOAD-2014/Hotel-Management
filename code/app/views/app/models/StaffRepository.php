<?php 
class StaffRepository{
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB

	public static function isExist($id){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			$tmp2 = StaffDB::find(StaffRepository::getID($tmp->username));
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

	public static function newStaff(){ 
		$tmp = new StaffDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get ID of Object by username

	public static function getID($username){
		$tmp = UserDB::where('username','=',$username)->get();
		if(count($tmp)!=0){
			$tmp = StaffDB::where('userID','=',$tmp[0]->id)->get();
			if(count($tmp)!=0){
				return $tmp[0]->id;
			}
			else return NULL;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get data from database

	public static function getUserID($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->userID;
		}
		else {
			return NULL;
		}		
	}
	public static function getStaffID($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->staffID;
		}
		else {
			return NULL;
		}		
	}
	public static function getName($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->name;
		}
		else {
			return NULL;
		}		
	}
	public static function getIDnumber($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->IDnumber;
		}
		else {
			return NULL;
		}		
	}
	public static function getLocation($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->location;
		}
		else {
			return NULL;
		}		
	}
	public static function getEmail($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->email;
		}
		else {
			return NULL;
		}		
	}
	public static function getTel($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->tel;
		}
		else {
			return NULL;
		}		
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	// Seve data to database

	public static function setUserID($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->userID=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setStaffID($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->staffID=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setName($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->name=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setIDnumber($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->IDnumber=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setLocation($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->location=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setEmail($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->email=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setTel($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->tel=$data;
			$tmp->save();
		}
		else {}
	}
}
 ?>