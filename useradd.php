<?php
	$servername = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'banking_sys';
	$conn = mysqli_connect($servername,$user,$pass,$dbname);
	if(isset($_POST['submit']))
	{
		$firstname =  $_POST['firstname']; 
		$lastname = $_POST['lastname']; 
		$email_id =  $_POST['email_id']; 
		$phone_number = $_POST['phone_number']; 
		$DOB = $_POST['DOB']; 
		$account_Balance = $_POST['account_Balance']; 
		$sql = "INSERT INTO user_info  (firstname, lastname, email_id, phone_number, DOB, account_Balance) 
		values ('$firstname','$lastname','$email_id','$phone_number','$DOB','$account_Balance')";
		if($conn ->query($sql)==TRUE)
		{
      echo "<script>
        alert('Record Inserted');
        </script>";
			$message="" .$conn ->insert_id;      
		}
  else
	{
		$message="ERROR: Hush! Sorry $sql. " 
    . mysqli_error($conn);
	}
  echo"Data Stored";
	mysqli_close($conn); 	
	} 
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="shortcut icon" href="sign.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
.logo-text{
	font-size:25px;
  color: black;
  padding-top: 10px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-weight: bold;	  
}
.standard-label, .standard-input {
  display: block;
}

.standard-label {
  margin-bottom: 20px;
}

.standard-input, .standard-select {
  margin-top: 10px;
  border: 3px lightsteelblue solid;
  border-radius: 5px;
  padding: 2px;
}

.standard-input {
  height: 35px;
  width: 250px;
  font-size: 1em;
}

.standard-select {
  height: 32px;
  width: 150px;
  font-size: 1em;
}

#account-select {
  width: 260px;
}

.container {
  width: 70%;
  max-width: 500px;
  margin: 0 auto;
  border: 1px black solid;
  padding: 10px;
  background-color: lightsteelblue; 
}

.sub-container {
  padding-left: 10px;
  background-color: whitesmoke;
  margin: 10px auto;
}

.required {
  font-size: 1.5em;
  color: red;
}

.small-heading {
  font-size: 18px;
}

.radio-label {
  font-size: 20px;
  margin: 0 40px;
}

.radio-input {
  margin-bottom: 25px;
}
button {
  border: 2px black solid;
  background-color: lightsteelblue;
  border-radius: 5px;
  margin: 0 auto;
  height: 35px;
  width: 150px;
  font-size: 20px;
}
input[type="date"]::-webkit-calendar-picker-indicator {
  color: rgba(0, 0, 0, 0);
  opacity: 1;
  display: block;
  background: url(https://mywildalberta.ca/images/GFX-MWA-Parks-Reservations.png) no-repeat;
  width: 20px;
  height: 20px;
  border-width: thin;
}

#show-address {
  display: none;
  float: right;
}

#address-history {
  display: none;
}

#non-uk {
  display: none;
  text-align: center;
  font-size: 25px;
  color: red;
}

#current-address {
  display: none;
}

#previous-address {
  display: none;
}

#get-consent {
  display: none;
  float: right;
}

#your-consent {
  display: none;
}

#info-request {
  display: none;
}

#submit-app {
  display: none;
  border: 2px black solid;
  background-color: lightsteelblue;
  border-radius: 5px;
  margin: 15px auto;
  height: 35px;
  width: 180px;
  font-size: 20px;
  float: right;
}

input[type="checkbox"] {
  height: 50px;
  width: 30px;
  margin-top: 20px;
  margin-left: 45px;
}
/** Media Queries **/

@media screen and (max-width: 1100px) 
{
h1 
{
  font-size: 24px; 
}  
h2 
{
  font-size: 24px;
}
.container {
  width: 95%;
}
}
footer p
{
  clear: both;
  position: relative;
  height: 0px;
  margin-top: 0px;
} 

  </style>
</head>
<body  style="background-color:#b5dce9 ; ">
<button class="w3-btn w3-blue w3-xlarge"><i class="-w3-margin-left fa fa-home"></i><a href="index.php"> Home</a></button>
<center><p class="logo-text">Flecca Bank</p> </center>
<ul class="navbar-nav">
</ul>
<div class="container">
  <center> <h1 class="main-header">Account Application Form</h1></center>
    <hr>
    <form id="app-form" method="POST" autocomplete="off">
    <fieldset class="sub-container" id="basic-details">
    <center><h2 class="sub-heading">Basic Details</h2>
    <hr>    
      <label for="firstname" class="standard-label">
        First Name<span class="required">*</span>
        <input class="standard-input" name="firstname" id="firstname" type="text" placeholder="First name..." required>
      </label>
    
      <label for="lastname" class="standard-label">
        Last Name<span class="required">*</span>
        <input class="standard-input" name="lastname" id="lastname" type="text" placeholder="Last name..." required>
      </label>

      <label for="email-address" class="standard-label">
        Email<span class="required">*</span>
        <input class="standard-input" name="email_id" id="email-address" type="email" placeholder="Your email address..." required>
      </label>

      <label for="phone-number" class="standard-label">
        Phone Number<span class="required">*</span>
        <input class="standard-input" type="tel" id="phone" name="phone_number" pattern='^\+?\d{10,12}' placeholder="Example: 9855478651" required>
      </label>

      <label for="DOB" class="standard-label">
        Date of Birth<span class="required">*</span>
        <input class="standard-input" type="date" name="DOB" id="DOB" required>
      </label>
      
      <label for="Account Balance" class="standard-label">
        Account Balance<span class="required">*</span>
        <input class="standard-input" id="Account Balance" name="account_Balance" type="number" placeholder="Put Account Balance" required>
      </label>
        <button class="button" type="submit" name="submit" >Add user</button></center>
      </fieldset>
    </form>
  </div>
<script>    
  $(document).ready(function() { 
  
  $("#account-select").change(function() {
    $("#show-address").show('slide');
    window.scrollTo(0,document.body.scrollHeight);
  });
  
  $("#show-address").click(function(){
    $("#address-history").show('slide');
    window.scrollTo(0,document.body.scrollHeight);
  });
  
  $("#yes").click(function(){
    $("#current-address").show('slide');
    $("#non-uk").hide();
    window.scrollTo(0,document.body.scrollHeight);
  });
  
  $("#no").click(function(){
    $("#non-uk").show('slide');
    $("#current-address").hide();
    window.scrollTo(0,document.body.scrollHeight);
  });
  
  $("#yes-prev").click(function(){
    $("#previous-address").show('slide');
    $("#get-consent").show('slide');
    window.scrollTo(0,document.body.scrollHeight);
  });
  
   $("#no-prev").click(function(){
    $("#get-consent").show('slide');
    $("#previous-address").hide();
    window.scrollTo(0,document.body.scrollHeight);
  });
  
  $("#get-consent").click(function(){
    $("#your-consent").show('slide');
    window.scrollTo(0,document.body.scrollHeight);
  });
  
  $("#credit-click").click(function() {
    $("#info-request").show('slide');
    window.scrollTo(0,document.body.scrollHeight);
  });
  
  $("#info-click").click(function() {
    $("#submit-app").show('slide');
    window.scrollTo(0,document.body.scrollHeight);
  });
  
  $('#app-form').on('submit', function(){
    var arr = $(this).serializeArray();
    console.log(arr);
    return false;
});
});
  </script>
<footer class="footer1" align="center"> <br>
  <div  style="height: 60%" >
  <p>&copy; 2021 Made by <b>Dhaval Mandaliya</b></p>
  </div>
</footer>
</body>
</html>