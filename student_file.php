<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>希望的航行者&絕望的渡輪</title>
		<?php
			include('link.php');
		?>
		<link rel="stylesheet" type="text/css" href="plugins/DirectionAwareHoverEffect/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="plugins/DirectionAwareHoverEffect/css/style.css" />
		<script src="plugins/DirectionAwareHoverEffect/js/modernizr.custom.97074.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="plugins/DirectionAwareHoverEffect/css/noJS.css"/></noscript>
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

			.file_name{
				font-size: 24px;
				margin: 40px 20px 0px 20px !important;
			}
			.file_talent{
				border-top: 0px;
		    box-shadow: 0 0px 0 rgba(0,0,0,0), 0 -0 0 rgba(255,255,255,0) !important;
				margin: 10px 20px 0px 20px !important;
				text-align: right;
				font-size: 18px;
				border-bottom: 0 !important;
			}
			.about_sec1, .about_sec1:hover{
			  background-color: rgba(0,0,0,0);
			  margin: -10px auto -10px;
			}
			#da-thumbs a:hover{
				cursor: pointer;
			}
			
		</style>


		<div id="container" class="container">
			<div class="row" style="margin-bottom:50px;">
				<div class="col-lg-12">
					<h2 class="title">學生資料</h2>
					<img src="images/title.png" style="margin: -10px auto 30px; display:block;">       
					
					<div class="about_sec1">
						<h3><b>報名學生</b></h3>
						<img src="images/title2.png" class="sub_title">
					</div>
					<p style="color:red; font-size:24px; margin:50px auto; display:table;"><b>--尚未開放報名--</b></p>

					<section>
						<ul id="da-thumbs" class="da-thumbs animate-left">
							<!--
							<li>
								<a id="student1">
									<img src="plugins/DirectionAwareHoverEffect/images/s1.png" />
									<div>
										<span class="file_name">狛枝凪斗</span>
										<span class="file_talent">超高校級的死神</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student2">
									<img src="plugins/DirectionAwareHoverEffect/images/s2.png" />
									<div>
										<span class="file_name">田中鋼彈</span>
										<span class="file_talent">超高校級的中二</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student3">
									<img src="plugins/DirectionAwareHoverEffect/images/s3.png" />
									<div>
										<span class="file_name">花村輝輝</span>
										<span class="file_talent">超高校級的性學大師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student4">
									<img src="plugins/DirectionAwareHoverEffect/images/s4.png" />
									<div>
										<span class="file_name">九頭龍冬彥</span>
										<span class="file_talent">超高校級的矮子</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student5">
									<img src="plugins/DirectionAwareHoverEffect/images/s5.png" />
									<div>
										<span class="file_name">七海千秋</span>
										<span class="file_talent">超高校級的...zzz</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student6">
									<img src="plugins/DirectionAwareHoverEffect/images/s6.png" />
									<div>
										<span class="file_name">罪木蜜柑</span>
										<span class="file_talent">超高校級的福利擔當</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student7">
									<img src="plugins/DirectionAwareHoverEffect/images/s7.png" />
									<div>
										<span class="file_name">索妮雅‧窟盧塔</span>
										<span class="file_talent">超高校級的皇女</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student8">
									<img src="plugins/DirectionAwareHoverEffect/images/s8.png" />
									<div>
										<span class="file_name">西園寺日寄子</span>
										<span class="file_talent">超高校級的蘿莉</span>
									</div>
								</a>
							</li>
							<li>	
								<a id="student9">
									<img src="plugins/DirectionAwareHoverEffect/images/s9.png" />
									<div>
										<span class="file_name">小泉真晝</span>
										<span class="file_talent">超高校級的攝影師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student10">
									<img src="plugins/DirectionAwareHoverEffect/images/s10.png" />
									<div>
										<span class="file_name">邊谷山配子</span>
										<span class="file_talent">超高校級的眼鏡</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student11">
									<img src="plugins/DirectionAwareHoverEffect/images/s1.png" />
									<div>
										<span class="file_name">狛枝凪斗</span>
										<span class="file_talent">超高校級的混蛋</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student12">
									<img src="plugins/DirectionAwareHoverEffect/images/s1.png" />
									<div>
										<span class="file_name">狛枝凪斗</span>
										<span class="file_talent">超高校級的混蛋</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student13">
									<img src="plugins/DirectionAwareHoverEffect/images/s1.png" />
									<div>
										<span class="file_name">狛枝凪斗</span>
										<span class="file_talent">超高校級的混蛋</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student14">
									<img src="plugins/DirectionAwareHoverEffect/images/s1.png" />
									<div>
										<span class="file_name">狛枝凪斗</span>
										<span class="file_talent">超高校級的混蛋</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student15">
									<img src="plugins/DirectionAwareHoverEffect/images/s1.png" />
									<div>
										<span class="file_name">狛枝凪斗</span>
										<span class="file_talent">超高校級的狛枝</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student16">
									<img src="plugins/DirectionAwareHoverEffect/images/s1.png" />
									<div>
										<span class="file_name">狛枝凪斗</span>
										<span class="file_talent">狛枝狛枝狛枝狛枝狛枝狛枝狛枝狛枝狛枝狛枝狛枝狛枝狛枝狛枝狛枝</span>
									</div>
								</a>
							</li>
							-->

						</ul>
					</section>
      
				</div>
			</div>		
		</div>
		



		<?php
						include('plugins/lightGallery-master/demo/student_lightbox.php');
					?>
	</body>
</html>






<script type="text/javascript" src="plugins/DirectionAwareHoverEffect/js/jquery.hoverdir.js"></script>	
<script type="text/javascript">
	$(function() {

		$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
			hoverDelay : 75
		}); } );

	});
</script>
   