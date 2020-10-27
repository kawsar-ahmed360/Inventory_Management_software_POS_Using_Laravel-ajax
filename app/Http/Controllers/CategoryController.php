<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorys;
class CategoryController extends Controller
{
    public function viewcategory(){

    	$data['cat'] = categorys::get();

    	return view('backend/admin/category/view_cat',$data);
    }

    public function Savecategory(Request $Request){

    	if($Request->ajax()){

    		$cat = new categorys();
    		$cat->name = $Request->name;
    		$cat->status = 1;
    		$cat->save();
    	}
    }

    public function viewcategory_ajax(){

    	$data['cat'] = categorys::get();

    	return view('backend/admin/category/view_ajax',$data);
    }

    public function Deactivecategory_ajax(Request $Request){

    	if ($Request->ajax()) {
    		
    		$de = categorys::find($Request->CatId);
    		$de->status =2;
    		$de->save();
    	}
    }

    public function Activecategory_ajax(Request $Request){
    	if($Request->ajax()){

    		$ac = categorys::find($Request->CardId);
    		$ac->status = 1;
    		$ac->save();
    	}
    }

    public function Deletecategory_ajax(Request $Request){

    	if ($Request->ajax()) {
            
            $ac = categorys::find($Request->CatId);
            $ac->delete();
    	}
    }
}
