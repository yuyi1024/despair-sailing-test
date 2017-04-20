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
						<h2 class="title">素材下載</h2>
						<img src="images/title.png" style="margin: -10px auto 50px; display:block;">

						<div class="about_sec1">
							<h3><b>學生檔案</b></h3>
							<img src="images/title2.png" class="sub_title">
						</div>
						<img src="images/student_file1.png" class="student_file">
						<img src="images/student_file2.png" class="student_file">

						<div class="about_sec1">
							<p class="download" style="margin:-20px auto 0; display:table;">
								<a href="https://drive.google.com/drive/folders/0B_rxkh_r4DmceS12VjMwV1JuWlk?usp=sharing">.psd下載</a>
							</p>
						</div>

						<div class="about_sec1">
							<h3><b>範例</b></h3>
							<img src="images/title2.png" class="sub_title">
						</div>
						<img src="images/student_file1-example.png" class="example">
						<br/>
						<img src="images/student_file2-example.png" class="example">

						<div class="about_sec1">
							<h3><b>企劃表符</b></h3>
							<img src="images/title2.png" class="sub_title">
						</div>
						<img src="images/plurk_symbol.png" class="plurk_symbol">

							
					</div>
				</div>		
			</div>
		
	</body>
</html>

<style type="text/css">
	.student_file{
		width: 50%;
		margin: 15px auto;
		display: block; 
		opacity: 0.8;
	}
	.student_file:hover{
		opacity: 1;
		
	}
	.plurk_symbol{
		width: 4%;
		margin: 0 auto 100px;
		display: block; 
	}
	.about_sec1, .about_sec1:hover{
		background: rgba(0,0,0,0);
		margin-bottom: 0px;
	}
	.download{
		font-size: 25px;
		margin: -40px auto;
	}
	.example{
		width: 45%;
		margin: 5px auto;
		display: block; 
	}
</style>