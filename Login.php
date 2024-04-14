<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<Title> AgriAssist/Login</Title>
</head>

<body>

	<!-- header -->
	<header>

		

	</header>

	<div class="content">

		<form action="LoginAuth.php" method="POST" onsubmit="return checkForNull()" ;>
		
		<div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
           <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="number" name="usrnm" id="usrnm" placeholder="1-4 digits" value="" required>
              <label for="number">Login Id</label>
          </div>
					
			 <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" placeholder="Password" name="pswd" required>
              <label for="password">Password</label>
          </div>
				</table>
				<input type="submit" class="btn" value="Sign In" name="sbmt">
				
		</form>

	</div>

	<script type="text/javascript">
		function checkForNull() {
			if (document.getElementById('usrnm').value === "" || document.getElementById('pswd').value === "" ||
				document.getElementById('role').value === "") {
				alert("Blank fields not allowed");
				return false;
			}
			return true;

		}


	</script>


	

</body>

</html>