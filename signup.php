<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>chat app</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<section class="form signup">
			<header>Realtime chat App</header>
			<form action="#" enctype="multipart/form-data">
				<div class="error-txt"></div> 
					<div class="name-details">
			   		<div class="field input">
						<label>First Name</label>
						<input type="text" placeholder="First Name" name="fname" required>
			   		</div>
			   		<div class="field input">
						<label>Last Name</label>
						<input type="text" placeholder="Last Name" name="lname" required required>
			   		</div>
			   		<div class="field input">
						<label>Email Address</label>
						<input type="text" placeholder="enter your email" name="email" required>
			   		</div>
			   		<div class="field input">
							<label>Password</label>
							<input type="password" placeholder="enter your password" name="password" required>
							<i class="fa fa-eye" aria-hidden="true"></i>
			   		</div>
			   		<div class="field image">
							<label>Select image</label>
							<input type="file" name="image" required>
			   		</div>
			   		<div class="field button">
			   			<input type="submit" value="Continue to chat">
			   		</div>
					</div>
			</form>
			<div class="link">Already signed up? <a href="#">Login now</a></div>
		</section>
	</div>
	<script src="pas-show-hide.js"></script>
	<script src="signup.js"></script>
</body>
</html>