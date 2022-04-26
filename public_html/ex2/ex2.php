<?php 

	$answer1 = $_POST['q1'];
	$answer2 = $_POST['q2'];
	$answer3 = $_POST['q3'];
	$answer4 = $_POST['q4'];
	$answer5 = $_POST['q5'];
	
	$totalCorrect = 0;
	
	if($answer1 == "Ochai Agbaji") {$totalCorrect++;}
	if($answer2 == "Anthony") {$totalCorrect++;}
	if($answer3 == "Yeji") {$totalCorrect++;}
	if($answer4 == "Topeka") {$totalCorrect++;}
	if($answer5 == "2001") {$totalCorrect++;}
	
	echo "Question 1: Who was the Most Outstanding Player in the 2022 NCAA MBB Championship Game? <br>";
	echo "	You answered: $answer1 <br>";
	echo "	Correct Answer: Ochai Agbaji <br>";
	
	echo "<br>Question 2: What is William Washburn's middle name? <br>";
	echo "	You answered: $answer2 <br>";
	echo "	Correct Answer: Anthony <br>";
	
	echo "<br>Question 3: Who is the leader of ITZY? <br>";
	echo "	You answered: $answer3 <br>";
	echo "	Correct Answer: Yeji <br>";
	
	echo "<br>Question 4: What is the capital of Kansas? <br>";
	echo "	You answered: $answer4 <br>";
	echo "	Correct Answer: Topeka <br>";
	
	echo "<br>Question 5: What year was Duy Vu born? <br>";
	echo "	You answered: $answer5 <br>";
	echo "	Correct Answer: 2001 <br>";
	
	$finalScore = ($totalCorrect/5)*100;
	
	echo "<br>You got $totalCorrect questions right!";
	echo "<br> Your score is $finalScore%"
 
?>