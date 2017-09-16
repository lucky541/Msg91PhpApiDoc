<?php
require_once('Config.php');

onCreateMethod();

 function onCreateMethod(){
   
   // creating an object of msg91
 	$msg91 = new Msg91(AUTH_KEY,BASE_URL);
    

     //To Add Group
 	 //  ADD_GROUP($msg91);

     //TO DELETE GROUP
 	// DELETE_GROUP($msg91);

 	//TO LIST GROUP
 	//LIST_GROUP($msg91);
   
    //To Add Contact
    // ADD_CONTACT($msg91);

    // TO EDIT CONTACT
    //EDIT_CONTACT($msg91);

    //TO DELETE CONTACT
     //DELETE_CONTACT($msg91);

 	//TO LIST CONTACT
 	//LIST_CONTACT($msg91);

 }

function ADD_CONTACT($msg91)
 {
    $name = "contact name";  //contact name
    $mob_no = "$mob_no"; //mobile no.
    $group = "group ID"; // group ID
 
     $data = array( "authkey" => AUTH_KEY,
	            "name" => $name,
	            "mob_no" => $mob_no,
	            "group" => $group,
              );

	//Return the client ID on successful registration
	$output = $msg91->phonebook->addContact($data);

	print_r($output);
  }

 function ADD_GROUP($msg91){
	  $group_name = "myNewGroup";  //Group name

	  $data = array( "authkey" => AUTH_KEY,
	               "group_name" => $group_name,
	              );

	 //Return the client ID on successful registration
	$output = $msg91->phonebook->addGroup($data);

	print_r($output);
 }


 function DELETE_GROUP($msg91)
 {
	 $group_id = "group ID"; //Group ID

	$data = array( "authkey" => AUTH_KEY,
	               "group_id" => $group_id,
	              );

	//Return the client ID on successful registration
	$output = $msg91->phonebook->deleteGroup($data);

	 print_r($output);
 }

function LIST_GROUP($msg91){
	$data = array( "authkey" => AUTH_KEY,
              );
		//Return the client ID on successful registration
		$output = $msg91->phonebook->listGroup($data);
		print_r($output);
}

function EDIT_CONTACT($msg91){
	$contact_id="contact id";  //contact id
	$group = "group ID"; // group ID
	$mob_no = "mobile no."; //mobile no.
	$name = " contact name"; // contact name

	$data = array( "authkey" => AUTH_KEY,
		            "contact_id" => $contact_id,
		            "group" => $group,
		             "mob_no" => $mob_no,
		              "name" => $name,
	              );

	//Return the client ID on successful registration
	$output = $msg91->phonebook->editContact($data);

	print_r($output);
}

function DELETE_CONTACT($msg91){
		$contact_id="592ff6d9a31f463f178b4574";  //contact id

		$data = array( "authkey" => AUTH_KEY,
		            "contact_id" => $contact_id,
		          );

		//Return the client ID on successful registration
		$output = $msg91->phonebook->deleteContact($data);

		print_r($output);
}

function LIST_CONTACT($msg91){
	$group = "group ID"; // group ID
	 
	$data = array( "authkey" => AUTH_KEY,
		            "group" => $group,
	              );

	//Return the client ID on successful registration
	$output = $msg91->phonebook->listContact($data);

	print_r($output);
}
