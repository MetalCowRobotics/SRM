<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Log;

class AuthController extends Controller
{

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
 /*   public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }*/

    public function redirectToProvider()
    {   
        return Socialite::with('slack')->redirect();
    }
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('slack')->user();
        } catch ( Exception $e ) {
            return redirect('/');
        }

        $userModel = $this->findOrCreateUser($user); 
        //$accessTokenResponseBody = $user->accessTokenResponseBody;
        
        if(Auth::login($userModel, true))
        {
            Log::info("worked");
        }else{
            Log::info("did not work");
        }

        if(Auth::loginUsingId($user->id,true))
        {
            Log::info("worked -- 2");
        }else{
            Log::info("did not work -- 2");
        }

        if (Auth::check()) {
            Log::info('it works ya know');
        }   

        return redirect('/');
    
    } 
    private function findOrCreateUser($user)
    {
        if ($authUser = User::where('id', $user->id)->first()) {
            return $authUser;
        }

        return User::create([
            'name'=>$user->name,
            'email'=>$user->email,
            'avatar'=>$user->avatar,
            'id'=> $user->id,
            'organization_id'=>$user->organization_id,
            'password'=>'thisneedstoexist',
        ]);
    }

}
