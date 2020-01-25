<!DOCTYPE html>
<html>
	<head>

		<?php include 'head.html'; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

		<script>
			$(document).ready(
				function (){
				$('.highlight').addClass("lightblue");
			});
		</script>

		<script type="text/javascript">

			 var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-23430411-1']);
				_gaq.push(['_trackPageview']);

				(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();

		</script>

	</head>

	<body>

		<div id='header'>
			<?php include 'header.html'; ?>
		</div>

		<div id='menu'>
			<?php include 'menu.html'; ?>
		</div>

		<div id='main' class='lightblue'>
			<form method='POST' action='contact_send.php'>
				<div class='row'>
					<div class='col-6'>
						<div><label>First Name:</label></div>
						<div><input class='form-control' type='text' name='first_name'/></div>
						<div><label>Surname:</label></div>
						<div><input class='form-control' type='text' name='surname'/></div>
						<div><label>Email:</label></div>
						<div><input class='form-control' type='text' name='user_email'/></div>
					</div>
				</div>
				<div class='row'>
					<div class='col-9'>
						<div><label>Message:</label></div>
						<div><textarea rows='10' class='form-control' name='msg_body' placeholder="Please input your message here..."></textarea></div>
						<div><input class='button' type='submit' value='Send'/></div>
					</div>
				</div>
			</form>
		</div>

		<div id='social'>
			<?php include 'social.html'; ?>
		</div>

		<div id='footer'>
			<?php include 'footer.html'; ?>
		</div>

	</body>
</html>
