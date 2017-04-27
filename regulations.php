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
			.row{
				margin-bottom: 100px;
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
						

						
					
						<!--空格-->
						<div style="width:100%; height:500px;" class="long"></div>
						<style type="text/css">
							.long{
								display:none;
							}
							@media only screen and (max-width: 1000px) {
								.long{
									display:block;
								}
							}
						</style>



					</div>
				</div>		
			</div>
		
	</body>
</html>

