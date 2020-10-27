<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use App\User;
class socialitecontroller extends Controller
{
    

       public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        
      
      $login = User::where('gitId',$user->getId())->where('email',$user->getEmail())->first();
        if ($login) {

        	 Auth()->login($login);

        	 return redirect()->route('home');
        
        }else{

        	$login = User::Create([
                
               'gitId'=>$user->getId(),
				'name'=>$user->getName(),
				'email'=>$user->getEmail(),
				 'gitkey'=>'github',
        	]);

        	Auth()->login($login);

        	 return redirect()->route('home');
        }
    }


}
