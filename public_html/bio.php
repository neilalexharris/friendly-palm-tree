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

		<div id="main" class="lightblue">
			<h1 class="lightblue">About Me</h1>
			<br/>

			<img class="img-pad" src="images/Photos/tatum_profile_rounded2_small.png" align="right" alt="Tatum Nelson"/>

			<p>Having a wealth of experience as an elite athlete over 100m, 200m and 400m, Tatum competed for Great Britain and
			England on many occasions and she offers a rare insight into the world of elite sport</p>
			<br/>

			<p>Tatum started her career at the age of 14 as one of the best juniors in the World over the sprint
			distances. Her accolades include World Schools 100m Silver medallist and 4x100m Gold medallist; European Junior 100m
			finalist and 4x100m Silver medallist, and still features in Britain's top 10 fastest ever times for 100m and 200m.</p>
			<br/>

			<p>She has trained with many of athletics' elite, and has also worked with sports people from other disciplines including
			Olympic swimmer Mark Foster and former All Black rugby international Jonah Lomu</p>
			<br/>

			<p>During her sporting career Tatum travelled to Europe, the Middle East, America and Australia, gaining experience in how
			other nations approach fitness and she incorporates this into her training programmes</p>
			<br/>

			<p>Also a trained dancer, Tatum completed ballet training to Elementary Level, and it was here that her
			passion for fitness began</p>
			</br>
		</div>

		<div id='social'>
			<?php include 'social.html'; ?>
		</div>

		<div id='footer'>
			<?php include 'footer.html'; ?>
		</div>

	</body>
</html>
