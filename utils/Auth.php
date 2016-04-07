<?php
require_once 'Log.php';
require_once 'Input.php';
require_once '../models/User.php';

// $log = new Log("password");


class Auth

{
	
	
	// public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	// public static function checkUser($username)

	// {
	// 	$user = User::findUsername($username);
	// 	self::$username = $user->attributes['username'];
	// 	self::$password = $user->attributes['password'];
	// }


	public static function attempt($username, $password)
	
	{
		$user = User::findUsername($username);
		// $log = new Log("ERROR");
		// $logInfo = new LOG("INFO");
		if (!is_null($user)) {
		if (password_verify($password, $user->password)) 
		{
    	 $_SESSION['logged_in_user'] = serialize($user);
    	 return true;
    	 // $logInfo->logInfo("User " . $username . " is logged in. ");
    	 
    	 
    	} else  {
			  	
			  	
    			return false;
				
				// $log->logError("login Info incorrect!!");
			  	// echo "You are WRONG!!!!";
			  }	
		}	else {

			return false;
		}  
	}


	public static function check()
	
	{

		if (isset($_SESSION['logged_in_user']))
		{
			return true;
		
		} else {

			return false;
		}

	}

	
	public static function user()
	
	{
	 
	 return unserialize($_SESSION['logged_in_user']);

			
	}

	public static function logout()

	{

    	session_unset();
    	session_destroy();
    	session_regenerate_id();
		
    	

	}

	



}
?>