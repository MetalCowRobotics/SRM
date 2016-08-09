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
        $user = Socialite::driver('slack')->user();
        
        $accessTokenResponseBody = $user->accessTokenResponseBody;
/*
        $validate = Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
*/
        $userModel = User::create([
            'name' => $user->name,
            'organization_id' => $user->organization_id,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'id' => $user->id,
        ]);
        Log::info("User id : ".$user->id);
        Log::info("Org id : ".$user->organization_id);
        /*if(Auth::attempt([
            'name'=>$user->name,
            'email'=>$user->email,
            'avatar'=>$user->avatar,
            'id'=> $user->id,
            'organization_id'=>$user->organization_id,
            'password'=>'thisneedstoexist',
        ],true,true))
        {
            Log::info("worked");
        }else{
            Log::info("did not work");
        }*/
        Auth::onceBasic($user->email);


        return redirect('/');
    
    } 

/*
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
*/
}
