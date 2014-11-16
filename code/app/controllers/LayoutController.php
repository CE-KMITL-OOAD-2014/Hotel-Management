<?php
	class LayoutController extends BaseController{
//----------------------------------------------------------		
		public function maid(){
			$req2 = RequestDB::where('type','=',3)->where('state','=',0)->get();
			$req1 = RequestDB::where('type','=',1)->where('state','=',0)->get();
			if(count($req1)!=0 || count($req2)!=0){
				echo "<a href=\"/checkClean\"><footer class=\"text-center\" id=\"body-footer\" style=\"background: #c0392b;\"><h2>Request Update!!!</h2 style=\"color:white;\"></footer></a>";
			}
			else {
				echo "<footer class=\"text-center\" id=\"body-footer\" style=\"background: #1D5123;\"><h2 style=\"color:white;\">No Request</h2></footer>";
			}
		}

//----------------------------------------------------------		
		public function kitchen(){
			$req = RequestDB::where('type','=',2)->where('state','=',0)->get();
			if(count($req)!=0){
				echo "<a href=\"/checkOrder\"><footer class=\"text-center\" id=\"body-footer\" style=\"background: #FFC200;\"><h2>Request Update!!!</h2 style=\"color:white;\"></footer></a>";
			}
			else {
				echo "<footer class=\"text-center\" id=\"body-footer\" style=\"background: #590915;\"><h2 style=\"color:white;\">No Request</h2></footer>";
			}
		}

//----------------------------------------------------------		
		public function manager(){
			$req3 = RequestDB::where('type','=',3)->where('state','=',0)->get();
			$req2 = RequestDB::where('type','=',2)->where('state','=',0)->get();
			$req1 = RequestDB::where('type','=',1)->where('state','=',0)->get();
			if(count($req1)!=0 || count($req2)!=0 || count($req3)!=0){
				echo "<a href=\"/checkReq\"><footer class=\"text-center\" id=\"body-footer\" style=\"background: #CC1E2C;\"><h2>Request Update!!!</h2 style=\"color:white;\"></footer></a>";
			}
			else {
				echo "<footer class=\"text-center\" id=\"body-footer\" style=\"background: #3B3B3B;\"><h2 style=\"color:white;\">No Request</h2></footer>";
			}
		}
//----------------------------------------------------------
	}