<?php 
class BillRepository{
	public static function isExist($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	// this will return as array of id of all bills which have the given billNumber(and it in unpaid state(0))

	public static function getID($billNumber){
		$tmp = BillDB::where('billNumber','=',$billNumber)->get();
		if(count($tmp)!=0){
			for($i=0;i$i<count($tmp);$i++){
				$idSet[$i] = $tmp[$i]->id;
			}
			return $idSet;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public static function newBill(){
		$tmp = new BillDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public static function getBillNumber($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->billNumber;
		}
		else {
			return NULL;
		}
	}
	public static function getType($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->type;
		}
		else {
			return NULL;
		}
	}
	public static function getDetail($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->detail;
		}
		else {
			return NULL;
		}
	}
	public static function getValue($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->value;
		}
		else {
			return NULL;
		}
	}
	public static function getState($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->state;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public static function setBillNumber(){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->billNumber=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setType(){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->type=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setDetail(){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->detail=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setValue(){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->value=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public static function setState(){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->state=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
} 
 ?>