<?php 
class MealRepository{

	public static function isExist($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public static function newMeal(){
		$tmp = new MealDB();
		$tmp->save();
		return $tmp->id;
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		public static function del($id){ 
		$tmp = MealDB::find($id);
		$tmp->delete();
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public static function getName($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return $tmp->name;
		}
		else {
			return NULL;
		}
	}
	public static function getPic($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return $tmp->pic;
		}
		else {
			return NULL;
		}
	}
	public static function getPrice($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return $tmp->price;
		}
		else {
			return NULL;
		}
	}
	public static function getDesc($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return $tmp->desc;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -	

	public static function setName($id, $data){
	 	$tmp = MealDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->name=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setPic($id, $data){
	 	$tmp = MealDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->pic=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setPrice($id, $data){
	 	$tmp = MealDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->price=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setDesc($id, $data){
	 	$tmp = MealDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->desc=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
}
 ?>