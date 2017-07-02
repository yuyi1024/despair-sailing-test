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
								<img src="images/number/number1.png" style="width:100px; margin: 0 auto 0; display: block;">
								<div  class="title_back">
									<div class="title_front">
										<h3><b>1樓</b></h3>
									</div>
								</div>
							</div>

							<div class="f1">
								<img src="images/map/f1_keepout.png" style=" position:absolute;">

								<div class="f1_a l">
									<div class="f1_a_gray"><p>Lobby</p></div>
									<div class="f1_a_black"><p><b>大廳</b></p></div>
								</div>

								<div class="f1_b l">
									<div class="f1_b_gray"><p>Corridor & Restroom I</p></div>
									<div class="f1_b_black"><p><b>走廊 & 洗手間 I</b></p></div>
								</div>

								<div class="f1_c l">
									<div class="f1_c_gray"><p>Restaurant</p></div>
									<div class="f1_c_black"><p><b>餐廳</b></p></div>
								</div>

								<div class="f1_d l">
									<div class="f1_d_gray"><p>Store</p></div>
									<div class="f1_d_black"><p><b>商店</b></p></div>
								</div>

								<div class="f1_e l">
									<div class="f1_e_gray"><p>Kitchen</p></div>
									<div class="f1_e_black"><p><b>廚房</b></p></div>
								</div>

								<div class="f1_f l">
									<div class="f1_f_gray"></div>
									<div class="f1_f_black"><p><b>垃圾<br/>處理間</b></p></div>
								</div>

								<div class="f1_g l">
									<div class="f1_g_gray"><p>Fridges</p></div>
									<div class="f1_g_black"><p><b>冷藏 & 冷凍</b></p></div>
								</div>

								<!--<div class="f1_h l">
									<div class="f1_h_gray"><p>？？？</p></div>
									<div class="f1_h_black"><p><b>？？？</b></p></div>
								</div>
								
								<div class="f1_i l">
									<div class="f1_i_gray"><p>？？？</p></div>
									<div class="f1_i_black"><p><b>？？？</b></p></div>
								</div>-->
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
	  .f1_a,.f1_b,.f1_c,.f1_d,.f1_e,.f1_f,.f1_g,.f1_h,.f1_i{
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