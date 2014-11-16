<?php 
class GlobalRepository {

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// get data from database

	public function getBillNumber(){
		$tmp = GlobalDB::where('name','=','billNumber')->get();
		$tmp[0]->data = ($tmp[0]->data)+1;
		$tmp[0]->save();
		return $tmp[0]->data;		
	}

	public function getCleanCharge(){
		$tmp = GlobalDB::where('name','=','cleanCharge')->get();
		return $tmp[0]->data;		
	}

}
 ?>