<html>
<head>
	<title>PHP login system</title>
	<style>
	.rowVal{
		border-style:solid;
		width:50%;
	}
	</style>
</head>
<body>
	<div = "frmLogin" style="text-align:center;">
		<h1>Login</h1>
		<form method="POST" action="landing.php">
		
			<h2 style="font-family: arial;"><?php
				Session_Start();
				echo"Hello ".$_SESSION['USERNAME'];
			?>
			</h2>
			<br>
			<br>
			<br>
			<input type="text" placeholder="Type text" name="sbar" />
			<input type="submit" value="SEARCH" name="SBarButton"/>
			
			<br>
			<br>
			<br>
			
			<center>
				<table style="border-style:solid;width:30%;">
					<tr style="border-style:solid">
						<th style="border-style:solid;">ID</th>
						<th style="border-style:solid;">Name</th>
						<th style="border-style:solid;">Email</th>
						<th style="border-style:solid;">Pass</th>
					</tr>
					<?php
			if(isset($_POST['SBarButton'])){
				$Input=$_POST['sbar'];
				$connString=mysqli_connect("localhost","root","","dblogin");
				$Result = mysqli_query($connString,"Select * from tbllogin where id='$Input' or name='$Input'");
				while($rows = mysqli_fetch_assoc($Result)){ 
					echo"<center><tr>
							<td class='rowVal'>".$rows['id']."</td>
							<td class='rowVal'>".$rows['name']."</td>
							<td class='rowVal'>".$rows['email']."</td>
							<td class='rowVal'>".$rows['pass']."</td>
							<br>
							</tr>
						</center>
						";
				}
			}else{
				$connString=mysqli_connect("localhost","root","","dblogin");
				$Result = mysqli_query($connString,"Select * from tbllogin");
				while($rows = mysqli_fetch_assoc($Result)){ 
					echo"<center><tr>
							<td class='rowVal'>".$rows['id']."</td>
							<td class='rowVal'>".$rows['name']."</td>
							<td class='rowVal'>".$rows['email']."</td>
							<td class='rowVal'>".$rows['pass']."</td>
							<br>
							</tr>
						</center>
						";
				}
				
			}
			
			?>
				</table>
			</center>
			
			
		</form>
	</div>
</body>
</html>

