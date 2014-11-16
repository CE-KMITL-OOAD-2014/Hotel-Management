<?php 
class StaffRepository{
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB

	public function isExist($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	} 

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

	public function newStaff(){ 
		$tmp = new StaffDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

	public function del($id){ 
		$tmp = StaffDB::find($id);
		$tmp->delete();
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get ID of Object by username

	public function getID($username){
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

	public function getUserID($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->userID;
		}
		else {
			return NULL;
		}		
	}
	public function getStaffID($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->staffID;
		}
		else {
			return NULL;
		}		
	}
	public function getName($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->name;
		}
		else {
			return NULL;
		}		
	}
	public function getIDnumber($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->IDnumber;
		}
		else {
			return NULL;
		}		
	}
	public function getLocation($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->location;
		}
		else {
			return NULL;
		}		
	}
	public function getEmail($id){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			return $tmp->email;
		}
		else {
			return NULL;
		}		
	}
	public function getTel($id){
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

	public function setUserID($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->userID=$data;
			$tmp->save();
		}
		else {}
	}
	public function setStaffID($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->staffID=$data;
			$tmp->save();
		}
		else {}
	}
	public function setName($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->name=$data;
			$tmp->save();
		}
		else {}
	}
	public function setIDnumber($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->IDnumber=$data;
			$tmp->save();
		}
		else {}
	}
	public function setLocation($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->location=$data;
			$tmp->save();
		}
		else {}
	}
	public function setEmail($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->email=$data;
			$tmp->save();
		}
		else {}
	}
	public function setTel($id,$data){
		$tmp = StaffDB::find($id);
		if($tmp!=NULL){
			$tmp->tel=$data;
			$tmp->save();
		}
		else {}
	}
}
 ?>