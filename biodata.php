<!DOCTYPE html>
<html>
<head>
	<title>PHP Post Method Activity 2</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

	<center>
		<form method="POST" action="biodata.php">
			<table cellpadding="10" cellspacing="3">
				<tr>
					<th colspan="2" class="header">BIODATA</th>
				</tr>
				<tr>
					<td colspan="2">Name: <br><input class="input1" type="text" name="name"></td>
				</tr>
				<tr>
					<td colspan="2">Present Address: <br><input class="input1" type="text" name="present_addr"></td>
				</tr>
				<tr>
					<td colspan="2">Permanent Address: <br><input class="input1" type="text" name="permanent_addr"></td>
				</tr>
				<tr>
					<td>Date of Birth: <br><input style="width: 80%;" class="input1" type="text" name="DObirth"></td>
					<td>Religion: <br><input type="text" name="religion"></td>
				</tr>
				<tr>
					<td>Civil Status: <br><input style="width: 80%;" class="input1" type="text" name="civil_status"></td>
					<td>Age: <br><input type="text" name="age"></td>
				</tr>
				<tr>
					<td>Citizenship: <br><input style="width: 80%;" class="input1" type="text" name="citizenship"></td>
					<td>Weight: <br><input type="text" name="weight"></td>
				</tr>
				<tr>
					<td>Place of Birth: <br><input style="width: 80%;" class="input1" type="text" name="POBirth"></td>
					<td>Height: <br><input type="text" name="height"></td>
				</tr>
				<tr>
					<td colspan="2">Name of Father: <br><input class="input1" type="text" name="NOFather"></td>
				</tr>
				<tr>
					<td colspan="2">Name of Mother: <br><input class="input1" type="text" name="NOMother"></td>
				</tr>
				<tr>
					<td colspan="2">Address: <br><input class="input1" type="text" name="address"></td>
				</tr>
				<tr>
					<td colspan="2">Languages or Dialects Spoken: <br><input class="input1" type="text" name="languages_dialects"></td>
				</tr>
				<tr>
					<td colspan="2">Person to be notified In Case of Emergency: <br>
						<input class="input1" type="text" name="person_notified"></td>
				</tr>
				<tr>
					<th colspan="2" class="header2">
						EDUCATIONAL BACKGROUND:
					</th>
				</tr>
				<tr>
					<td>Elementary: <br><input style="width: 80%;" class="input1" type="text" name="elementary"></td>
					<td>Year Graduated: <br><input type="text" name="elementary_grad"></td>
				</tr>
				<tr>
					<td>High School: <br><input style="width: 80%;" class="input1" type="text" name="high_school"></td>
					<td>Year Graduated: <br><input type="text" name="high_school_grad"></td>
				</tr>
				<tr>
					<td>College:<br> <input style="width: 80%;" class="input1" type="text" name="college"></td>
					<td>Year Graduated: <br><input type="text" name="college_grad"></td>
				</tr>
				<tr>
					<td colspan="2">Course: <br><input class="input1" type="text" name="course"></td>
				</tr>
				<tr>
					<td colspan="2">Special Skills: <br><input class="input1" type="text" name="skills"></td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
						<a href="#output"><input class="button" type="submit" name="submit"></a>
						</center>
					</td>
				</tr>
			</table>
		</form>
	</center>
	<br><br>
	
	<center>
		<?php
			if(isset($_POST['submit'])) {
				$name = $_POST['name'];
				$present_addr = $_POST['present_addr'];
				$permanent_addr = $_POST['permanent_addr'];
				$DObirth = $_POST['DObirth'];
				$religion = $_POST['religion'];
				$civil_status = $_POST['civil_status'];
				$age = $_POST['age'];
				$citizenship = $_POST['citizenship'];
				$weight = $_POST['weight'];
				$POBirth = $_POST['POBirth'];
				$height = $_POST['height'];
				$NOFather = $_POST['NOFather'];
				$NOMother = $_POST['NOMother'];
				$address = $_POST['address'];
				$languages_dialects = $_POST['languages_dialects'];
				$person_notified = $_POST['person_notified'];
				$elementary = $_POST['elementary'];
				$elementary_grad = $_POST['elementary_grad'];
				$high_school = $_POST['high_school'];
				$high_school_grad = $_POST['high_school_grad'];
				$college = $_POST['college'];
				$college_grad = $_POST['college_grad'];
				$course = $_POST['course'];
				$skills = $_POST['skills'];

			echo "<table cellpadding=10>";
				echo "<th colspan=2 class=header>BIODATA</th>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Name: &nbsp;" . $name;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Present Address: ".$present_addr;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Permanent Address: " . $permanent_addr;
				echo "</tr>";
				echo "</td>";
				echo "<tr>";
				echo "<td>";
				echo "Date of Birth: ".$DObirth;
				echo "</td>";
				echo "<td>";
				echo "Religion: ".$religion;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Civil Status: ".$civil_status;
				echo "</td>";
				echo "<td>";
				echo "Age: ".$age;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Citizenship: ".$citizenship;
				echo "</td>";
				echo "<td>";
				echo "Weight: ".$weight;
				echo "</td>";
				echo "</tr>";echo "<tr>";
				echo "<td>";
				echo "Place of Birth: ".$POBirth;
				echo "</td>";
				echo "<td>";
				echo "Height: ".$height;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Name of Father: " . $NOFather;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Name of Mother: " . $NOMother;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Address: " . $address;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Languages or Dialects Spoken: " . $languages_dialects;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Person to be notified In Case of Emergency: " . $person_notified;
				echo "</td>";
				echo "</tr>";
				echo "<tr><th colspan=2 class=header2>EDUCATIONAL BACKGROUND:</th></tr>";
				echo "<tr>";
				echo "<td>";
				echo "Elementary: ".$elementary;
				echo "</td>";
				echo "<td>";
				echo "Year Graduated: ".$elementary_grad;
				echo "</td>";
				echo "<tr>";
				echo "<tr>";
				echo "<td>";
				echo "High School: ".$high_school;
				echo "</td>";
				echo "<td>";
				echo "Year Graduated: ".$high_school_grad;
				echo "</td>";
				echo "<tr>";
				echo "<tr>";
				echo "<td>";
				echo "College: ".$college;
				echo "</td>";
				echo "<td>";
				echo "Year Graduated: ".$college_grad;
				echo "</td>";
				echo "<tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Course: " . $course;
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=2>";
				echo "Special Skills: " . $skills;
				echo "</td>";
				echo "</tr>";
			echo "</table>";
			}
		?>
	</center>
	
</body>
</html>