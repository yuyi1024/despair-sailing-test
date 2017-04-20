
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
		</style>

		<div id="container" class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="title">行事曆</h2>
					<img src="images/title.png" style="margin: -10px auto 50px; display:block;">
					
					<iframe src="https://teamup.com/kszb3sb1sth3mn4rfh" frameborder="0" width="80%" height="700"></iframe>

				</div>
			</div>
		</div>
	</body>
</html>

<style type="text/css">
	iframe{
		border: 0;
		margin: -20px auto 30px;
    display: block;
	}
</style>