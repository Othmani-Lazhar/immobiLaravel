<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseSessionStorage;
session_start();
class LoginController extends Controller
{

    public  function __construct(){
        ParseClient::initialize( '70b7570c-b036-493e-ba56-451b60138713', 'Mfg4czNufOKKJfgj84FbxXPHjcb88dN0', 'oxBWG5UlCsfRQOj0mfi0eDz654Ct8wdG' );
        ParseClient::setServerURL('https://parse.buddy.com/','parse');
        // set session storage
        ParseClient::setStorage( new ParseSessionStorage() );
    }


    public function logout(Request $request)
    {
        try {


            ParseUser::logOut();
            // return View('welcome');
        } catch (ParseException $error) {
            // The login failed. Check error to see why.
            return View('index');
        }



    }

    public function login()
    {
       /* $currentUser = ParseUser::getCurrentUser();
        if ($currentUser) {
            return View('index');
        } else {
            return View('auth/login');
        }*/

        return View('vendor/adminlte/login');
    }

    public function loginPost(Request $request)
    {
        try {
            $username = $request->input('email');
            $pass = $request->input('password');
            $user = ParseUser::logIn($username, $pass);
            // Do stuff after successful login.
            echo "You are Logged in !!!";
        } catch (ParseException $error) {
            // The login failed. Check error to see why.
            // return View('welcome');
        }
    }



}
