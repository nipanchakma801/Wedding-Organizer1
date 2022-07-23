
<html>
<head>

<link rel="stylesheet" href="register.css">
<base target = "_blank">
<script type="text/javascript">


function validateform() {
var UserName = document.forms["myform"]["uname"].value;
var GroomName = document.forms["myform"]["gname"].value;
var BrideName = document.forms["myform"]["bname"].value;
var ad = document.forms["myform"]["address"].value;
var e = document.forms["myform"]["email"].value;
var p = document.forms["myform"]["password"].value;
var format = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";

//required fields
if (UserName == "" || GroomName == "" || BrideName == "" || ad == "" || e == "" || p == "") {
alert("Groom Name, Bride Name,  Address, Email and Password fields must be filled out");
return false;
}
//validate email
if (!format.test(e)){
alert("You have entered an invalid email address!");
return false;
}
}
</script>


</head>
<body>

<form name="myform" onsubmit="return validateform()" method = "post" action = "coupledetails.php">
	<div class = "container">
	
	   <div class="registration">
		<h2> Wedding Couple Registration</h2>
	   </div>
		<label><b>User Name:  </b></label>
		<input type="text" name="uname" placeholder="User Name" value="">
		</br><br>
		<label><b> Groom Name:  </b></label>
		<input type="text" name="gname" placeholder="Groom Name" value="">
		</br><br>
		<label><b> Bride Name:  </b></label>
		<input type="text" name = "bname" placeholder="Bride Name" value="">
		<br><br>
		<label><b> Wedding Date:  </b></label>
		<input type="date" name = "wdate" value="">
		<br><br>
		<label><b> Homecoming Date:  </b></label>
		<input type="date" name = "hcdate" value="">
		<br><br>
		<label><b> Email:  </b></label>
		<input type="text" name = "email" placeholder="example@gmail.com" autocomplete="off">
		<br><br>
		<label><b> Password:  </b></label>
		<input type="text" name = "password" placeholder="Password" value="">
		<br><br>
		<label><b> Mobile:  </b></label>
		<input type="text" name = "mobile" placeholder="0711234567" value="" required>
		<br><br>
		<label><b> City:	</b></label>
		<select name="city"required>
		<option value = "Select city"selected="selected">select City</option>
		<option value = "Colombo">Colombo</option>
		<option value = "Kandy">Kandy</option>
		<option value = "Matara">Matara</option>
		<option value = "Hambantota">Hambanmtota</option>
		<option value = "Galle">Galle</option></select><br><br>
		<div class="button">
		<input type="submit" onclick="validate" value="Submit">
		<input type="reset" value="Reset">
		</div>
										
	</div>
</form>

</body>
</html>