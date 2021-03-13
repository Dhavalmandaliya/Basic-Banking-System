<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Flecca Bank</title>
  <link rel="shortcut icon" href="sign.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
.main-text
{
	font-size:50px;
  color: black;
  padding-top: 10px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-weight: bold;
}   
.main-img
{
  width:100%;
  margin: 0;
}
.main-text
{
  text-align: center;
  font-size: 40px;
}
.p2{
  font-size: 30px;
}
.upperpadding{
		 
		padding: 0px 100px;
		margin: 1% 2%;
	}
  .footer p{
    font-family: sans-serif;
  }
body{
  margin: 0;
}
.btn
{
  display:flexbox;
  text-align:center; 
  text-decoration: none;
  letter-spacing: .02;
  font-weight: 700;
  color:blue;
  background-color: #8bbdd9;
  border-radius: .24em;
  margin-bottom: 1em;
}
.btn-medium
{
  font-size: 1.3em;
  padding: 1em 2.6em;
  border-radius: 30px;
}
.btn-medium:hover
{
  background-color: #8bbdd9;
  color: #0b090a;
  font-weight:600;
}
</style>
</head>
<body style="background-color:#b5dce9 ; ">
  <nav class="navbar navbar-light" style="background-color:#8bbdd9;"> 
  <p class="main-text">Flecca Bank</p>
  </nav>
  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="bank_1.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="bank_2.jpg"  style="width:100%;">
      </div>
    
      <div class="item">
        <img src="bank_3.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="bank_4.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="bank_5.jpg"  style="width:100%;">
      </div>
      

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <br></br>
  <center>
  <main>
    <div>
      <a href="useradd.php" class="btn btn-medium">Add Account</a>
      <a href="viewusers.php" class="btn btn-medium">Customer Details</a>
      <a href="transaction.php" class="btn btn-medium">Transaction History</a>
    </div>
  </main>
  </center>
  <br></br>
  </div>
    <footer class="footer1" align="center"> <br>
    <div  style="height: 60%" >
    <p>&copy; 2021 Made by <b>Dhaval Mandaliya</b></p>
    </div>
  </footer>
  </body>
</html>