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
			<p>
				My background is as an international track and field athlete, with a wealth of experience over 100m, 200m and 400m. I competed for Great Britain and England on many occasions and
				incorporate the benefits of this rare insight into the world of elite sport with all my personal training. I want to share the knowledge I have gained, as all of this
				experience can be adapted and benefit PT sessions.
			</p></br>

			<p>
				Throughout my career I was hampered by injuries and illness, this taught me great resilience and how to adapt my training to keep progressing.
				It was a huge lesson in the right and wrong ways of exercising the body! I want to pass all of this experience on - so people can have a long and healthy
				relationship with exercise, doing types of exercise that are sustainable and become part of your lifestyle.
			</p></br>

			<p>
				I also trained as a dancer, staying with dance up to Elementary level in ballet, until my athletics career really took off and I had to specialise. *** mention multiple sources of experience, different approaches, not 'one-trick-pony' ***
			 </p></br>

			 <p>
				 As well as now being a PT, I am also a Mum to 2 lovely children (and a dog!), which gives me a great understanding of the time constraints and pressures of family life. My training is always
				 tailored to be sympathetic to the external stresses in life, whatever they may be.
			 </p>
		</div>

		<div id='social'>
			<?php include 'social.html'; ?>
		</div>

		<div id='footer'>
			<?php include 'footer.html'; ?>
		</div>

	</body>
</html>
