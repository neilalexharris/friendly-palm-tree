<?php
	$colClass = "greentext";
	$logoPath = "Images/Pngs/main_green.png";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		
		<?php include "header.html"; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.innerfade.js"></script>

		<script type="text/javascript">
		$(document).ready(
				function(){
		
					$('#banner').innerfade({
						speed: 2000,
						timeout: 7000,
						type: 'sequence',
						containerheight: '320px'
					});
			
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
		
		<?php include 'menu.php'; ?>

		<table class="main" cellpadding="0", cellspacing="10">
			<tr>
				<td class ="greyborder">
					<p class="<?php echo $colClass; ?>"><b>Info coming soon!</b></p>
					</br>
			
					<?php include 'social.html'; ?>
					
				</td>
			</td>
		</table>

		<?php include 'footer.php'; ?>

	</body>
</html>