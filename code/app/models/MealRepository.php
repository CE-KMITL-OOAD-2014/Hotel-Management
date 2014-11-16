<?php 
class MealRepository{

	public function isExist($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public function newMeal(){
		$tmp = new MealDB();
		$tmp->save();
		return $tmp->id;
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		public function del($id){ 
		$tmp = MealDB::find($id);
		$tmp->delete();
	}
	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public function getName($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return $tmp->name;
		}
		else {
			return NULL;
		}
	}
	public function getPic($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return $tmp->pic;
		}
		else {
			return NULL;
		}
	}
	public function getPrice($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return $tmp->price;
		}
		else {
			return NULL;
		}
	}
	public function getDesc($id){
		$tmp = MealDB::find($id);
		if($tmp!=NULL){
			return $tmp->desc;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -	

	public function setName($id, $data){
	 	$tmp = MealDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->name=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setPic($id, $data){
	 	$tmp = MealDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->pic=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setPrice($id, $data){
	 	$tmp = MealDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->price=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setDesc($id, $data){
	 	$tmp = MealDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->desc=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
}
 ?>