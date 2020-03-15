<?php
$Name="";
$Email="";
$UserName="";
$Password="";
$CPassword="";
$DoB="";
$Gender="";
$Status="";
$Address="";
$City="";
$Postal_Code="";
$Home_number="";
$Mobile_Phone="";
$Credit_Card_Number="";
$Credit_Card_Expiry_Date="";
$Monthly_Salary="";
$URL="";
$GPA="";

#Flags
$Name_match="Not checked yet.";
$Email_match="Not checked yet.";
$Mobile_match="Not checked yet.";
$home_match="Not checked yet.";
$credit_match="Not checked yet.";
$creditDate_match="Not checked yet.";
$salary_match="Not checked yet.";
$url_match="Not checked yet.";
$code_match="Not checked yet.";
$user_match="Not checked yet.";
$pwd_match="Not checked yet.";
$data_match="Not checked yet.";
$c_match="Not checked yet.";
$a_match="Not checked yet.";
$url_match="Not checked yet.";
$gpa_match="Not checked yet.";
$cpwd_match="Not checked yet.";




if ($_SERVER["REQUEST_METHOD"]=="POST") {
	# Defining Variables
	$Name=$_POST["Name"];
	$Email=$_POST["Email"];
	$UserName=$_POST["UserName"];
	$Password=$_POST["Password"];
	$CPassword=$_POST["CPassword"];
	$DoB=$_POST["DoB"];
	$Gender=$_POST["Gender"];
	$Status=$_POST["Status"];
	$Address=$_POST["Address"];
	$City=$_POST["City"];
	$Postal_Code=$_POST["Postal_Code"];
	$Home_number=$_POST["Home_number"];
	$Mobile_Phone=$_POST["Mobile_Phone"];
	$Credit_Card_Number=$_POST["Credit_Card_Number"];
	$Credit_Card_Expiry_Date=$_POST["Credit_Card_Expiry_Date"];
	$Monthly_Salary=$_POST["Monthly_Salary"];
	$URL=$_POST["URL"];
	$GPA=$_POST["GPA"];

	#patterns
	$NamePattern="/[A-Z][a-z]{2,}/";
	$EmailPattern="/[a-z]*@[a-z]*[.][a-z]*/";
	$MobilePattern="/[0-9]{2}[ ]{1}[0-9]{7}/";
	$PostalPattern="/[\d]{6}/";
	$HomePattern="/[0-9]{2}[ ]{1}[0-9]{7}/";
	$CreditPattern="/[0-9]{4}[ ]{1}[0-9]{4}[ ]{1}[0-9]{4}[ ]{1}[0-9]{4}/";
	$CreditDatePattern="/[0-9]{2}[.][0-9]{2}[.][0-9]{4}/";
	$SalaryPattern="/UZS[ ][1-9][0-9]*[,][0-9]*[.][0-9]*/";

	$UserNamePattern="/[a-zA-Z][a-zA-Z0-9-_]{3,32}/";
	$PasswordPattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}/";
	$DatePattern="/[0-9]{2}[.][0-9]{2}[.][0-9]{4}/";
	$CityPattern="/[A-Z][a-z]{2,}/";
	$AddressPattern="/[A-Z][a-z]{5,}/";
	$UrlPattern="/(\w+).(?:com|net)/";
	$GpaPattern="/[0-4][.][0-9]/";

	






	#Section for processing
    if(preg_match($NamePattern, $Name)) {$Name_match="Match!";} 
    else {$Name_match="Does not match!";}
    if(preg_match($EmailPattern, $Email)) {$Email_match="Match!";} 
    else {$Email_match="Does not match!";}
    if(preg_match($PostalPattern, $Postal_Code)) {$code_match="Match!";} 
    else {$code_match="Does not match!";}
    if(preg_match($MobilePattern, $Mobile_Phone)) {$Mobile_match="Match!";} 
    else {$Mobile_match="Does not match!";}
    if(preg_match($HomePattern, $Home_number)) {$home_match="Match!";} 
    else {$home_match="Does not match!";}
    if(preg_match($CreditPattern, $Credit_Card_Number)) {$credit_match="Match!";} 
    else {$credit_match="Does not match!";}
     if(preg_match($CreditDatePattern, $Credit_Card_Expiry_Date)) {$creditDate_match="Match!";} 
    else {$creditDate_match="Does not match!";}
     if(preg_match($SalaryPattern, $Monthly_Salary)) {$salary_match="Match!";} 
    else {$salary_match="Does not match!";}
     if(preg_match($UserNamePattern, $UserName)) {$user_match="Match!";} 
    else {$user_match="Does not match!";}



    if(preg_match($PasswordPattern, $Password)) {$pwd_match="Match!";} 
    else {$pwd_match="Does not match!";}
    if($CPassword === $Password) {$cpwd_match="Match!";} 
    else {$cpwd_match="Does not match!";}





    if(preg_match($DatePattern, $DoB)) {$data_match="Match!";} 
    else {$data_match="Does not match!";}
    if(preg_match($CityPattern, $City)) {$c_match="Match!";} 
    else {$c_match="Does not match!";}
    if(preg_match($AddressPattern, $Address)) {$a_match="Match!";} 
    else {$a_match="Does not match!";}
    if(preg_match($UrlPattern, $URL)) {$url_match="Match!";} 
    else {$url_match="Does not match!";}
    if(preg_match($GpaPattern, $GPA)) {$gpa_match="Match!";} 
    else {$gpa_match="Does not match!";}
   



}
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<form action="index.php" method="post">
				<dt>Name</dt>
			<dd>
				<input type="text" name="Name" value="<?= $Name ?>" >
			</dd>
			<dt>Email</dt>
			<dd>
				<input type="text" name="Email" value="<?= $Email ?>">
			</dd>
			<dt>UserName</dt>
			<dd>
				<input type="text" name="UserName" value="<?= $UserName ?>">
			</dd>
			<dt>Password</dt>
			<dd>
				<input type="Password" name="Password" value="<?= $Password ?>">
			</dd>
			<dt> Confirm Password</dt>
			<dd>
				<input type="Password" name="CPassword" value="<?= $CPassword ?>">
			</dd>
			<dt> Date of Birth</dt>
			<dd>
				<input type="text" name="DoB" value="<?= $DoB ?>">
			</dd>
			<dt>Gender</dt>
			<dd>
				<input type="radio" name="Gender" value="<?= $Gender ?>">Male
				<input type="radio" name="Gender" value="<?= $Gender ?>">Female
			</dd>
			<dt>Marital Status</dt>
			<dd>
				<input type="radio" name="Status" value="<?= $Status ?>">Single
				<input type="radio" name="Status" value="<?= $Status ?>">Married
				<input type="radio" name="Status" value="<?= $Status ?>">Divorced
				<input type="radio" name="Status" value="<?= $Status ?>">Widowed
			</dd>
			<dt> Address</dt>
			<dd>
				<input type="text" name="Address" value="<?= $Address ?>">
			</dd>
			<dt> City</dt>
			<dd>
				<input type="text" name="City" value="<?= $City ?>">
			</dd>
			<dt> Postal Code </dt>
			<dd>
				<input type="text" name="Postal_Code" value="<?= $Postal_Code ?>">
			</dd>
			<dt> Home Phone </dt>
			<dd>
				<input type="text" name="Home_number" value="<?= $Home_number ?>">
			</dd>
			<dt> Mobile Phone</dt>
			<dd>
				<input type="text" name="Mobile_Phone" value="<?= $Mobile_Phone ?>">
			</dd>
			<dt> Credit Card Number</dt>
			<dd>
				<input type="text" name="Credit_Card_Number" value="<?= $Credit_Card_Number ?>">
			</dd>
			<dt> Credit Card Expiry Date</dt>
			<dd>
				<input type="text" name="Credit_Card_Expiry_Date" value="<?=  $Credit_Card_Expiry_Date ?>">
			</dd>
			<dt> Monthly Salary </dt>
			<dd>
				<input type="text" name="Monthly_Salary" value="<?= $Monthly_Salary ?>">
			</dd>
			<dt> Web Site URL </dt>
			<dd>
				<input type="text" name="URL" value="<?= $URL?>">
			</dd>
			<dt> Overall GPA </dt>
			<dd>
				<input type="text" name="GPA" value="<?= $GPA?>">
			</dd>


			<dt>Output Text: </dt>
			<dd> Name: <?=$Name_match?> </dd>
			<dd> UserName: <?=$user_match?> </dd>
			<dd> Password: <?=$pwd_match?> </dd>
			<dd> Confirm Password: <?=$cpwd_match?> </dd>
			<dd> Data: <?=$data_match?> </dd>
			<dd> Email: <?=$Email_match?></dd>
			<dd> City : <?=$c_match?></dd>
			<dd> Address : <?=$a_match?></dd>
			<dd> Postal Code : <?=$code_match?></dd>
			<dd> Home: <?=$home_match?></dd>
			<dd> Mobile: <?=$Mobile_match?></dd>
			<dd> Credit: <?=$credit_match?></dd>
			<dd> Credit Date : <?=$creditDate_match?></dd>
			<dd> Salary : <?=$salary_match?></dd>
			<dd> URL : <?=$url_match?></dd>
			<dd> GPA : <?=$gpa_match?></dd>

			<dt>&nbsp;</dt>
			<input type="submit" name="submit" value="Check"> 
			</form>
			
			
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
		</dl>
		
	</body>
</html>