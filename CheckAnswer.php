<a href = 'Student.php' >Home</a></br>
<?php
$totalNo = $_POST['hidden1'];
echo "<table width = '500' height = '25' border = '0'>";
echo "<tr>";
echo "<td width = '200'><b>Question</b></td>";
echo "<td width = '200'><b>You choose</b></td>";
echo "<td width = '200'><b>Correct Answer</b></td>";
echo "</tr>";
for ($i = 1; $i <= $totalNo; $i++){
    static $score = 0;
	//$Choose = $_POST['Question'][$i]
	
	//echo "<tr>";
    if ($_POST['Question'][$i] == $_POST['CorrectAnswer'][$i]){
    	$score ++;
		//echo 'Score is ' .$score;
		echo "<tr>";
		echo "<td width = '200'";
		echo "<b>$i. </b><span style = 'color:009900'>Correct Answer</span>";
		echo "</td>";
		echo "<td width = '200'><span style = 'color:009900'>".$_POST['Question'][$i]."</span>";
		echo "</td>";
		echo "</tr>";
	}
	else{
	    echo "<tr>";
		echo "<td width = '200'";
	    echo "<b>$i. </b><span style = 'color:FF0000'>Wrong Answer</span>";
		echo "</td>";
		echo "<td width = '200'><span style = 'color:FF0000'>".$_POST['Question'][$i]."</span>";
		echo "</td>";
		echo "<td width = '200'><span style = 'color:009900'>". $_POST['CorrectAnswer'][$i] ."</span>";
		echo "</tr>";
	}
	
}
echo "</table>";
$i--;
echo "</br><b>Your score is <span style = 'color:00CC00'>$score/$i</span></b>";
//echo "$score / $i";
?>