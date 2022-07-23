
<html>
<head>

<link rel="stylesheet" href="register.css">
<base target = "_blank">
<script type="text/javascript">

function validateform() {
var FirstName = document.forms["myform"]["fname"].value;
var ln = document.forms["myform"]["lname"].value;
var bn = document.forms["myform"]["business"].value;
var ad = document.forms["myform"]["address"].value;
var ge = document.forms["myform"]["gender"].value;
var e = document.forms["myform"]["email"].value;
var p = document.forms["myform"]["password"].value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//required fields
if (FirstName == "" || ln == "" || e == "" || bn == "" || ad == "" || ge == "" || e == "" || p == "") {
alert("First Name, Last Name, Business Name, Address, Gender, Email and Password fields must be filled out");
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

<form name="myform" onsubmit="return validateform()" method = "post" action = "vendorregisterdetails.php">
	<div class = "container">
	
	   <div class="registration">
		<h2> Vendor Registration</h2>
	   </div>
		<label><b>First Name:  </b></label>
		<input type="text" name="fname" placeholder="First Name" value="">
		</br><br>
		<label><b> Last Name:  </b></label>
		<input type="text" name = "lname" placeholder="Last Name" value="">
		<br><br>
		<label><b> Business Name:  </b></label>
		<input type="text" name = "business" placeholder="Business Name" value="">
		<br><br>
		<label><b> Category:	</b></label>
		<select name="category"required>
		<option value = "Select"selected="selected">Select</option>
		<option value = "Wedding Venues">Wedding Venues</option>
		<option value = "Catering">Catering</option>
		<option value = "Videographers">Videographers</option>
		<option value = "Photographers">Photographers</option>
		<option value = "Wedding Car">Wedding Car</option>
		<option value = "DJ/Band">DJ/Band</option>
		<option value = "Wedding Cakes">Wedding Cakes</option>
		<option value = "Bridal Accessories">Bridal Accessories</option>
		<option value = "Flowers & decorations">Flowers & decorations</option>
		<option value = "Wedding jewelry">Wedding jewelry</option>
		<option value = "Wedding invitations">Wedding invitations</option>
		<option value = "Groom Accessories">Groom Accessories</option>
		<option value = "Health & Beauty">Health & Beauty</option>
		</select>
		<br><br>
		<label><b> Address:  </b></label>
		<input type="text" name = "address" placeholder="Address" value="">
		<br><br>
		<label><b> Gender:  </b></label>
		<input type="radio" name = "gender" value="Male">Male<input type="radio" name = "gender" value="Female">Female
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
		<option value = "Select city"select="select">select City</option>
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