<!DOCTYPE html>
<html>
	<head>

		<?php include 'head.html'; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

		<script>
			$(document).ready(
				function (){
				$('.highlight').addClass("pink");
				$('#found_header').click(
					function(){
						$('#found_text').slideToggle(1000)
						});
				$('#work_header').click(
					function(){
						$('#work_text').slideToggle(1000)
						});
				$(".dynamic").hide();
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

		<div id="main">
			<h1 class='highlight'>Pilates & Me</h1></br>

			<p>
				I trained to be a Mat Pilates teacher 8 years ago after the birth of my first child. I was seeking an exercise routine that was restorative,
				gentle and nurturing yet made me feel stronger and cleared my mind. Pilates ticked all of the boxes.
			</p></br>

			<p>
				Pilates will enhance posture, flexiblity, balance, muscle and core strength. (working from the cente powerhouse). Focus is made on the breathing,
				helping to calm and promote the mind - body connection. It is excellent for stabilizing and elongating muscles and can complement your current routine
				or help make any areas of weakness within the body stronger.
			</p></br>

			<p>
				I offer, 1:1, 2:1 sessions and small groups. I do not teach any classes of more than 8 as eye to detail is crucial for pilates, the execution is paramount
				to feeling the amazing benefits. I don’t want to over subscribe a class to the detriment of my clients.
			</p></br>

			<p>
				I combine Pilates into all of my personal training sessions. This way the amazing benefits of it can be felt. Amongst all of the above benefits,
				it successfully highlights any imbalances in the body and then I can address and strengthen these through a combination of pilates and personal training.
			</p></br>

		</div>

		<div id='social'>
			<?php include 'social.html'; ?>
		</div>

		<div id='footer'>
			<?php include 'footer.html'; ?>
		</div>

	</body>
</html>
