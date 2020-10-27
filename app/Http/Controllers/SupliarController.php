<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supliars;
class SupliarController extends Controller
{
    public function viewSupliar(){
       
       $data['supliar'] = supliars::get();
    	return view('backend/admin/supliar/view_supliar',$data);

    }

    public function SaveSupliar(Request $Request){

    	$Request->validate([
         'name'=>'required|unique:supliars,name',
         'email'=>'required',
         'mobile'=>'required',
         'address'=>'required',


    	]);

    	if ($Request->ajax()) {
    		
    		$sup = new supliars();
    		$sup->name = $Request->name;
    		$sup->email = $Request->email;
    		$sup->mobile = $Request->mobile;
    		$sup->address = $Request->address;
    		$sup->status = 1;
    		$sup->save();

    		
    	}
    }


    public function supliarAjax(){


    	 $data['supliar'] = supliars::get();
    	return view('backend/admin/supliar/view_ajax_show',$data);
  

   }

   public function supliarAjaxdeactive(Request $Request){
            
            if ($Request->ajax()) {
            	
            	$up = supliars::find($Request->SupliarId);
            	$up->status=2;
            	$up->save();
            }

   }

   public function supliarAjaxactive(Request $Request){

   	if ($Request->ajax()) {

   		 $ac = supliars::find($Request->sup_Id);
   		 $ac->status = 1;
   		 $ac->save();
   	}
   }


   public function supliarAjaxdelete(Request $Request){

   	if ($Request->ajax()) {
   		
   		$del =supliars::find($Request->DelID);

   		$del->deleted(); 
   	}
   }

   public function supliarAjaxupdate(Request $Request){
      
      if ($Request->ajax()) {
      	  
      	  $up= supliars::find($Request->supId);
      	  $up->name = $Request->name;
      	  $up->email = $Request->email;
      	  $up->mobile = $Request->mobile;
      	  $up->address = $Request->address;
      	  $up->save();
      }

   }

 
}
