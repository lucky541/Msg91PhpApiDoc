<?php
require_once('Config.php');

onCreateMethod();

 function onCreateMethod(){
    
   // creating an object of msg91
 	$msg91 = new Msg91(AUTH_KEY,BASE_URL);
   

    //ADD_CLIENTS($msg91);

    //LIST_CLIENTS($msg91);

    //UPDATE_CLIENTS_BALANCE($msg91);

    //MANAGE_CLIENTS($msg91);

    //FORGET_PASSWORD($msg91);

   //VIEW_OWN_PROFILE($msg91);

    //VIEW_ACCOUNT_EXPIRY_DATE($msg91);

    //VIEW_CLIENT_PROFILE($msg91);
   
   // CHANGE_CLIENT_PASSWORD($msg91);

   // CREDIT_HISTORY($msg91);


  }

  function ADD_CLIENTS($msg91){
	$user_full_name     =   "fname lname";     //(varchar)	Full name of user
	$user_name          =   "user_name";   //(varchar) User's name
	$user_mobile_number =   "user_mobile_number";        //(int) User's mobile
	$user_email         =   "user_email";   //(varchar) User's email
	$user_company_name  =   "user_company_name";         //(varchar) User's company name
	$user_industry      =   "user_industry";         //(varchar) User's industry
	$user_expiry        =    "user_expiry";         //(int) Expiry date of user's account
	$user_country_code  =    "user_country_code";               //(int) User country code

	$data = array( "authkey" => AUTH_KEY,
	               "user_full_name" => $user_company_name,  
	               "user_name"=> $user_name,           
	                "user_mobile_number" =>$user_mobile_number,
	                "user_email" => $user_email,       
	                "user_company_name"=>$user_company_name,  
	                 "user_industry"=> $user_industry,    
	                "user_expiry" => $user_expiry,      
	                "user_country_code" => $user_country_code,
	              );

	//Return the client ID on successful registration
	$output = $msg91->reseller->addClient($data);

	print_r($output);
  }

  function LIST_CLIENTS($msg91){
  	$data = array( "authkey" => AUTH_KEY,
              );

	//Return the client ID on successful registration
	$output = $msg91->reseller->listClient($data);
	print_r($output);
  }

  function UPDATE_CLIENTS_BALANCE($msg91){
	 $client_id = "client_id"; // int
	$sms = 2;             
	$accounttype = "1";  //string Account Type (1 or 4)
	$type       ="1";     //string Trasaction type (1-add or 2-reduce)
	$price      = "1";     //int price 
	$description  ="some description";

	$data = array( "authkey" => AUTH_KEY,
	       "client_id" => $client_id,  
	       "sms"=> $sms,           
	        "accounttype" =>$accounttype,
	        "type" => $type,       
	        "price"=>$price,  
	        "description"=> $description,    
	      );

	//Return the client ID on successful registration
	$output = $msg91->reseller->updateClientsBalance($data);

	print_r($output);
  }

  function MANAGE_CLIENTS($msg91){
  	 $client_id =  "client_id"; // Client's ID or client username
  	 $status = "1"; //status
    
    $data = array( "authkey" => AUTH_KEY,
  	 	             "client_id" =>$client_id,
  	 	             "status" =>$status
	              );
  	 $output = $msg91->reseller->manageClients($data);
	print_r($output);

  }

  function FORGET_PASSWORD($msg91){
  	 $client_name = "client_id"; // client_id

  	 $data = array( "authkey" => AUTH_KEY,
  	 	             "client_name" =>$client_name,
	              );
  	 $output = $msg91->reseller->forgetPassword($data);
	print_r($output);
  }

  function VIEW_OWN_PROFILE($msg91){
 

	$data = array( "authkey" => AUTH_KEY,
	              );

	//Return the client ID on successful registration
	$output = $msg91->reseller->viewOwnProfile($data);
	print_r($output);

  }

  function VIEW_ACCOUNT_EXPIRY_DATE($msg91){

	$data = array( "authkey" => AUTH_KEY,
	              );
	//Return the client ID on successful registration
	$output = $msg91->reseller->viewAccountExpiryDae($data);
	print_r($output);
  }

  function VIEW_CLIENT_PROFILE($msg91){
     $client_id = "client_id";
     $data = array( "authkey" => AUTH_KEY,
	             "client_id"=>$client_id,
              );

		//Return the client ID on successful registration
		$output = $msg91->reseller->viewClientProfile($data);
		print_r($output);
  }

  function CHANGE_CLIENT_PASSWORD($msg91){
     $client_id = "client_id";
	$client_pass = "client_pass";

	$data = array( 
					"authkey" => AUTH_KEY,
		            "clientmsg91name"=>$client_id,
		            "clientPassword"=>$client_pass,
	              );

	//Return the client ID on successful registration
	$output = $msg91->reseller->changeClientPassword($data);
	print_r($output);
  } 

  function CREDIT_HISTORY($msg91){
		 $data = array( "authkey" => AUTH_KEY,
		              );
		//Return the client ID on successful registration
		$output = $msg91->reseller->creditHistory($data);
	    print_r($output);
  }