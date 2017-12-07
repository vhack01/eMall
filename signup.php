<?php
	include('page/server/signup_server.php');
?>
<html>
<head>
	<title></title>
	<!--Predefined-->
	<link rel="stylesheet" type="text/css" href="style/jquery-ui.min.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!--Mannul-->
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<script src="js/main.js"></script>
</head>
<body>
	<!--signup_background-->
	<div id=signup_bkg>

	</div>
	<div class="sg-panel">
		<div class="sg-panel-1">
			<span id='signup_link'>Sign Up</span>
			<span id='login_link'>Login</span>
		</div>
		<div class=sg-panel-2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<ul class="sg-ul">
				<li>
					<ul id=sg-ul-ul>
						<li><input type="text" name="sg-fname" placeholder="First Name *" required spellcheck="false" autocomplete="off"></li>
						<li><input type="text" name="sg-lname" placeholder="Last Name *" spellcheck="false" autocomplete="off" required></li>
						<span id='sg-name-err'><?php if(isset($is->fnmErr)) echo $is->fnmErr;?></span>
					</ul>
				</li>
				<li>
					<input type="email" name="sg-email" placeholder="Email *" spellcheck="false" autocomplete="off" required>
					<span class="sg-err"><?php if(isset($is->emlErr)) echo $is->emlErr;?></span>
				</li>				
				<li>
					<input type="password" name="sg-psd" placeholder="Password *" required spellcheck="false" autocomplete="off">
					<span class="sg-err"><?php if(isset($is->psdErr)) echo $is->psdErr;?></span>
				</li>
				<li>
					<input type="password" name="sg-cpsd" placeholder="Confirm Password *" required spellcheck="false" autocomplete="off">
					<span class="sg-err"><?php if(isset($is->fnmErr)) echo $is->fnmErr;?></span>
				</li>
				<li>
					<input type="tel" name="sg-mobile" placeholder="Mobile *" required spellcheck="false" autocomplete="off">
					<span class="sg-err"><?php if(isset($is->fnmErr)) echo $is->fnmErr;?></span>
				</li>
				<li id=sg-gender>
					<input type="radio" name="gender" value="male" id=male-radio selected required spellcheck="false" autocomplete="off">
					<label for=male-radio>Male</label>
					<input type="radio" name="gender" value='female' id=female-radio required spellcheck="false" autocomplete="off">
					<label for=female-radio>Female</label>
				</li>
				<li id=sg-gender>
					<input type="checkbox" id=termCon required>
					<label for=termCon>I accept the term and conditions.</label>
				</li>
				<li id=submit>
						<input type="submit" value="Create account">
				</li>
			</ul>
			</form>	
		</div>
	</div>





</body>
</html>