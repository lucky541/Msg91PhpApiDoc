# Msg91 PHP API Library

[![N|Solid](http://images.jdmagicbox.com/indore/t9/0731px731.x731.130801124923.p7t9/catalogue/msg-91-indore-irrtl.jpg)](https://nodesource.com/products/nsolid)

Msg91 PHP API doc .

  - Text SMS
  - Send OTP
  - Reseller
  - Phonebook
 
# Config.php
- Download and past the sdk folder in your project 
- Create a Config.php in your project
- Add your AUTH KEY in the Config file 
 e.g. define("AUTH_KEY", "YOUR AUTH_KEY from MSG91")
- Now Change the base URL in if require or else leave as default

# To Send Text SMS

  - Import the ``Config.php`` in your File  
  - Now ``Create an Object of Msg91's API`` in order to use the functionalities. this can be done as follow
  ``$msg91 = new Msg91(AUTH_KEY,BASE_URL);``
- Now ``create SEND_SMS function`` which takes object of $msg91.
- Now ``Implement the SEND_SMS function as shown follow``
```php
 function SEND_SMS($msg91){
$mobiles = "919999999999";
//(varchar)	Message content to send
$message = " your text sms will come up here";
//(varchar)	Receiver will see this as sender's ID.
$sender = "my sender id";
//(varchar)	If your operator supports multiple routes then give one route name. Eg: route=1 for promotional, route=4 for transactional SMS.
$route = "1";
//numeric	0 for international,1 for USA, 91 for India.
$country = "91";
// optional parameters //
$flash = "1"; //flash=1 (for flash SMS)
$unicode = ""; //unicode=1 (for unicode SMS)
//$schtime= "";  //When you want to schedule the SMS to be sent.
$afterminutes = ""; //Time in minutes after which you want to send sms.
$response = "";     //for example: &response=json or &response=xml
$campaign = "";   //Campaign name you wish to create.
$data = array( "authkey" => AUTH_KEY,
                "mobiles" => $mobiles,
                "message" => $message,
                "sender" => $sender,
                "route" => $route,
                "country" => $country,
                "flash" => $flash,
                "unicode" => $unicode,
                "schtime" => $schtime,
                "afterminutes" => $afterminutes,
                "response" => $response,
                "campaign" => $campaign,
                );
//Return the client ID on successful registration
$output = $msg91->textSMS->sendTextSMS($data);
return $output;
} 
```

- As a ``reponse SEND_SMS function print the respons.``

# To Send  OTP
- Import the ``Config.php `` if you have import once leave this step
- Create an Object of MSG91 as defined in the `` To Send Text SMS  step 2`` or leave this step if you already created an object 
- Now Create `` SEND_OTP `` function which takes the MSG91 object as an argument
- Implement ``SEND_OTP`` function as Follow :

```php
function SEND_OPT($msg91) {
	$mobile = "919999999999"; //Keep number in international format (with country code)
	$message = "Your verification code is ##OTP##."; // Message content to send. (default : Your verification code is ##OTP##.)
	$sender = "";   //Receiver will see this as sender's ID. (default : OTPSMS)
	$otp = 2786;  //OTP to send and verify. If not sent, OTP will be generated.
	$data = array( "authkey" => AUTH_KEY,
		            "mobile" => $mobile,
		            "message" => $message,
		            "sender" => $sender,
		           // "otp" => $otp,
	              );
	//Return the client ID on successful registration
	$output = $msg91->otp->sendOTP($data);
	print_r($output);
 }

```

- As a ``reponse SEND_OTP function print the respons.``

# Reseller's Operations
# # TO Add Client
- Import the ``Config.php `` if you have import once leave this step
- Create an Object of MSG91 as defined in the `` To Send Text SMS  step 2`` or leave this step if you already created an object 
- Now Create `` ADD_CLIENT `` function which takes the MSG91 object as an argument
- Implement ``ADD_CLIENT`` function as Follow :


```php
function ADD_CLIENT($msg91) {
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

```

- As a ``reponse ADD_CLIENT function print the respons.``


# # TO List Client
- Import the ``Config.php `` if you have import once leave this step
- Create an Object of MSG91 as defined in the `` To Send Text SMS  step 2`` or leave this step if you already created an object 
- Now Create `` LIST_CLIENT `` function which takes the MSG91 object as an argument
- Implement ``LIST_CLIENT`` function as Follow :


```php
function LIST_CLIENT($msg91) {
	$data = array( "authkey" => AUTH_KEY,
              );
	//Return the client ID on successful registration
	$output = $msg91->reseller->listClient($data);
	print_r($output);
} 
```

- As a ``reponse LIST_CLIENT function print the respons.``

# Phonebook's Operations

# # Add Contact
- Import the ``Config.php `` if you have import once leave this step
- Create an Object of MSG91 as defined in the `` To Send Text SMS  step 2`` or leave this step if you already created an object 
- Now Create `` ADD_CONTACT `` function which takes the MSG91 object as an argument
- Implement ``ADD_CONTACT`` function as Follow :
 ```php
  function ADD_CONTACT($msg91) {
    $name = "colleagues";  //contact name
    $mob_no = "7869492590"; //mobile no.
    $group = "592fd1bdf61e464a558b4572"; // group ID
 
     $data = array( "authkey" => AUTH_KEY,
	            "name" => $name,
	            "mob_no" => $mob_no,
	            "group" => $group,
              );

	//Return the client ID on successful registration
	$output = $msg91->phonebook->addContact($data);

	print_r($output);
  }
  ```
  
- As a ``reponse ADD_CONTACT function print the respons.``

# # Delete Client
- Import the ``Config.php `` if you have import once leave this step
- Create an Object of MSG91 as defined in the `` To Send Text SMS  step 2`` or leave this step if you already created an object 
- Now Create `` DELETE_CONTACT `` function which takes the MSG91 object as an argument
- Implement ``DELETE_CONTACT`` function as Follow :
```php
 function ADD_CONTACT($msg91) ``{
   $contact_id="592ff6d9a31f463f178b4574";  //contact id
	$data = array( "authkey" => AUTH_KEY,
		            "contact_id" => $contact_id,
		          );
		//Return the client ID on successful registration
		$output = $msg91->phonebook->deleteContact($data);
		print_r($output); 
   } 
   ```

  
- As a ``reponse DELETE_CONTACT function print the respons.``

