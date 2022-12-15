<?php
require_once 'Pdo_methods.php';

class Admin extends PdoMethods {

	public function login($post){
	   
	    $pdo = new PdoMethods();
	    $sql = "SELECT email, password FROM admins WHERE email = :email";
		$bindings = array(
			array(':email', $post['email'], 'str')
		);

	    $records = $pdo->selectBinded($sql, $bindings);

		/** IF THERE WAS AN RETURN ERROR STRING */
		if($records == 'error'){
			return "There was an error logging it";
		}
		
		/** */
		else{
			if(count($records) != 0){
	            /** IF THE PASSWORD IS NOT VERIFIED USING PASSWORD_VERIFY THEN RETURN FAILED, OTHERWISE RETURN SUCCESS, IF NO RECORDS ARE FOUND RETURN NO RECORDS FOUND. */
	            if(password_verify($post['password'], $records[0]['password'])){
	                session_start();
	                $_SESSION['access'] = "accessGranted";
					$_SESSION['email'] = $_POST['email'];





					$sql = "SELECT name, status FROM admins WHERE email = :email";
					$bindings = array(
						array(':email', $post['email'], 'str')
					);
			
					$records = $pdo->selectBinded($sql, $bindings);
					
					foreach ($records as $row){

						$name = "<tr><td>{$row['name']}</td>";
						$status = "<tr><td>{$row['status']}</td>";
					
		 
					
					$_SESSION['name'] = $name;
					$_SESSION['status'] = $status;


					//here lets also figure out what the status is of the desired session. Then we can use this 
					//with an if statement to choose wich nav to put at the top

					}




	                return "success";
	            }
	            else {
	                return "There was a problem logging in with those credentials";
	            }
			}
			else {
				$password = password_hash($post['password'], PASSWORD_DEFAULT);
				//echo $password;
				return "There was a problem logging in with those credentials";
				
			}
		}
	}

	public function addAdmin($post){
	    $pdo = new PdoMethods();
	    $sql = "SELECT email FROM admins WHERE email = :email";
		$bindings = array(
			array(':email', $post['email'], 'str')
		);

	    $records = $pdo->selectBinded($sql, $bindings);

		/** IF THERE WAS AN RETURN ERROR STRING */
		if($records == 'error'){
			return 'There was an error processing your request';
		}
		
		/** CHECK FOR A DUPLICATE USERNAME IF FOUND THEN RETURN DUPLICATE OTHERWISE ADD USERNAME AND PASSWORD TO DATABASE */
		else{
			if(count($records) != 0){
	            return "There is already someone with that name";
			}
			else {
				/** ENCRYPT THE PASSWORD USING PASSWORD_HASH */
				$password = password_hash($post['password'], PASSWORD_DEFAULT);

				$sql = "INSERT INTO admins (name, email, password, status) VALUES (:name, :email, :password, :status)";


					//if status is admin or staff
					



				$bindings = array(
					array(':name',$post['name'],'str'),
					array(':email',$post['email'],'str'),
					array(':password',$password,'str'),
					array(':status',$post['status'],'str'),
				);
				$result = $pdo->otherBinded($sql, $bindings);
				if($result = 'noerror'){
					return 'Admin added';
				}
				else {
					return 'There was a problem adding this administrator';
				}
			}
		}



		 

	}






//add contact

