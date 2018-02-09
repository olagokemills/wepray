<?php


					if($_SERVER['REQUEST_METHOD']=='POST'){
    
					    $errors=array();
					    
					    if(empty($_POST['name'])){
					    $errors[] = 'You didnt include your name!!';
					    }  else {
					      $name = (trim($_POST['name']));    
					    }
					    
		//			    if(empty($_POST['phone']) && !is_numeric($_POST['phone'])){
		//			        $errors[] = 'Please iput your phone Number';
		//			    }  else {
		//			      $ph = ($_POST['phone']);    
		//			    }


					    //
					    if(empty($_POST['email'])){
					        $errors[] = 'Please, include your email address';
					        
					    }  else {
					        $email = (trim($_POST['email']));     
					    }
					    
					    if(empty($_POST['text'])){
					        $errors[] = 'Please, type in a Message';
					        
					           }else{
					               echo  $text = (($_POST['text']));
					            }

					         if(empty($errors)){
					             
					             
					             $to = 'info@weprayng.com';
					               
					              $subject = 'Enquiry from your website-'.$name;       
					         
					               $from = $name;
					              
					               $body = "Good day, i am". $name . "and here is what i think: "


					             .$text."my email is" .$email; 
					                       
					                       
					              mail($to,$subject,$body, $from);
					              
					              echo "Message successfully sent, you will get a response soon";
					         } else {
					             echo'<div style="color:red">';
					                 
					            echo "The following errors occured;";
					            
					            foreach ($errors as $msgs){
					                echo "-$msgs <br />\n";
					            }
					          echo "please try again";  
					              
					          echo '</div';
					          
					            }  
					            
					             }

					?>