<DOCTYPE! HTML>
<html>
<head>

	<Style> 
.page {
  width: 400px;
  background-color:#f7ede2;
  padding: 32px;
  border-radius: 10px;
 
}

.card {
  width: 400px;
  background-color:#FFFFFF;
  padding: 32px;
  border-radius: 20px;
  margin:32px;
  }

.button_style {
color: black;
background-color: #b5179e;
font-size: 15px;
border-color: blue; 
}

</Style>





</head>
	<body class="page" >
		<main  background-color = #b5179e>
			<section class="card">

		
		<h1> Fill out the form below to register  </h1>
					
		
		<P>		<form method="POST" action="reg_info.php"> </p>

		<p>		<label >First Name </label>  <br/>
					<input type = "text" name ="first_name" placeholder="Enter your First Name" required=""> </p>
		
		<p>		<label >Last Name </label> <br/>
					<input type = "text" name ="last_name" placeholder="Enter your Last Name" required> </p>
			

		<p>		<label>E-mail</label> <br/>
					<input type = "text" name = "email" placeholder="Enter E-mail" required> </p>

		<p>		<label>Date of Birth</label> <br/>
					<input type = "date" name = "dob">   </p>

		<p>		<label>Gender</label> <br/>
					<select name="gender">
						<option value=""> Select Gender</option>  <option> Female</option>	<option>Male</option>	<option>Prefer not to say</option> </p>
					</select>
					
		<p>		<label>Password</label>  <br/>
					<input type = "password" name = "password" placeholder="Set Your Password" required> </p>
		
					
		<p>		<button class="button_style" type = "submit" name ="signup "> Sign-Up </button> </p>
					
				<input type="checkbox" checked>Remember Me 
		
	
		</form>
		
		
		<p>  Already have an account? <a href = "login_page.php"  > Login </a> <p>

</session>
</main>
</html>