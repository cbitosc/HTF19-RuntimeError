<!DOCTYPE html>
<html>
<head>
	<title>student page</title>



	<script src="js/jquery-1.10.2.js"></script>
  	<script src="js/bootstrap.js"></script>
  	<script src="js/jquery.selectlistactions.js"></script>
  
  	<link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" href="css/site.css">

  	<style type="text/css">
  		h1{background-color: ;color:white;margin-left: 100px;margin-right: 100px; border-radius: 10px;}
		h2{color: ;background-color: ;margin-left: 500px;margin-right: 500px; border-radius: 10px;}

		.a{ margin-left: 100px; margin-right: 100px;background-color:#A75126;border-radius:10px;}

   body{
   	height:100%;
   width:100%;
   background-color:#567520;
    font-family: Arial, Helvetica, sans-serif;
   background-image:url();/*your background image*/  
   background-repeat:no-repeat;/*we want to have one single image not a repeated one*/  
   background-size:cover;/*this sets the image to fullscreen covering the whole screen*/  
   /*css hack for ie*/     
   filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
   -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
	}
  	</style>
</head>
<body>
	

	<img align="left" src="images.jpg" height="90" width="100" style="margin-top: 20px;border-radius: 10px" />
	<img align="right" src="images.jpg" height="90" width="100" style="margin-top: 20px;border-radius: 10px"/>
	<div class="a">
		<h2 style="background-color:; margin-left:100px; margin-right:100px; color: #FFFFFF" align="center"><strong>CHAITANYA BHARTI INSTITUTE OF TECHNOLOGY</strong></h1>
		<h1 align="center"><strong>PLACEMENT AND TRAINING CELL</strong></h1>
	</div>
	<h1 align="center"><strong> WELCOME TO THE HOMEPAGE</strong></h1>
	<div style="margin:100px;width: 900px;height: 700px; background-color: white;border-width: 12px;border-style: ridge;border-color: #000066;">
            



             <table align="center" cellpadding = "10"
             padding="10">
 
 <tr>
<td></td>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENTER YOUR DETAILS HERE</td></tr>
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"required>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"required>
(max 30 characters a-z and A-Z)
</td>
</tr>
 <tr></tr>
<!----- Date Of Birth -------------------------------------------------------->
 <tr>
      <td >Date of Birth</td>
      <td><input name="b_date" type="date" required></td>
      </tr> 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="email" name="Email_Id" maxlength="100" required disabled></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" required>
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="ClassX_Board" maxlength="30" required></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30"required></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" required></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" required></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" required></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" required></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="Graduation_Board" maxlength="30" required></td>
<td><input type="text" name="Graduation_Percentage" maxlength="30" required></td>
<td><input type="text" name="Graduation_YrOfPassing" maxlength="30" required></td>
</tr>
 
<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>

<tr>
<td>Dept</td>
<td>
<input type="text" name="dept" maxlength="5" required>
</td>
</tr>
<tr>
<td>Branch Id</td>
<td>
<input type="text" name="branchid" minlength="3" maxlength="6" required>
</td>
</tr>
<tr>
<td>CGPA</td>
<td>
<input type="text" name="cgpa" maxlength="4" required="">
</td>
</tr>
 
<tr>
<td>Backlogs</td>
<td>Yes<input type="radio" name="Backlogs" value="Yes" >
No <input type="radio" name="Backlogs" value="No" />
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" >
<input type="reset" value="Reset">
</td>
</tr>
</table>


		<span style="margin-left: 150px;color: green; font-size: 15px;margin-top: 40px;"></span>
	</div>

</body>
</html>