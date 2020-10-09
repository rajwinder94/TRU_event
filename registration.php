
<!DOCTYPE html>
<html> 
<head>
		
<title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
 .margin {margin-bottom: 45px;}
 #hov{font-size: 20px;}
 #hov:hover {color:red;}
a:hover{text-decoration:none;color:#004A4F;}


#btn1
{color:#FFFFFF;
	background-color:teal;
padding: 10px;
	border: 1px solid #E5E5E5;
	width: 200px;
	box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
	-moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
	background: linear-gradient(top, #F778A1 0%, #F52882 100%);
	 background: -moz-linear-gradient(top, #F778A1 0%, #F52882 100%);
	 background: -webkit-linear-gradient(top, #F778A1 0%, #F52882  100%); }
</style>


</head>
<body>
	<div class="container-fluid" style="background-color:#004A4F;padding:2%"> <!-- main container start  -->
		
		
	
			
          		<div class="row">  <!-- start nav row-->
              	<div class="col-lg-4">
		        <img src="trulogo.png" style="width:50%;heigth:50%;float:left" /></div>
				<div class="col-lg-8">
          	
   
    <div class="collapse navbar-collapse" id="myNavbar" style="margin:2%">
     
      <ul class="nav navbar-nav navbar-right" style="color:white">
        <li><a  href="index.html" style="color:white"><span class="glyphicon glyphicon-home"></span>Home</a></li>
        <li ><a  href="adminlogin.php" style="color:white"><span class="glyphicon glyphicon-log-in"></span> Register Now</a></li>
        <li><a  href="#" style="color:white"><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
      </ul>
	  </div>
    </div><!-- col-lg-8 end-->
    
   
  </div><!--nav row end-->
  			 
</div> <!-- main container end-->
</div>
<div><!-- main content-->
<div class="row" style="padding:2%">
<div clas="col-lg-12">
<a href="https://docs.google.com/forms/d/e/1FAIpQLSc1Z2z1HWpHhiiWksUOtXMDdtN8wghWGcnS0OxVLGtXkka_aA/viewform">Link</a>
<form name="myform" class="form-horizontal" action="insert.php" method="post" onsubmit="return validateform()">
<h1 style="font-family:Comic Sans MS;font-size:45pt">Confirm your spot!</h1></br></br>
  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt;">
    <label class="control-label col-sm-2" for="fname">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name"></br>
    </div></br>
  </div>
  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt">
    <label class="control-label col-sm-2" for="lname">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name"></br>
    </div>
  </div>
  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt">
    <label class="control-label col-sm-2" for="address">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address"></br>
    </div></br>
  </div>
  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt">
    <label class="control-label col-sm-2" for="city">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="city" name="city" placeholder="city"></br>
    </div></br>
  </div>
  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt">
    <label class="control-label col-sm-2" for="pcode">Pin Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pcode" name="pcode" placeholder="Enter a valid pin code"></br>
    </div></br>
  </div>
  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt">
    <label class="control-label col-sm-2" for="phno">Phone No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phno" name="phno" placeholder="format:xxx-xxx-xxxx"></br>
    </div></br>
  </div>
  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" name="email" placeholder="xyz@abc.com"></br>
    </div></br>
  </div>
  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt">
    <label class="control-label col-sm-2" for="yofserv">Years Of Service</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="yearofserv" name="yearofserv" placeholder="if any"></br>
    </div></br>
  </div>

  <div class="form-group" style="font-family:Comic Sans MS;font-size:20pt">
    <div class="col-sm-offset-2 col-sm-8">
      <button  type="submit" id="btn1" class="btn btn-primary">Submit</button>
    </div></br>
  </div>
</form>



</div>
</div>

		</div> <!-- main container content ending-->
	<footer class="container-fluid text-center" style="background-color:#004A4F">
	<div class="row" >
	<div class="col-lg-4" style="text-align:left;padding:2%">
	<img src="trulogo.png" style="width:30%"/>
	</div>
	<div class="col-lg-8" >
	
	</div>
	<div class="col-lg-4" >
	<address style="color:white;margin-top:7%"> &#169; Computer Science Department TRU(Rajwinder Singh Dhaliwal) </address>
	</div>
	</div>
  
   
</footer>








		

</body>
</html>