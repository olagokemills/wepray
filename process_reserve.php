<?php

						


							if($_SERVER['REQUEST_METHOD']=='POST'){
							    
							    $errors=array();
							    
							    if(empty($_POST['demo-name'])){
							    $errors[] = 'Your didnt include your name!!';
							    }  else {
							      $name = (trim($_POST['demo-name']));    
							    }
							    
							    if(empty($_POST['demo-phone']) && !is_numeric($_POST['demo-phone'])){
							        $errors[] = 'Please iput your phone Number';
							    }  else {
							      $ph = ($_POST['demo-phone']);    
							    }
							    if(empty($_POST['demo-email'])){
							        $errors[] = 'Please, include your email address';
							        
							    }  else {
							        $email = ($_POST['demo-email']);     
							    }
							    if(!empty($_POST['shirt'])){

							    $shirt=($_POST['shirt']);
							   
							    }else{

							    $errors[]= "Please select an option for the shirt";

							    }

							   

							    if(!empty($_POST['robot'])){

							    	


							    }else{
							    $errors[]="Please confirm you are human";
							    }


							    $size = ($_POST['size']);


							    $updates = ($_POST['updates']);

							    if(empty($_POST['remessage'])){
							        $errors[] = 'Please, type in A Message.';
							        
							             }else{
							                $message = (trim($_POST['remessage']));
							            }




							         if(empty($errors)){
							             
							             require_once 'mysqli_connect.php';
							
										$to = 'info@weprayng.com';
					               
					              $subject = 'Reservation for wepray from-'.$name;       
					         
					               $from = $name;
					              
					               $body = "Name:-". $name ."<br /> 

					               			Phone Number:-". $ph."<br /> 

					               			Email:-".$email."<br />

					               			shirt-choice:-" .$shirt.",".$size."<br />

					               			Extra Note:-". $message;

					              mail($to,$subject,$body, $from);
					              
					              echo "Reservation successful, you will get a feedback soon";
					          } else {
							             echo'<div style=\"color:red"\>';
							                 
							            echo "The following errors occured;";
							            
							            foreach ($errors as $msgs){
							                echo "-$msgs <br />";
							            }
							          echo "please try again";  
							              
							          echo '</div';

							      }

							  }


							?>