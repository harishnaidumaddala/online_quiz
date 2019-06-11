<html>

<head>

<!---
author harishnaidu maddala
about : online test for 20 bits
languages : my sqli,php,html



--->


 <div>Time left = <span id="timer"></span></div>
 <script>
 document.getElementById('timer').innerHTML =
  20 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){alert('timer completed')}
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}</script>

</head>
<body>
<style>

div{
	
  background-color:#419D78;
  color:#EFD0CA;
  font-size:20px;
  text-align:center;
}
</style>
<!---------------------------------------------------------timer------------------------------------------------------------------------>
<!-------------------------------------------------------------closetimer------------------------------------------------------------------->


<!-------------------------------------------------------------form--------------------------------------------------------------------------->
<style>
body {
    background-color: lightblue;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 200px;
    height: 150px;    
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;


</style>
<h1 align="center">online competetive</h1>
<hr>

<!--------tablecreated-------------------------------->
<!-----

---->
<table background=""  border="0" width="100%">
	<tr>
	
		<td width="20%" height="50" >  </td>
		<td width="50%">
			<form  action="set12345.php" method="post">
	
			
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username with surname" name="uname" required>

				<label for="contact"><b>phone num</b></label>
				<input type="text" placeholder="Enter mobile number needed" name="psw" required>
				
					<label for="college"><b>college</b></label>
				<input type="text" placeholder="Enter college name needed" name="cname" required>
			
		</td>	
		<td width="30%">         <p  size="7"><button><label><b>Your answers :</b></label></button></p>   
		<?php
		if(isset($_POST['submit'])){
			
		
		echo " scroll down for obtained marks";   
		}
	?>
		</td>
	</tr>
	<tr>
		<td width="100"></td>
		<td width="600">
	

		
	<!--------------------------------------------------------------questions------------------------------------------------------------------------------------>
	<!----<form  action="testset.php" method="post">  -->
	
	

		<p class="question1">1.Which keyword can be used for coming out of recursion?</p>
			<ul class="answers1">
				<input type="radio" name="q1" value="1" id="q1a"><label for="q1a">break</label><br/>
				<input type="radio" name="q1" value="2" id="q1b"><label for="q1b">return</label><br/>
				<input type="radio" name="q1" value="3" id="q1c"><label for="q1c">exit</label><br/>
				<input type="radio" name="q1" value="4" id="q1d"><label for="q1d"> both break and return</label><br/>
			</ul> 


		<p class="question2">2.Which among the following is wrong for “register int a;”?  </p>
			<ul class="answers2">
					<input type="radio" name="q2" value="1" id="q2a"><label for="q2a">Compiler generally ignores the request</label><br/>
					<input type="radio" name="q2" value="2" id="q2b"><label for="q2b">You cannot take the address of this variable</label><br/>
					<input type="radio" name="q2" value="3" id="q2c"><label for="q2c">Access time to a is critical</label><br/>
					<input type="radio" name="q2" value="4" id="q2d"><label for="q2d">None of the mentioned</label><br/>
			</ul> 

		<p class="question3">3. Register storage class can be specified to global variables.</p>
			<ul class="answers3">
				<input type="radio" name="q3" value="1" id="q3a"><label for="q3a">True</label><br/>
				<input type="radio" name="q3" value="2" id="q3b"><label for="q3b">False</label><br/>
				<input type="radio" name="q3" value="3" id="q3c"><label for="q3c">Depends on the compiler</label><br/>
				<input type="radio" name="q3" value="4" id="q3d"><label for="q3d">Depends on the standard</label><br/>
			</ul> 

		<p class="question4">4.register keyword mandates compiler to place it in machine register.</p>
			<ul class="answers4">
				<input type="radio" name="q4" value="1" id="q4a"><label for="q4a">True</label><br/>
				<input type="radio" name="q4" value="2" id="q4b"><label for="q4b">False</label><br/>
				<input type="radio" name="q4" value="3" id="q4c"><label for="q4c">Depends on the standard</label><br/>
				<input type="radio" name="q4" value="4" id="q4d"><label for="q4d"> None of the mentioned</label><br/>
			</ul> 
		<p class="question5">5. What is the format identifier for “static a = 20.5;”?</p>
			<ul class="answers5">
				<input type="radio" name="q5" value="1" id="q5a"><label for="q5a">%s</label><br/>
				<input type="radio" name="q5" value="2" id="q5b"><label for="q5b">%d</label><br/>
				<input type="radio" name="q5" value="3" id="q5c"><label for="q5c"> %f</label><br/>
				<input type="radio" name="q5" value="4" id="q5d"><label for="q5d"> Illegal declaration due to absence of data type</label><br/>
			</ul> 
		<p class="question6">6.Which of the following is true for static variable?</p>
			<ul class="answers6">
				<input type="radio" name="q6" value="1" id="q6a"><label for="q6a">It can be called from another function</label><br/>
				<input type="radio" name="q6" value="2" id="q6b"><label for="q6b">It exists even after the function ends</label><br/>
				<input type="radio" name="q6" value="3" id="q6c"><label for="q6c">It can be modified in another function by sending it as a parameter</label><br/>
				<input type="radio" name="q6" value="4" id="q6d"><label for="q6d"> All of the mentioned</label><br/>
			</ul> 
		<p class="question7">7.Assignment statements assigning value to local static variables are executed only once.</p>
			<ul class="answers7">
				<input type="radio" name="q7" value="1" id="q7a"><label for="q7a">True</label><br/>
				<input type="radio" name="q7" value="2" id="q7b"><label for="q7b">False</label><br/>
				<input type="radio" name="q7" value="3" id="q7c"><label for="q7c">Depends on the code</label><br/>
				<input type="radio" name="q7" value="4" id="q7d"><label for="q7d">None of the mentioned</label><br/>
			</ul> 
		<p class="question8">8.Is initialisation mandatory for local static variables?</p>
			<ul class="answers8">
				<input type="radio" name="q8" value="1" id="q8a"><label for="q8a"> Yes</label><br/>
				<input type="radio" name="q8" value="2" id="q8b"><label for="q8b"> No</label><br/>
				<input type="radio" name="q8" value="3" id="q8c"><label for="q8c"> Depends on the compiler</label><br/>
				<input type="radio" name="q8" value="4" id="q8d"><label for="q8d"> Depends on the standard</label><br/>
			</ul> 

		<p class="question9">9. Functions have static qualifier for its declaration by default.</p>
			<ul class="answers9">
				<input type="radio" name="q9" value="1" id="q9a"><label for="q9a">True</label><br/>
				<input type="radio" name="q9" value="2" id="q9b"><label for="q9b">False</label><br/>
				<input type="radio" name="q9" value="3" id="q9c"><label for="q9c">Depends on the compiler</label><br/>
				<input type="radio" name="q9" value="4" id="q9d"><label for="q9d"> Depends on the standard</label><br/>
			</ul> 
		<p class="question10">10. Which of the following cannot be static in C?
</p>
			<ul class="answers10">
				<input type="radio" name="q10" value="1" id="q10a"><label for="q10a">Variables</label><br/>
				<input type="radio" name="q10" value="2" id="q10b"><label for="q10b">Functions</label><br/>
				<input type="radio" name="q10" value="3" id="q10c"><label for="q10c">Structures</label><br/>
				<input type="radio" name="q10" value="4" id="q10d"><label for="q10d">None of the mentioned</label><br/>
			</ul> 


		<p class="question11">11.Which of following is not accepted in C?</p>
			<ul class="answers11">
				<input type="radio" name="q11" value="1" id="q11a"><label for="q11a">static a = 10; //static as</label><br/>
				<input type="radio" name="q11" value="2" id="q11b"><label for="q11b">static int func (int); //parameter as static</label><br/>
				<input type="radio" name="q11" value="3" id="q11c"><label for="q11c">static static int a; //a static variable prefixed with static</label><br/>
				<input type="radio" name="q11" value="4" id="q11d"><label for="q11d">all of the mentioned</label><br/>
			</ul> 


		<p class="question12">12.What is the scope of a function?</p>
			<ul class="answers12">
				<input type="radio" name="q12" value="1" id="q12a"><label for="q12a">Whole source file in which it is defined</label><br/>
				<input type="radio" name="q12" value="2" id="q12b"><label for="q12b">From the point of declaration to the end of the file in which it is defined</label><br/>
				<input type="radio" name="q12" value="3" id="q12c"><label for="q12c">Any source file in a program</label><br/>
				<input type="radio" name="q12" value="4" id="q12d"><label for="q12d"> From the point of declaration to the end of the file being compiled</label><br/>
			</ul> 

		<p class="question13">13.What is the scope of an external variable?</p>
			<ul class="answers13">
				<input type="radio" name="q13" value="1" id="q13a"><label for="q13a">Whole source file in which it is defined</label><br/>
				<input type="radio" name="q13" value="2" id="q13b"><label for="q13b"> From the point of declaration to the end of the file in which it is defined</label><br/>
				<input type="radio" name="q13" value="3" id="q13c"><label for="q13c">Any source file in a program</label><br/>
				<input type="radio" name="q13" value="4" id="q13d"><label for="q13d">From the point of declaration to the end of the file being compiled</label><br/>
			</ul> 

		<p class="question14">14. What is the scope of an external variable?</p>
			<ul class="answers14">
				<input type="radio" name="q14" value="1" id="q14a"><label for="q14a">Whole source file in which it is defined</label><br/>
				<input type="radio" name="q14" value="2" id="q14b"><label for="q14b"> From the point of declaration to the end of the file in which it is defined</label><br/>
				<input type="radio" name="q14" value="3" id="q14c"><label for="q14c"> Any source file in a program</label><br/>
				<input type="radio" name="q14" value="4" id="q14d"><label for="q14d">From the point of declaration to the end of the file being compiled</label><br/>
			</ul> 
		<p class="question15">15.Property of the external variable to be accessed by any source file is called by the C90 standard as ____</p>
			<ul class="answers15">
				<input type="radio" name="q15" value="1" id="q15a"><label for="q15a">external linkage</label><br/>
				<input type="radio" name="q15" value="2" id="q15b"><label for="q15b">external scope</label><br/>
				<input type="radio" name="q15" value="3" id="q15c"><label for="q15c"> global scope</label><br/>
				<input type="radio" name="q15" value="4" id="q15d"><label for="q15d"> global linkage</label><br/>
			</ul> 
		<p class="question16">16.What is the return-type of the function sqrt()? </p>
			<ul class="answers16">
				<input type="radio" name="q16" value="1" id="q16a"><label for="q16a"> int</label><br/>
				<input type="radio" name="q16" value="2" id="q16b"><label for="q16b"> float</label><br/>
				<input type="radio" name="q16" value="3" id="q16c"><label for="q16c"> double</label><br/>
				<input type="radio" name="q16" value="4" id="q16d"><label for="q16d">depends on the data type of the parameter
</label><br/>
			</ul> 
		<p class="question17">17. goto can be used to jump from main() to within a function.</p>
			<ul class="answers17">
				<input type="radio" name="q17" value="1" id="q17a"><label for="q17a">true</label><br/>
				<input type="radio" name="q17" value="2" id="q17b"><label for="q17b">false</label><br/>
				<input type="radio" name="q17" value="3" id="q17c"><label for="q17c">depends</label><br/>
				<input type="radio" name="q17" value="4" id="q17d"><label for="q17d"> varies</label><br/>
			</ul> 
		<p class="question18">18.Which keyword is used to come out of a loop only for that iteration?</p>
			<ul class="answers18">
				<input type="radio" name="q18" value="1" id="q18a"><label for="q18a">break</label><br/>
				<input type="radio" name="q18" value="2" id="q18b"><label for="q18b">continue</label><br/>
				<input type="radio" name="q18" value="3" id="q18c"><label for="q18c">return</label><br/>
				<input type="radio" name="q18" value="4" id="q18d"><label for="q18d"> none of the mentioned</label><br/>
			</ul> 

		<p class="question19">19.The keyword ‘break’ cannot be simply used within ___</p>
			<ul class="answers19">
				<input type="radio" name="q19" value="1" id="q19a"><label for="q19a">do-while</label><br/>
				<input type="radio" name="q19" value="2" id="q19b"><label for="q19b"> if-else</label><br/>
				<input type="radio" name="q19" value="3" id="q19c"><label for="q19c"> for</label><br/>
				<input type="radio" name="q19" value="4" id="q19d"><label for="q19d"> while</label><br/>
			</ul> 
		<p class="question20">20.Which loop is most suitable to first perform the operation and then test the condition?</p>
			<ul class="answers20">
				<input type="radio" name="q20" value="1" id="q20a"><label for="q20a"> for loop</label><br/>
				<input type="radio" name="q20" value="2" id="q20b"><label for="q20b">while loop</label><br/>
				<input type="radio" name="q20" value="3" id="q20c"><label for="q20c"> do-while loop</label><br/>
				<input type="radio" name="q20" value="4" id="q20d"><label for="q20d"> none of the mentioned</label><br/>
			</ul> 	




			<input type="submit" name="submit" value="Submit">  
		</form><br>
		<br>
	</td>

	<td>
<!----------------------------------------------------------questions ended---------------------------------------------------------------------------------------->
<?php
	$i=0;
	$p=1;
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname="fest";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
		if(! $conn)
			die('could not connect:' .mysqli_connect_error());
		else
			#echo"connected";

mysqli_select_db($conn,"fest");
#------------------------------------------------asigning correct answers to array-----------------------------------------------------------
$q1=0;
$q2=0;
$q3=0;
$q4=0;
$q5=0;
$q6=0;
$q7=0;
$q8=0;
$q9=0;
$q10=0;
$q11=0;
$q12=0;
$q13=0;
$q14=0;
$q15=0;
$q16=0;
$q17=0;
$q18=0;
$q19=0;
$q20=0;
    $uname='';
	$psw='';
	$cname='';
  if (isset($_POST['submit'])) {
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$cname=$_POST['cname'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$q16=$_POST['q16'];
$q17=$_POST['q17'];
$q18=$_POST['q18'];
$q19=$_POST['q19'];
$q20=$_POST['q20'];

  }
$b=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$a= array(2,4,2,2,2,2,2,2,2,4,3,4,4,4,1,3,2,2,2,3);
#$b=array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],$_POST['q6'],$_POST['q7'],$_POST['q8'],$_POST['q9'],$_POST['q10'],$_POST['q11'],$_POST['q12'],$_POST['q13'],$_POST['q14'],$_POST['q15'],$_POST['q16'],$_POST['q17'],$_POST['q18'],$_POST['q19'],$_POST['q20']);#asigning answers to another array
$k=0;
$b=array($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20);

#----------------------------------------------printing their answers--------------------------------------------------------------
?>
<table background="#FAEBD7">
<p name="panswers" color="#FAEBD7">


</p>
</table>
<?php
#---------------------------------------------------------------verifying answers------------------------------------------------------------
	
	$c=0;
		$marks=0;
	if (isset($_POST['submit'])) {
		
	for($m=0;$m<20;$m++){
		if($a[$m]==$b[$m]){
			$c=$m+1;
			echo "<br>correct answer for question : ".$c;
			$marks=$marks+1;
		}
	}
	
#--------------------------------------------------------------------------------------printing marks obtained-------------------------------------

	echo "<br>marks obtained<br>".$marks;
	}
	#--------------------------------------------------------------------------posting marks to database---------------------------------------
	#mysql_select_db($dbname,$conn);
		
		$sql="INSERT INTO sampleset(name,phno,cname,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,marks) VALUES('$uname','$psw','$cname','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$marks')";
		
#if(!mysqli_query($sql,$conn))
#		die('Error: ' . mysql_error());


            if (mysqli_query($conn, $sql)) {
             #  echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
#---------------------------------------------------------------posting marks to the form------------------------------------------------------







#----------------------------------------------------------------closing connection----------------------------------------------------------------------------------
mysqli_close($conn);


?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		
		
		</tr>
</table>
<hr>
<div >
<h3 align="center">DEVELOPED BY HARISH NAIDU MADDALA</h3>
</class>
<div>



</html>