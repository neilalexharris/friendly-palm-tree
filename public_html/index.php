<!DOCTYPE html>
<html>
	<head>

		<?php include 'head.html'; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

		<script>
			$(document).ready(
				function (){
				$('.highlight').addClass("orange");
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

		<div id='main'>
			<div class='row'>
				<div class='col-8'>
					<p>
						I started my career in London, having trained under the guidance of Matt Roberts in Chelsea. I quickly developed an effective approach that led to results.
						My clients learned to train effectively, improving both their fitness and emotional wellbeing, feeling uplifted after sessions.
					</p></br>

					<p>
						I train a number of high profile clients, these have included individual members of the girl band The Saturdays and Colin Jackson.
						But I also work with a lot of people locally from older ladies wanting to regain their confidence to incorporate exercise into their lives to someone who wants to train quietly, building belief.
					</p></br>

					<p>
						When I train my clients it is important that I get a result that benefits both the body and the mind. Under my guidance I will help you to train intuitively so you will leave a session feeling
						energised, uplifted and inspired to keep exercising, making it part of your life. (??rather than feeling drained and not wanting to come back, as is seen all to often these days with PT!
					</p></br>

					<p>
						There is also information overload when it comes to health and fitness.It is confusing!! And can be rather off putting.
						I want to help you to cut through all of the fads and get on with effective training, that is designed just for you.
						I will help you with exercise and nutrition and guide you to a happy healthier lifestyle.
					</p>
				</div>
				<div class='col-4'>
					<div class='back-image'>
						<img style='opacity:0.2' src='images/Photos/tate_run.jpg' alt='Tatum Running'>
						<h1 style='font-size:40px; color:#666' class='text-overlay highlight'>"Text to go over photo"</h1>
					</div>
				</div>
			</div>
		</div>

		<div id='social'>
			<?php include 'social.html'; ?>
		</div>

		<div id='footer'>
			<?php include 'footer.html'; ?>
		</div>

	</body>

</html>
