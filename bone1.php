
<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale="1"/>
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.css"/>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 
   

	<title>HOSPITAL MANAGEMENT</title>
</head>

<body background="images/hospital.jpg" >
<div class="container">

<?php
include("menu.php")
?>
<div class="row">
    <div class="col-md-12" style="height: 600px;">
<body background="abstract-background-waves-colour-wallpapers-cartoon-backgrounds-wallpapaer.jpg"> 
<form onsubmit="return(abc())" method="push" action="feedback.html">
<h1><center><font color=navy>VENDORS OFFICIAL</font></center></h1><hr>
<pre><font size="4">                                                          User Id:-<input type="text" name="id" size="30" maxlength="40" placeholder="abc@xyz.com" id="1">     password:-<input type="password" name="password" size="20" maxlength="30" id="2"></br></pre>
<pre>                                                                                                         <input type="submit" value="Login" id="100"></pre></font></form>
<h2><center><font color=navy>CREATE NEW ACCOUNT</center></font></h1>
<form onsubmit="return(def())" method="push" action="feedback.html">
<pre><font size="4">                                                                                                       First name:-<input type="text" name="1st name" size="20" maxlength="30" placeholder="AMIGOS" id="3"></br></br></pre>
<pre><font size="4">                                                                                                       Last name:-<input type="text" name="last name" size="20" maxlength="30" placeholder="AMIGOS" id="4"></br></br></pre>
<pre>                                                                                                       Date of birth:-<select id="5">
<option value="-1">Date</option>
<option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option>
<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
</select><select id="6">
<option value="-1"> Month </option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07
</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option></select><select id="7">
<option value="-1"> Year </option><option> 2016 </option><option>2015</option><option>2014</option><option>2013</option><option>2012</option>
<option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option>         
<option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option>         
<option>1999</option><option>1998</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option>         
<option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option>        
<option>1986</option><option>1987</option>         
</select>
</br></pre>
<pre>                                                                                                       Email id:-<input type="text" name="email id" size="30" maxlength="40" placeholder="abc@xyz.com" id="8"></br></br></pre>
<pre>                                                                                                       Password:-<input type="password" name="password" size="20" maxlength="30" id="9"></br></br></pre>
<pre>                                                                                                       Re-Enter Password:-<input type="password" name="password" size="20" maxlength="30" id="12"></br></br></pre>
<pre>                                                                                                       Gender:-<input type="radio" name="optional" id="10">Male       <input type="radio" name="optional" id="11">Female</br></pre>
<pre>                                                                                     <input type="checkbox" id="13"> I Accept that above entered information is correct.</pre></font>
<pre>                                                                                                                   <input type="submit" value="Sign-In"></pre>
<script>
function abc()
{
if(document.getElementById("1").value=="")
{
alert("please enter your User-Id")
document.getElementById("1").focus()
return false;
}
if(document.getElementById("2").value=="")
{
alert("please enter your Password")
document.getElementById("2").focus()
return false;
}
if(document.getElementById("1").value!="mani.deep226@gmail.com")  
{
alert("Entered User-Id is not registered")
document.getElementById("1").focus()
return false;
}
if(document.getElementById("2").value!="manideep")
{
alert("Invalid Password")
document.getElementById("2").focus()
return false;
}
return true;
}
function def()
{
if(document.getElementById("3").value=="")
{
alert("please enter your first name")
document.getElementById("3").focus()
return false;
}
if(document.getElementById("4").value=="")
{
alert("Please enter your Last name")
document.getElementById("4").focus()
return false;
}
if(document.getElementById("5").value=="-1")
{
alert("Please select Date")
document.getElementById("5").focus()
return false;
}
if(document.getElementById("6").value=="-1")
{
alert("Please select Month")
document.getElementById("6").focus()
return false;
}
if(document.getElementById("7").value=="-1")
{
alert("Please select Year")
document.getElementById("7").focus()
return false;
}
if(document.getElementById("8").value=="")
{
alert("Please enter E-Mail id")
document.getElementById("8").focus()
return false;
}
if(document.getElementById("9").value=="")
{
alert("Please enter Password")
document.getElementById("9").focus()
return false;
}
if(document.getElementById("12").value=="" || document.getElementById("12").value!=document.getElementById("9").value)
{
alert("Please Re-enter (or) enter correct Password")
document.getElementById("12").focus()
return false;
}
var a=document.getElementById("10").checked
var b=document.getElementById("11").checked
if((a=="") && (b==""))
{
alert("Select any Gender")
return false;
}
if(document.getElementById("13").checked=="") 
{
alert("Please Accept the Condition")
document.getElementById("13").focus()
return false;
}
if(document.getElementById("8").value=="mani.deep226@gmail.com")
{
alert("This E-Mail is already registered. Please Sign-In with other E-Mail")
document.getElementById("8").focus()
return false;
}
return true;
}
</script>
<a href="../html-link.htm"><img src="fb.jpg" style="width:82px; height:86px" title="White flower" alt="Flower"></a>  <a href="../html-link.htm"><img src="mail.png" style="width:82px; height:86px" title="White flower" alt="Flower"></a>
                                                         
               
</body>
</html>
    
    </div>
</div>

<?php
include("foot.php")
?>

    


</div>
</body>
</html>