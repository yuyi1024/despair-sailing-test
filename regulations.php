<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>希望的航行者&絕望的渡輪</title>
		<?php
			include('link.php');
		?>
	</head>
	<body>

		<?php
			include('navbar.php');
		?>
		<style type="text/css">
			.navigation-top{
				top: -54px;
		    bottom: auto;
		    position: fixed;
			}
			@media screen and ( max-width: 782px ) {
				.navigation-top{
		    	position: relative;
				}
			} 
			@media only screen and (max-width: 1000px) {
   			#container{
				  height: 100vh;
				}
			}
		

		</style>


			<div id="container" class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="title">校規</h2>
						<img src="images/title.png" style="margin: -10px auto 50px; display:block;">

						<div style="margin:0 auto 70px;">
						<?php include('standard.php'); ?>
						</div>
						

					</div>
				</div>		
			</div>
		
	</body>
</html>

<script type="text/javascript">
	if ($('#container').height() < $(window).height()) {
    document.getElementById('container').style.height = "100vh";
	}
</script>
