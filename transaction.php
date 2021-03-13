<html>
<head>
<title>Transaction Details</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="shortcut icon" href="sign.png">
<style>
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
.logo-text, .nav-link1{
  color: black;
  padding-top: 25px;
	font-size:25px;
  font-weight: bold;
  text-align: center;
}
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin:auto;
  padding: 2px;
  width:70%;
  table-layout:auto;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}
table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}
table th,table td {
  padding: .625em;
  text-align: center;
}
table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}
.button {
  background-color: royalblue;
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  border-radius: 10px;
}
.button1{
  background-color: royalblue;
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  border-radius: 20px;    
}
.button:hover, .button1:hover{
  background-color: navy;
  color: whitesmoke;
}
.button:active, .button1:active{
  background-color: #02c39a;
}
@media screen and (max-width: 600px) {
table {
  border: 0;
}
table caption {
  font-size: 1.3em;
}  
table thead {
  border: none;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}  
table tr {
  border-bottom: 3px solid #ddd;
  display: block;
  margin-bottom: .625em;
}  
table td {
  border-bottom: 1px solid #ddd;
  display: block;
  font-size: .8em;
  text-align: right;
}  
table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
  content: attr(data-label);
  float: left;
  font-weight: bold;
  text-transform: uppercase;
}  
table td:last-child {
  border-bottom: 0;
}
}        
</style>
</head>    
<body style="background-color:#add8e6 ; ">
<table>
  <div>
	  <a href="index.php">
      <button class="button1">HOME</button>
	  </a>
  </div>
<nav class="navbar navbar-light" style="background-color:#8bbdd9;" >
<p class="logo-text">Flecca Bank</p>
</nav>
  <caption>Customer Details</caption>
  <thead>
    <tr>
      <th scope="col">Customer Id</th>
      <th scope="col">Contributor</th>
      <th scope="col">Recipient</th>
      <th scope="col">Transferred Amount</th>        
    </tr>
  </thead>
  <tbody>
    <?php
    include 'config.php';
    $sql ="select * from records";
    $query =mysqli_query($conn, $sql);
    while($rows=mysqli_fetch_array($query)){
    ?>
    <tr>
    <td scope="row" data-label="Customer Id"><?php echo $rows['id'] ?></td>
    <td scope="row" data-label="Contributor"><?php echo $rows['contributor_name']; ?></td>
    <td scope="row" data-label="Recipient"><?php echo $rows['recipient_name']; ?></td>
    <td scope="row" data-label="Transferred Amount"><?php echo $rows['transferred_amount']; ?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<center><div >
	<a href="index.php">
    <button class="button">HOME</button>
	</a>
</div></center>
<footer class="footer1" align="center"> <br>
    <div  style="height:auto" >
    <p>&copy; 2021 Made by <b>Dhaval Mandaliya</b></p>
    </div>
  </footer>
</body>
</html>