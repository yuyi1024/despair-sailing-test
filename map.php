<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>希望的航行者&絕望的渡輪</title>
		<?php
			include('link.php');
		?>
		<link href="css/map_f1.css" rel="stylesheet">
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
			<p style="position:fixed; right:0; top:75px; color:red;" class="notice1">請使用 Chrome 瀏覽器觀看。</p>
			<p style="position:fixed; right:0; top:75px; color:red;" class="notice2">預觀看詳細地圖請使用電腦瀏覽。</p>
				<div class="row">
					<div class="col-lg-12">
						<h2 class="title">地圖</h2>
						<img src="images/title.png" style="margin: -10px auto 50px; display:block;">
						
							<div class="instuction_title" style="margin-bottom:10px;">
								<img src="images/number1.png" style="width:100px; margin: 0 auto 0; display: block;">
								<div  class="title_back">
									<div class="title_front">
										<h3><b>1樓</b></h3>
									</div>
								</div>
							</div>

							<div class="f1">
								<img src="images/map/f1_keepout.png" style=" position:absolute;">

								<div class="a l">
									<div class="a_gray"><p>Lobby</p></div>
									<div class="a_black"><p><b>大廳</b></p></div>
								</div>

								<div class="b l">
									<div class="b_gray"><p>Corridor & Restroom I</p></div>
									<div class="b_black"><p><b>走廊 & 洗手間 I</b></p></div>
								</div>

								<div class="c l">
									<div class="c_gray"><p>Restaurant</p></div>
									<div class="c_black"><p><b>餐廳</b></p></div>
								</div>

								<div class="d l">
									<div class="d_gray"><p>Store</p></div>
									<div class="d_black"><p><b>商店</b></p></div>
								</div>

								<div class="e l">
									<div class="e_gray"><p>Kitchen</p></div>
									<div class="e_black"><p><b>廚房</b></p></div>
								</div>

								<div class="f l">
									<div class="f_gray"></div>
									<div class="f_black"><p><b>垃圾<br/>處理間</b></p></div>
								</div>

								<div class="g l">
									<div class="g_gray"><p>Fridges</p></div>
									<div class="g_black"><p><b>冷藏 & 冷凍</b></p></div>
								</div>

								<div class="h l"></div>
								<div class="i l"></div>
							</div>

						
					<?php
						include('plugins/lightGallery-master/demo/map_lightbox.php');
					?>

					</div>
				</div>		
			</div>
		
	</body>
</html>

<style type="text/css">
	.notice2{
		display: none;
		font-size: 26px;
	}

	@media only screen and (max-width: 1000px) {
	  .a,.b,.c,.d,.e,.f,.g,.h,.i{
	    display: none !important;
	  }
	  .notice1{
			display: none;
		}
		.notice2{
			display: block;
		}
	}


</style>