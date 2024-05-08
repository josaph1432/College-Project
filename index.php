<?php

include("connect.php");

if(isset($_POST['submit'])) {
	$query = mysqli_query($conn,
	"INSERT INTO DATA SET firstname='"
	. $_POST["firstname"] . "' ,lastname ='"
	. $_POST["lastname"] . "' ,username ='"
	. $_POST["username"] . "' ,year	 ='"
	. $_POST["year"] . "'     ,mid='"
	. $_POST["mid"] . "' 	 ,mob	 ='"
	. $_POST["mob"] . "'	 ,pwd ='"
	. $_POST["pwd"] . "',dbms='"
	. $_POST["dbms"] . "',sedp='"
	. $_POST["sedp"] . "',cn='"
	. $_POST["cn"] . "' ,dwdm='"
	. $_POST["dwdm"] . "' ,mad='"
	. $_POST["mad"] . "'   	 ");
	
?>
<script>
	alert('You Registered Successfully, Login now');
</script>
<?php
}
?>
<html>

<head>
	<meta charset="utf-8">
	<title>RISE COLLEGE PRAKSAM MCA</title>
	<style>
		th {
			text-align: left;
		}

		td {
			text-align: center;
		}

		a {
			text-decoration: none;
		}
	</style>
</head>

<body>
	<a href="login.php"
		style="font-size:30px; float:right;">
		Login
	</a>
	<form method="post" action="index.php" name="frm1">

		<fieldset>
			<legend align="center">
				<h1>RISE COLLEGE MCA MID MARKS ADDING</h1>
			</legend>
			<table align="center" border="1"
				width="40%" style="border:thick;">
				<tr>
					<th height="40"><label for="firstname">
							First Name</label>
					</th>
					<td><input type="text"
						name="firstname"
						id="firstname" required>
					</td>
					<th height="40"><label for="dbms">
						DBMS</label>
				</th>
				<td><input type="number"
					name="dbms"
					id="dbms" required>
				</td>
				</tr>
				<tr>
					<th height="40"><label for="lastname">
							Last Name</label>
					</th>
					<td><input type="text"
							name="lastname"
							id="lastname" required>
					</td>
					<th height="40"><label for="sedp">
						SEDP</label>
				</th>
				<td><input type="number"
						name="sedp"
						id="sedp" required>
				</td>
				</tr>
				<tr>
					<th height="40"><label for="username">
							Username</label>
					</th>
					<td><input type="text"
						name="username"
						id="username" required>
					</td>
					<th height="40"><label for="cn">
					CN</label>
				</th>
				<td><input type="number"
					name="cn"
					id="cn" required>
				</td>
				</tr>
				<tr>
					<th height="40">
						<label for="year">Year</label>
					</th>
					<td><select name="year"
						id="year" required>
							<option value="">
								Choose Year
							</option>
							<option value="First Year">
								First Year
							</option>
							<option value="Second Year">
								Second Year
							</option>
						</select>
					</td>
				</tr>
				<tr>
					<th height="40">
						<label for="mid">MID</label>
					</th>
					<td><select name="mid"
						id="mid" required>
							<option value="">
								Choose MID
							</option>
							<option value="First ">
								First 
							</option>
							<option value="Second">
								Second 
							</option>
						</select>
					</td>
				</tr>
				<tr>
					<th height="40">
						<label for="mob">Mob.No.</label>
					</th>
					<td><input type="tel" name="mob"
							id="mob" required>
					</td>
					<th height="40">
						<label for="dwdm">DW,DM</label>
					</th>
					<td><input type="number" name="dwdm"
							id="dwdm" required>
					</td>
				</tr>
				<tr>
					<th height="40">
						<label for="pwd">Password</label>
					</th>
					<td><input type="password"
						name="pwd" id="pwd" required>
					</td>
					<th height="40">
						<label for="mad">MAD</label>
					</th>
					<td><input type="number"
						name="mad" id="mad" required>
					</td>
				</tr>
				<tr>
					<td height="40" colspan="2"><input 
						type="submit" name="submit"
						value="SUBMIT">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>
