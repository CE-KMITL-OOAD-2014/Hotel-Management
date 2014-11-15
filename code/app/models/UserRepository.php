<?php 
/**
* 
*/
class userRepository
{
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// check if exsit this user by search from DB

	public static function isExist($id){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	} 

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// new user

	public static function newUser(){
		$tmp = new UserDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

	public static function del($id){ 
		$tmp = UserDB::find($id);
		$tmp->delete();
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get ID of Object by username

	public static function getID($username){
		$tmp = UserDB::where('username','=',$username)->get();
		if(count($tmp)!=0){
			return $tmp->id;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get data from database

	public static function getRole($id){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			return $tmp->role;
		}
		else {
			return NULL;
		}
	}
	public static function getUsername($id){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			return $tmp->username;
		}
		else {
			return NULL;
		}
	}
	public static function getPassword($id){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			return $tmp->password;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// Seve data to database

	public static function setRole($id,$data){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			$tmp->role=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setUsername($id,$data){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			$tmp->username=$data;
			$tmp->save();
		}
		else {}
	}
	public static function setPassword($id,$data){
		$tmp = UserDB::find($id);
		if($tmp!=NULL){
			$tmp->password=$data;
			$tmp->save();
		}
		else {}
	}
}
 ?>