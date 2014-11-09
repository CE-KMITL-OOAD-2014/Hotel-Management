<?php 
class GlobalRepository {

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get data from database

	public static function getBillNumber(){
		$tmp = GlobalDB::find(1);
		$tmp->data = ($tmp->data)+1;
		$tmp->save();
		return $tmp->data;		
	}

}
 ?>