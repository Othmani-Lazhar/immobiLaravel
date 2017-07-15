<?php

namespace App\Http\Controllers;
use Parse\ParseUser;
use Parse\ParseClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Parse\ParseSessionStorage;
use Parse\ParseFile;
use Illuminate\Http\UploadedFile;
session_start();
class SigupController extends Controller
{

    public  function __construct(){
        ParseClient::initialize( '70b7570c-b036-493e-ba56-451b60138713', 'Mfg4czNufOKKJfgj84FbxXPHjcb88dN0', 'oxBWG5UlCsfRQOj0mfi0eDz654Ct8wdG' );
        ParseClient::setServerURL('https://parse.buddy.com/','parse');
        // set session storage
        ParseClient::setStorage( new ParseSessionStorage() );
    }


    public function sigup()
    {

            return View('vendor/adminlte/register');

    }

    public function sigupPost(Request $request)
    {


        $file = $request->file('img');

        if ($request->hasFile('img')) {
           echo $request->file('img')->getPathname();
            // echo   $file ->getClientOriginalName();
          //  echo   "<img src ='".$file ->Path()."'/>";
        }


        try {
        $username = $request->input('username');
        $pass = $request->input('password');
        $email= $request->input('email');

        $file = ParseFile::createFromFile($file->path(), "image.jpg");
          $file->save();
        $user = new ParseUser();
       $user->set("username", $username);
        $user->set("password",$pass );
        $user->set("email", $email );
        $user->set("img", $file );
         // other fields can be set just like with ParseObject
        // $user->set("phone", "415-392-0202");
          $user->signUp();
            // Hooray! Let them use the app now.
        } catch (ParseException $ex) {
            // Show the error message somewhere and let the user try again.
            echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
        }

    }

}
