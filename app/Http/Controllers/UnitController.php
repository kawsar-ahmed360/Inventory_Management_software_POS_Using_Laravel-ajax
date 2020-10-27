<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\units;
class UnitController extends Controller
{
    public function viewUnits(){

    	$data['unit'] = units::get();

    	return view('backend/admin/unit/view_units',$data);
    }

    public function SaveUnits(Request $Request){
        
        if ($Request->ajax()) {
        	
        	$unit =new units();
        	$unit->name = $Request->name;
        	$unit->status =1;
        	$unit->save();
        }
    }

    public function units_view_ajax(){
      
      $data['unit'] = units::get();

    	return view('backend/admin/unit/ajax_view',$data);

    }

    public function units_Deactive_ajax(Request $Request){

    	if ($Request->ajax()) {
              
             $de = units::find($Request->UnitId);
             $de->status =2;
             $de->save(); 
    	}
    }

    public function units_Active_ajax(Request $Request){
     
     if ($Request->ajax()) {
              
             $de = units::find($Request->UnitId);
             $de->status =1;
             $de->save(); 
    	}

    }

    public function units_Delete_ajax(Request $Request){

    	 if ($Request->ajax()) {
              
             $de = units::find($Request->UniId);
             $de->delete();
    	}
    }

    public function units_Update_ajax(Request $Request){

    	if ($Request->ajax()) {

    		$up =units::find($Request->UnitId);
    		$up->name = $Request->name;
    		$up->save();
    	}
    }
}
