<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
class UserManageMentControlelr extends Controller
{
    public function userview(){
    
    $data['user'] = User::get();

    return view('backend/admin/user/view_user',$data);
  
    }

    public function profile_view(){

    	$id = Auth::user()->id;

    	$data['us'] = User::find($id);

    	return view('backend/admin/user/profile',$data);
    }

    public function profile_Save(Request $Request){

    	if ($Request->ajax()) {
    		
    		$update = User::find($Request->profileId);

    	$update->name = $Request->name;
    	$update->email = $Request->email;
    	$update->address = $Request->address;
    	$update->mobile = $Request->mobile;
    	$update->save();
  
  return redirect()->route('profile_Incl_view')->with('suc','ami');          

    	}
    }

    public function profile_Incl_view(){
     
     $id = Auth::user()->id;

    	$data['us'] = User::find($id);

    	return view('backend/admin/user/include/profile_data',$data);

    }


    function profile_image_Save(Request $Request){

    	$img = User::find($Request->profileId);

    	 if ($Request->hasFile('photo')) {
    	 	
    	 	$image = $Request->file('photo');

    	 	$fullname = time().'.'.$image->getClientOriginalExtension();

    	 	@unlink(public_path('backend/profile/').$img->photo);

    	 	Image::make($image)->resize(400,430)->save(public_path('backend/profile/'.$fullname));

    	 	
    	 	$img->photo = $fullname;
    	 	$img->save();

    	 	return $this->profile_view($Request);
    	 }
    }

    public function profile_iPass_Change(Request $Request){

    	 $Request->validate([
        'new_password'=>'required|min:6|same:Re_password',
        'Re_password'=>'required',
        ]);

    	if ($Request->ajax()) {
    		
    		if (Auth::attempt(['id'=>$Request->profileId,'password'=>$Request->current_password])) {
    			
    			$user = User::find($Request->profileId);
    			$user->password = bcrypt($Request->new_password);
    			$user->save();

    			return $this->profile_view($Request);
    		}
    	}
    }

}
