<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 3</title>

	<style>
    h2{
        font-size: 18px;
		color : #483D8B;
    }
	h3{
        color : black;
        background-color: lightgrey;
        text-align: center;
        font-size: 26px;
    }
    h4{
        font-size: 30px;
        color : #483D8B;
        text-align: center;
    }
    body{
        font-size: 16px;
        font-family: Sans-serif;
    }
	</style>
</head>
<body>

<h4>EXERCISE 3</h4>
<h3>Control Flow</h3>
	<h2>
1- Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not: 
	</h2>
	<?php
    $m = date("F");
	if ($m == "Aug"){
	  echo "It's August, so it's still holiday. <br>";
	}     
	 else{
	   echo "Not August, This is $m so i don't have any holidays. <br>";
	 }     
	
    ?>

	<h2>
2- Assign color red to a variable name $color and check to print one the following responses using if else statement  
	</h2>
	<?php
    $color = "red";
	if ($color == red){
	  echo "the color is $color";
	}
	else {
	echo "the color is not $color";
	}
	?>

	<h2>
3- Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail < 50.
	</h2>
<form method="post" action="Exercise_2.php">
    what is the grade : <input type ="text" name="grade"><br><br>
    <input type="submit" name="submit" value="Go" />
    <input type="submit" name="submit" value="reset" action="Exercise_2.php" />
</form> 

	<?php
	 $grade =  $_POST['grade'];
	 if ($grade=="") {
	   echo "";
	 }
   else if ($grade>=80){
	   echo "Excellent";
	 }
	 else if ($grade<=80 && $grade>=70) {
		echo "Great";
	 }
	 else if ($grade<=70 && $grade>=60) {
	  echo "Good";
	 }
	 else if ($grade<=60 && $grade>=50) {
	  echo "Pass";
	 } 
	 else if ($grade<=50 && $grade>=0) {
	  echo "Fail";
	 }
	?>

	<h2>
4- Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)  
	</h2>
    <form method="post" action="Exercise_2.php">
 what is your name : <input type ="text" name="name"><br>
 what is your age :  <input type ="text" name="age"><br><br>
 <input type="submit" name="submit" value="Go" />
 <input type="submit" name="submit" value="reset" action="Exercise_2.php" />

	<?php
	$age = $_POST['age'];
	if ($age>=18){
	  echo "You are eligible to vote";
	}
	else if ($age<=18 && $age<=0){
	  echo "You are not eligible to vote";
	}
	else if ($age== "" && $name == "")
	{
	   echo "";
	}
	?>

	<h2>
5- Use a looping statement to construct the following pattern:
	</h2>

	<?php
    for ($i=9; $i > 0; $i--)  {
	for($j=1;$j<$i; $j++){
		  echo $j ."";
		}
		echo "<br/>";
	}
  ?>  
	
	<h2>
6- Use While loop to print the following pattern: 
	</h2>
  <?php
  for ($i=1; $i<=8; $i++)	
  {	 
  for($j=1;$j<=$i;$j++)	  
  {	  	
  echo " * ";	 
  }	  	
  echo "<br/>";   	
  }  
  ?>

	<h2>
7- Create a GitHub repo and enable GitHub pages for the repo. Upload an HTML file of yours to the repo. You should include in your PHP code the link to the repo and your web page. 
	</h2>
	
	<?php
	
    
	?>

	<h2>
8- Give  1 or 0 point for the clarity of the task (User interface).
	</h2>
    <?php
    
   ?>

</body>
</html>