	public function addContact($post){
	    $pdo = new PdoMethods();
	    $sql = "SELECT email FROM contacts WHERE email = :email";
		$bindings = array(
			array(':email', $post['email'], 'str')
		);

	    $records = $pdo->selectBinded($sql, $bindings);

		/** IF THERE WAS AN RETURN ERROR STRING */
		if($records == 'error'){
			return 'There was an error processing your request';
		}
		
		/** CHECK FOR A DUPLICATE USERNAME IF FOUND THEN RETURN DUPLICATE OTHERWISE ADD USERNAME AND PASSWORD TO DATABASE */
		else{
			if(count($records) != 0){
	            return "There is already someone with that name";
			}
			else {

				$sql = "INSERT INTO contacts (name, address, city, state, phone, email, dob, contacts, age) VALUES (:name, :address, :city, :state, :phone, :email, :dob, :contacts, :status)";
				

				$bindings = array(
					array(':name',$post['name'],'str'),
					array(':address',$post['address'],'str'),
					array(':city',$post['city'],'str'),
					array(':state',$post['state'],'str'),
					array(':phone',$post['phone'],'str'),
					array(':email',$post['email'],'str'),
					array(':dob',$post['dob'],'str'),
					array(':contacts',$post['contacts'],'str'),
					array(':age',$post['age'],'str'),





				);

				$result = $pdo->otherBinded($sql, $bindings);
				if($result = 'noerror'){
					return 'Contact added';
				}
				else {
					return 'There was a problem adding this contact';
				}
			}
		}



		 

	}











///test for admin table
	public function adminTable(){
        $pdo = new PdoMethods();

      
        $sql = "SELECT name, email, password, status FROM admins";
        
        $records = $pdo->selectNotBinded($sql);

        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($records == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($records) != 0){
                return $this->makeTableAdmin($records);	
            }
            else {
                return 'No notes found for the date range selected';
            }
        }
    }
	private function makeTableAdmin($records){
        $output = "<table class='table table-bordered table-striped'><thead><tr>";
		$output .= "<th>Name</th><th>Email</th><th>Password</th><th>Status</th><th></th</tr><tbody>";
		foreach ($records as $row){

            $output .= "<tr><td>{$row['name']}</td>";
			$output .= "<td>{$row['email']}</td>";
			$output .= "<td>{$row['password']}</td>";
			$output .= "<td>{$row['status']}</td>";
			$output .= "<td><input type=\"checkbox\" name=\"checkbox\" value=\"\" id=\"checkbox\"></td></tr>";
		
		
    }
	return $output;
}






//for contacts
public function ContactsTable(){
	$pdo = new PdoMethods();

  
	$sql = "SELECT name, address, city, state, phone, email, dob, contacts, age FROM contacts";
	
	$records = $pdo->selectNotBinded($sql);

	/* IF THERE WAS AN ERROR DISPLAY MESSAGE */
	if($records == 'error'){
		return 'There has been and error processing your request';
	}
	else {
		if(count($records) != 0){
			return $this->makeTableContacts($records);	
		}
		else {
			return 'No notes found for the date range selected';
		}
	}
}
private function makeTableContacts($records){
	$output = "<table class='table table-bordered table-striped'><thead><tr>";
	$output .= "<th>Name</th><th>Address</th><th>City</th><th>State</th><th>Phone</th><th>Email</th><th>DOB</th><th>Contact</th><th>Age</th><th></th</tr><tbody>";
	foreach ($records as $row){

		$output .= "<tr><td>{$row['name']}</td>";
		$output .= "<td>{$row['address']}</td>";
		$output .= "<td>{$row['city']}</td>";
		$output .= "<td>{$row['state']}</td>";
		$output .= "<td>{$row['phone']}</td>";
		$output .= "<td>{$row['email']}</td>";
		$output .= "<td>{$row['dob']}</td>";
		$output .= "<td>{$row['contacts']}</td>";
		$output .= "<td>{$row['age']}</td>";
		$output .= "<td><input type=\"checkbox\" name=\"checkbox\" value=\"\" id=\"checkbox\"></td></tr>";
	
	
}
return $output;
}








function checkFormat($value, $regex){
	switch($regex){
		case "name": return $this->name($value); break;
		case "phone": return $this->phone($value); break;
		
		
	}
}

/* THE REST OF THE FUNCTIONS ARE THE INDIVIDUAL REGULAR EXPRESSION FUNCTIONS*/
function name($value){
$match = preg_match('/^[a-z-\' ]{1,50}$/i', $value);
return $this->setError($match);
}

function phone($value){
$match = preg_match('/\d{3}\.\d{3}.\d{4}/', $value);
return $this->setError($match);
}


function setError($match){
if(!$match){
	$this->error = true;
	return "error";
}
else {
	return "";
}
}


/* THE SET MATCH FUNCTION ADDS THE KEY VALUE PAR OF THE STATUS TO THE ASSOCIATIVE ARRAY */
function checkErrors(){
return $this->error;
}







}