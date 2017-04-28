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
			.row{
				margin-bottom: 100px;
			}
		</style>


			<div id="container" class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="title">連結</h2>
						<img src="images/title.png" style="margin: -10px auto 50px; display:block;">

						<div class="about_sec1 animate-left">
							<h3><b>聯絡</b></h3>
							<img src="images/title2.png" class="sub_title">
							<div class="text">
								<p>黑白狐噗浪： <a href="https://www.plurk.com/monokitsune2017">https://www.plurk.com/monokitsune2017</a></p>
								
								<p>官方信箱： <a href="monokitsune2017@gmail.com">monokitsune2017@gmail.com</a></p>
								
							</div>
						</div>

						<div class="about_sec1 animate-left">
							<h3><b>表單連結</b></h3>
							<img src="images/title2.png" class="sub_title">
							<div class="text">
								<p>意願調查表單： <a href="https://docs.google.com/forms/d/e/1FAIpQLSdYQ-rycyOKZ53mB5UBiHYHysAyfT2b9tqoJlTWIbbF746AMw/viewform">google form</a></p>	
								<p>報名表單： 尚未開放</p>		
								<p>主線案件報名表單： 尚未開放</p>	
							</div>
						</div>

						<div class="about_sec1 animate-left">
							<h3><b>Staff</b></h3>
							<img src="images/title2.png" class="sub_title">
							<div class="text">
								<p>主催：黑白狐的<b>肚臍</b></p>
								<p>文案編輯：黑白狐的<b>填充棉</b></p>
								<p>顧問：黑白狐的<b>尾巴</b></p>
								<p>美術：黑白狐的<b>肉球</b></p>
								<p>網站設計&架設：黑白狐的<b>肚臍</b></p>
								<p>？？？：黑白狐的<b>腦垂腺</b></p>
							</div>
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