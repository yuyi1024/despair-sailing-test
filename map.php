<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>希望的航行者&絕望的渡輪</title>
		<?php
			include('link.php');
		?>
		<link href="css/map_f1.css" rel="stylesheet">
		<link href="css/map_f2.css" rel="stylesheet">
		<link href="css/map_f3.css" rel="stylesheet">
		<link href="css/map_f4.css" rel="stylesheet">
		<link href="css/map_b1.css" rel="stylesheet">

		<link rel="stylesheet" href="css/snip_button.css">
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
						
							<div id="f1" class="instuction_title" style="margin-bottom:10px;">
								<img src="images/number/number1.png" style="width:100px; margin: 0 auto 0; display: block;">
								<div  class="title_back">
									<div class="title_front">
										<h3><b>1樓</b></h3>
									</div>
								</div>
							</div>

							<div class="f1">
								<img src="images/map/f1/f1_2.png" style=" position:absolute;">

								<div class="f1_a l" title="用力點我">
									<div class="f1_a_gray"><p>Lobby</p></div>
									<div class="f1_a_black"><p><b>大廳</b></p></div>
								</div>

								<div class="f1_b l" title="用力點我">
									<div class="f1_b_gray"><p>Corridor & Restroom I</p></div>
									<div class="f1_b_black"><p><b>走廊 & 洗手間 I</b></p></div>
								</div>

								<div class="f1_c l" title="用力點我">
									<div class="f1_c_gray"><p>Restaurant</p></div>
									<div class="f1_c_black"><p><b>餐廳</b></p></div>
								</div>

								<div class="f1_d l" title="用力點我">
									<div class="f1_d_gray"><p>Store</p></div>
									<div class="f1_d_black"><p><b>商店</b></p></div>
								</div>

								<div class="f1_e l" title="用力點我">
									<div class="f1_e_gray"><p>Kitchen</p></div>
									<div class="f1_e_black"><p><b>廚房</b></p></div>
								</div>

								<div class="f1_f l" title="用力點我">
									<div class="f1_f_gray"></div>
									<div class="f1_f_black"><p><b>垃圾<br/>處理間</b></p></div>
								</div>

								<div class="f1_g l" title="用力點我">
									<div class="f1_g_gray"><p>Fridges</p></div>
									<div class="f1_g_black"><p><b>冷藏 & 冷凍</b></p></div>
								</div>

								<div class="f1_h l" title="用力點我">
									<div class="f1_h_gray"><p>Restroom II</p></div>
									<div class="f1_h_black"><p><b>洗手間 II</b></p></div>
								</div>
								
								<div class="f1_i l" title="用力點我">
									<div class="f1_i_gray"><p>Utility Room</p></div>
									<div class="f1_i_black"><p><b>雜物間</b></p></div>
								</div>
							</div>


							<!--f2-->

							<div id="f2" class="instuction_title" style="margin-top:100px; margin-bottom:10px;">
								<img src="images/number/number2.png" style="width:100px; margin: 0 auto 0; display: block;">
								<div  class="title_back">
									<div class="title_front">
										<h3><b>2樓</b></h3>
									</div>
								</div>
							</div>

							<div class="f2">
								<img src="images/map/f2/f2_3.png" style=" position:absolute;">

								<div class="f2_a l" title="用力點我">
									<div class="f2_a_gray"><p>Utility Room</p></div>
									<div class="f2_a_black"><p><b>雜物間</b></p></div>
								</div>

								<div class="f2_b l" title="用力點我">
									<div class="f2_b_gray"></div>
									<div class="f2_b_black"><p><b>？？？</b></p></div>
								</div>

								<div class="f2_c l" title="用力點我">
									<div class="f2_c_gray"><p>Nursing</p></div>
									<div class="f2_c_black"><p><b>醫務室</b></p></div>
								</div>

								<div class="f2_d l" title="用力點我">
									<div class="f2_d_gray"><p>Laundry</p></div>
									<div class="f2_d_black"><p><b>洗衣間</b></p></div>
								</div>

								<div class="f2_e l" title="用力點我">
									<div class="f2_e_gray"></div>
									<div class="f2_e_black"><p><b>垃圾<br/>處理間</b></p></div>
								</div>

								<div class="f2_f l" title="用力點我">
									<div class="f2_f_gray"><p>Public Space</p></div>
									<div class="f2_f_black"><p><b>公共區</b></p></div>
								</div>

								<div class="f2_g l" title="用力點我">
									<div class="f2_g_gray"><p>Private Room</p></div>
									<div class="f2_g_black"><p><b>個人房間</b></p></div>
								</div>

								<div class="f2_h l" title="用力點我">
									<div class="f2_h_gray"><p>Private Room</p></div>
									<div class="f2_h_black"><p><b>個人房間</b></p></div>
								</div>

								<div class="f2_i l" title="用力點我">
									<div class="f2_i_gray"><p>Corridor</p></div>
									<div class="f2_i_black"><p><b>走廊</b></p></div>
								</div>
							</div>


							<!--f3-->

							<div id="f3" class="instuction_title" style="margin-top:100px; margin-bottom:10px;">
								<img src="images/number/number3.png" style="width:100px; margin: 0 auto 0; display: block;">
								<div  class="title_back">
									<div class="title_front">
										<h3><b>3樓</b></h3>
									</div>
								</div>
							</div>

							<div class="f3">
								<img src="images/map/f3/f3_3.png" style=" position:absolute;">
		
								<div class="f3_a l">
									<div class="f3_a_gray"><p>Performance Hall</p></div>
									<div class="f3_a_black"><p><b>表演廳</b></p></div>
								</div>

								<div class="f3_b l">
									<div class="f3_b_gray"><p>Preparation Room</p></div>
									<div class="f3_b_black"><p><b>準備室</b></p></div>
								</div>

								<div class="f3_c l">
									<div class="f3_c_gray"><p>Gaming Room</p></div>
									<div class="f3_c_black"><p><b>工藝室</b></p></div>
								</div>

								<div class="f3_d l">
									<div class="f3_d_gray"><p>Gaming Room</p></div>
									<div class="f3_d_black"><p><b>遊戲廳</b></p></div>
								</div>

								<div class="f3_e l">
									<div class="f3_e_gray"><p>Corridor</p></div>
									<div class="f3_e_black"><p><b>走廊</b></p></div>
								</div>

								<div class="f3_f l">
									<div class="f3_f_gray"><p>Restroom</p></div>
									<div class="f3_f_black"><p><b>洗手間</b></p></div>
								</div>

								<div class="f3_g l">
									<div class="f3_g_gray"><p></p></div>
									<div class="f3_g_black"><p><b>垃圾<br/>處理間</b></p></div>
								</div>

								<div class="f3_h l">
									<div class="f3_h_gray"><p>Counseling Room</p></div>
									<div class="f3_h_black"><p><b>諮商輔導室</b></p></div>
								</div>

								<div class="f3_i l">
									<div class="f3_i_gray"><p>Information Room</p></div>
									<div class="f3_i_black"><p><b>資訊室</b></p></div>
								</div>

								<div class="f3_j l">
									<div class="f3_j_gray"><p>Church</p></div>
									<div class="f3_j_black"><p><b>教堂</b></p></div>
								</div>

								<div class="f3_k l">
									<div class="f3_k_gray"><p>Sewing Room</p></div>
									<div class="f3_k_black"><p><b>裁縫工作室</b></p></div>
								</div>

							</div>


							<!--f4-->

							<div id="f4" class="instuction_title" style="margin-top:100px; margin-bottom:10px;">
								<img src="images/number/number4.png" style="width:100px; margin: 0 auto 0; display: block;">
								<div  class="title_back">
									<div class="title_front">
										<h3><b>4樓</b></h3>
									</div>
								</div>
							</div>

							<div class="f4">
								<img src="images/map/f4/f4_3.png" style=" position:absolute;">

								<div class="f4_a l l_2">
									<div class="f4_a_gray"><p>Shooting Range</p></div>
									<div class="f4_a_black"><p><b>狙擊場</b></p></div>
								</div>

								<div class="f4_b l">
									<div class="f4_b_gray"><p>Cabin</p></div>
									<div class="f4_b_black"><p><b>小木屋</b></p></div>
								</div>

								<div class="f4_c l">
									<div class="f4_c_gray"><p>Garage</p></div>
									<div class="f4_c_black"><p><b>車庫</b></p></div>
								</div>

								<!--
								
								-->

								<div class="f4_e l">
									<div class="f4_e_gray"><p>Restroom</p></div>
									<div class="f4_e_black"><p><b>洗手間</b></p></div>
								</div>

								<div class="f4_f l">
									<div class="f4_f_gray"><p></p></div>
									<div class="f4_f_black"><p><b>垃圾<br/>處理間</b></p></div>
								</div>

								<div class="f4_g l">
									<div class="f4_g_gray"><p>Reading Room</p></div>
									<div class="f4_g_black"><p><b>公共閱覽區</b></p></div>
								</div>

								<div class="f4_h l l_2">
									<div class="f4_h_gray"><p>Corridor</p></div>
									<div class="f4_h_black"><p><b>走廊</b></p></div>
								</div>

							</div>


							<!--b1-->

							<div id="b1" class="instuction_title" style="margin-top:100px; margin-bottom:10px;">
								<img src="images/number/b1.png" style="width:100px; margin: 0 auto 0; display: block;">
								<div  class="title_back">
									<div class="title_front">
										<h3><b>地下室</b></h3>
									</div>
								</div>
							</div>

							<div class="b1">
								<img src="images/map/b1/b1_3.png" style=" position:absolute;">
								<!--<img src="images/map/b1/b1_3_trail.png" style=" position:absolute;">-->
								
								<!--
								<div class="b1_a l" title="用力點我">
									<div class="b1_a_gray"><p>Class Trial</p></div>
									<div class="b1_a_black"><p><b>學級裁判場</b></p></div>
								</div>
								-->

								<div class="b1_b l" title="用力點我">
									<div class="b1_b_gray"><p>Garbage Collection</p></div>
									<div class="b1_b_black"><p><b>垃圾集中處</b></p></div>
								</div>

								<!--

								-->

								<div class="b1_d l">
									<div class="b1_d_gray"><p>Power Control Room</p></div>
									<div class="b1_d_black"><p><b>控電室</b></p></div>
								</div>

								<!--

								-->

								<div class="b1_g l" title="用力點我">
									<div class="b1_g_gray"><p>Corridor</p></div>
									<div class="b1_g_black"><p><b>走廊</b></p></div>
								</div>

							</div>

						
					<?php
						include('plugins/lightGallery-master/demo/map_lightbox.php');
					?>

					</div>
				</div>		
			</div>

			<div class="snip" style="right:20px;">
			  <figure class="snip1566 floor">
			    <img src="images/number/number1.png" alt="sq-sample14" />
			    <figcaption><img src="images/number/number1_h.png"></figcaption>
			    <a href="map.php#f1"></a>
			  </figure>

			  <figure class="snip1566 floor">
			    <img src="images/number/number2.png" />
			    <figcaption><img src="images/number/number2_h.png"></figcaption>
			    <a href="map.php#f2"></a>
			  </figure>

			  <figure class="snip1566 floor">
			    <img src="images/number/number3.png" />
			    <figcaption><img src="images/number/number3_h.png"></figcaption>
			    <a href="map.php#f3"></a>
			  </figure>

			  <figure class="snip1566 floor">
			    <img src="images/number/number4.png" />
			    <figcaption><img src="images/number/number4_h.png"></figcaption>
			    <a href="map.php#f4"></a>
			  </figure>
				
				<!--
			  
			  -->

			  <figure class="snip1566 floor">
			    <img src="images/number/b1.png" />
			    <figcaption><img src="images/number/b1_h.png"></figcaption>
			    <a href="map.php#b1"></a>
			  </figure>
			</div>
	</body>
</html>

<style type="text/css">
	.notice2{
		display: none;
		font-size: 26px;
	}
	.snip .floor{
		max-width: 90px;
		margin: 8px;
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