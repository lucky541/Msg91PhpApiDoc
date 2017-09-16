#  [Msg91 PHP API Library](http://www.msg91.com)

Msg91 PHP API doc .

  - Text SMS
  - Send OTP
  - Reseller
  - Phonebook
 
# Config.php
- After Downloading Add the AUTH KEY in the Config.php 
  e.g. define("AUTH_KEY", "YOUR AUTH_KEY from MSG91")
- Now Change the base URL in if require or else leave as default

# To Send Text SMS
- Import the ``Config.php``  
- Now ``Create an Object of Msg91's API`` in order to use the functionalities. 

```php
// creating an object of msg91
msg91 = new Msg91(AUTH_KEY,BASE_URL);

$mobiles = "919999999999";
//(varchar)	Message content to send
$message = " your text sms will come up here";
//(varchar)	Receiver will see this as sender's ID.
$sender = "my sender id";
//(varchar)	If your operator supports multiple routes then give one route name. Eg: route=1 for promotional, route=4 for transactional SMS.
$route = "1";
//numeric	0 for international,1 for USA, 91 for India.
$country = "Country_code";
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
```

# To Send  OTP
- Import the ``Config.php`` 
- Now ``Create an Object of Msg91's API`` in order to use the functionalities. 

```php
// creating an object of msg91
msg91 = new Msg91(AUTH_KEY,BASE_URL);

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
	
```


# Reseller's Operations

# # TO Add Client
- Import the ``Config.php``
- Now ``Create an Object of Msg91's API`` in order to use the functionalities.

```php
// creating an object of msg91
msg91 = new Msg91(AUTH_KEY,BASE_URL);

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


```


# # TO List Client
- Import the ``Config.php``
- Now ``Create an Object of Msg91's API`` in order to use the functionalities.

```php
// creating an object of msg91
msg91 = new Msg91(AUTH_KEY,BASE_URL);
	$data = array( "authkey" => AUTH_KEY,
              );
	//Return the client ID on successful registration
	$output = $msg91->reseller->listClient($data);
```

# Phonebook's Operations

# # Add Contact
- Import the ``Config.php`` 
- Now ``Create an Object of Msg91's API`` in order to use the functionalities.

```php
// creating an object of msg91
msg91 = new Msg91(AUTH_KEY,BASE_URL);
    $name = "contact name";  //contact name
    $mob_no = "mobile no"; //mobile no.
    $group = "group ID"; // group ID
 
     $data = array( "authkey" => AUTH_KEY,
	            "name" => $name,
	            "mob_no" => $mob_no,
	            "group" => $group,
              );

	//Return the client ID on successful registration
	$output = $msg91->phonebook->addContact($data);
  ```
  

# # Delete Client
- Import the ``Config.php`` 
- Now ``Create an Object of Msg91's API`` in order to use the functionalities. 

```php
// creating an object of msg91
 msg91 = new Msg91(AUTH_KEY,BASE_URL);
   $contact_id="contact id";  //contact id
	$data = array( "authkey" => AUTH_KEY,
		            "contact_id" => $contact_id,
		          );
		//Return the client ID on successful registration
		$output = $msg91->phonebook->deleteContact($data);
		print_r($output); 
   ```
