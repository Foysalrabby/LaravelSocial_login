<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;  //Session must akan hote import korte hbe

class LoginRegisterController extends Controller
{

    //for logout
    function Githublogout(Request $request){

          $request->session()->flush();
          return redirect('/');  //home page login register page


    }



 //calling githhub Authntication this method and user login when github loginpage redirect
    function  CallGithub(){
     $CallingGitHubservice= Socialite::driver('github')->redirect();
     return $CallingGitHubservice;
    }
//github logincallback using this method //registration somoy github give data
  function GithubLoginCallback(){
      $user=Socialite::driver('github')->stateless()->user();
      $token = $user->token;
      $userId= $user->getId();
      $usernickname=$user->getNickname();
      $name =$user->getName();
      $Email =$user->getEmail();
      $img= $user->getAvatar();

      Session::put('token',$token);
      Session::put('userId',$userId);
      Session::put('usernickname',$usernickname);  //session dhore rakhbe jate browser dhukle login na chay
      Session::put('name',$name);
      Session::put('Email',$Email);
      Session::put('img',$img);


     $getcountvalue= DB::table('users')->where('email' , '=' , $Email)->count(); //user db table name and col name email

      //when user signup to store data in laravel user db store hobe jodi data age na thake
      if($getcountvalue == 0){
          DB::table("users")->insert([
              'name'=> $name,
              'email'=> $Email,       //like user table coloum name
              'user_id' => $userId ,
              'nick_name'=>$usernickname
          ]);
          return redirect('/dashboard');  //data na thakle dashborad data dibe

      }

      else{
          return redirect('/dashboard'); //data na thakle dashborad data dibe
      }

  }




}
