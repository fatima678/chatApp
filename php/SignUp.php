<?php 
	include "configure.php";

	$name = $_POST['fname'];
	$lastname= $_POST['lname'];
	$password = $_POST['password'];
	$email =$_POST['email'];
	$image =$_POST['image'];
     api ki call aw
    if(!empty($fname) && !empty($lname) && !empty($password) && !empty($email)){
    	//lets chk if email is valid or not
    	if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if email is valid
    		//lets chk if email already exit in database or not
    		$sql = mysql_query($conn, "SELECT email FROM users WHERE email ='{$email}'");
    		if(mysql_num_rows(sql)> 0)// id email already exit
    		echo "$email -  This email already exit!";
    		else{
    			//lets chk if user upload dile or not
    			if(isset($_FILES['image'])){ //if file is uploaded
    				$img_name = $_FILES['image']['name']; //getting user uploaded image name
    				// $img_type = $_FILES['image']['type']; //getting user uploaded image type
    				$tmp_name = $_FILES['image']['tmp_name']; //this temporary  name is used to save/move file in our folder
    				//lets explode image and get the last extension like jpg and png
    				$img_explode = explode('.', $img_name);
    				$img_ext =end($img_explode);//here we get the extension of  an user uploaded img file
    				$extensions =['png','jpg', 'jpeg']; //these are valid imag extension and we have store them in an array
    				if(in_array($img_ext, $extensions) === true){// if user uploaded image extension is matched with array  extension
    					$time =time();// this will return us current time
    					// lets uploadn the user uploaded img to our particular image
    					move_uploaded_file(tmp_name, folder name);
    					$status="Active Now";// once user signup then his status will be active
    					else{
    						echo "please select an img file - jpg, jpeg, png";
    					}

    				}
    			}
    			else{
    				echo "Please select an image file!";
    			}
    		}

    	}
    	else{ 
    		echo "$email - This is not valid email";
    	}

    }
    else{
    	echo "All input fields are required"; 
    }



 ?>