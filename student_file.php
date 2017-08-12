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
			}
			#da-thumbs a:hover{
				cursor: pointer;
			}
		</style>

<!--tab-->
		<style>
			div.tab {
				width: 65%;
	    	margin: 0 auto;
		    overflow: hidden;
			}
			div.tab div {
		    cursor: pointer;
		    transition: 0.3s;
			}

			div.tab div{
				opacity: 0.3;
			}
			div.tab div:hover {
		    opacity: 0.8;
			}
			div.tab div.active {
		    opacity: 1;
			}
			.tabcontent {
		    display: none;
			}
			.about_sec11{
				width: 250px;
		    padding: 30px 20px 10px;
			}
			.about_sec11 h3{
				display: block;
	    	text-align: center;
	    	top: 70px;
	    	position: relative;
			}
		</style>
<!--tab-->

		<div id="container" class="container">
			<div class="row" style="margin-bottom:50px;">
				<div class="col-lg-12">
					<h2 class="title">學生檔案</h2>
					<img src="images/title.png" style="margin: -10px auto 30px; display:block;">       
					
					
					<div class="tab">
						<div style="float:left;" class="about_sec11 tablinks" onclick="openStudent(event, 'Student')" id="defaultOpen">
								<h3><b>場內學生</b></h3>
								<img src="images/title2.png" class="sub_title">
						</div>

						<div style="float:right;" class="about_sec11 tablinks" onclick="openStudent(event, 'Student_out')">
								<h3><b>場外學生</b></h3>
								<img src="images/title2.png" class="sub_title">
						</div>
					</div>


			
					<section id="Student" class="tabcontent">
						<ul id="da-thumbs" class="da-thumbs animate-left">
							<li>
								<a id="student25">
									<img src="plugins/lightGallery-master/demo/img/student_file/天之川 時央/天之川 時央.png" />
									<div>
										<span class="file_name">天之川 時央</span>
										<span class="file_talent">超高校級的天文學家</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student12">
									<img src="plugins/lightGallery-master/demo/img/student_file/七五三木 桃/七五三木 桃-dead.png" />
									<div>
										<span class="file_name">七五三木 桃</span>
										<span class="file_talent">超高校級的遺體化妝師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student7">
									<img src="plugins/lightGallery-master/demo/img/student_file/室伏 左十留/室伏 左十留.png" />
									<div>
										<span class="file_name">室伏 左十留</span>
										<span class="file_talent">超高校級的滑雪選手</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student31">
									<img src="plugins/lightGallery-master/demo/img/student_file/金澤 琉璃子/金澤 琉璃子.png" />
									<div>
										<span class="file_name">金澤 琉璃子</span>
										<span class="file_talent">超高校級的工藝師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student28">
									<img src="plugins/lightGallery-master/demo/img/student_file/安間 昼/安間 昼.png" />
									<div>
										<span class="file_name">安間 昼</span>
										<span class="file_talent">超高校級的狙擊手</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student20">
									<img src="plugins/lightGallery-master/demo/img/student_file/熊吉 庫瑪/熊吉 庫瑪.png" />
									<div>
										<span class="file_name">熊吉 庫瑪</span>
										<span class="file_talent">超高校級的大胃王</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student11">
									<img src="plugins/lightGallery-master/demo/img/student_file/系屋 拓麻/系屋 拓麻-改.png" />
									<div>
										<span class="file_name">系屋 拓麻</span>
										<span class="file_talent">超高校級的裁縫師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student3">
									<img src="plugins/lightGallery-master/demo/img/student_file/若月 暁音/若月 暁音.png" />
									<div>
										<span class="file_name">若月 暁音</span>
										<span class="file_talent">超高校級的指揮家</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student23">
									<img src="plugins/lightGallery-master/demo/img/student_file/宇佐見 颯太/宇佐見 颯太.png" />
									<div>
										<span class="file_name">宇佐見 颯太</span>
										<span class="file_talent">超高校級的駭客</span>
									</div>
								</a>
							</li>
							<li>	
								<a id="student9">
									<img src="plugins/lightGallery-master/demo/img/student_file/緒坂 凜/緒坂 凜.png" />
									<div>
										<span class="file_name">緒坂 凜</span>
										<span class="file_talent">超高校級的護理師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student30">
									<img src="plugins/lightGallery-master/demo/img/student_file/月見 鬼灯/月見 鬼灯-dead.png" />
									<div>
										<span class="file_name">月見 鬼灯</span>
										<span class="file_talent">超高校級的藥劑師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student5">
									<img src="plugins/lightGallery-master/demo/img/student_file/速水 星蓮/速水 星蓮.png" />
									<div>
										<span class="file_name">速水 星蓮</span>
										<span class="file_talent">超高校級的騎士</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student14">
									<img src="plugins/lightGallery-master/demo/img/student_file/五月七日 悠咲/五月七日 悠咲.png" />
									<div>
										<span class="file_name">五月七日 悠咲</span>
										<span class="file_talent">超高校級的修女</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student16">
									<img src="plugins/lightGallery-master/demo/img/student_file/大久保 小夜子/大久保 小夜子.png" />
									<div>
										<span class="file_name">大久保 小夜子</span>
										<span class="file_talent">超高校級的太妹</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student10">
									<img src="plugins/lightGallery-master/demo/img/student_file/眠目 影心/眠目 影心.png" />
									<div>
										<span class="file_name">眠目 影心</span>
										<span class="file_talent">超高校級的心理輔導員</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student4">
									<img src="plugins/lightGallery-master/demo/img/student_file/花島 紗里/花島 紗里.png" />
									<div>
										<span class="file_name">花島 紗里</span>
										<span class="file_talent">超高校級的腳本家</span>
									</div>
								</a>
							</li>
							<!--
							<li>
								<a id="student27">
									<img src="plugins/lightGallery-master/demo/img/student_file/藤田 芽天緒/藤田 芽天緒.png" />
									<div>
										<span class="file_name">藤田 芽天緒</span>
										<span class="file_talent">超高校級的植物學家</span>
									</div>
								</a>
							</li>
							-->
						</ul>
					</section>

					<!--場外-->
					<section id="Student_out" class="tabcontent">
						<ul id="da-thumbs" class="da-thumbs animate-left">
							
							<li>
								<a id="student_out_2">
									<img src="plugins/lightGallery-master/demo/img/student_file/古座 水季/古座 水季.png" />
									<div>
										<span class="file_name">古座 水季</span>
										<span class="file_talent">超高校級的化妝師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student35">
									<img src="plugins/lightGallery-master/demo/img/student_file/神田 葵/神田 葵.png" />
									<div>
										<span class="file_name">神田 葵</span>
										<span class="file_talent">超高校級的推理作家</span>
									</div>
								</a>
							</li>
							
							
							<li>
								<a id="student34">
									<img src="plugins/lightGallery-master/demo/img/student_file/座津 世世/座津 世世.png" />
									<div>
										<span class="file_name">座津 世世</span>
										<span class="file_talent">超高校級的幸運</span>
									</div>
								</a>
							</li>
			
							<li>
								<a id="student1">
									<img src="plugins/lightGallery-master/demo/img/student_file/立花 綾/立花 綾.png" />
									<div>
										<span class="file_name">立花 綾</span>
										<span class="file_talent">超高校級的腹話術師</span>
									</div>
								</a>
							</li>

							<li>
								<a id="student17">
									<img src="plugins/lightGallery-master/demo/img/student_file/佐久間 誠/佐久間 誠.png" />
									<div>
										<span class="file_name">佐久間 誠</span>
										<span class="file_talent">超高校級的甜點師</span>
									</div>
								</a>
							</li>
							
							
							<li>
								<a id="student_out_4">
									<img src="plugins/lightGallery-master/demo/img/student_file/佐藤 陽介/佐藤 陽介.png" />
									<div>
										<span class="file_name">佐藤 陽介</span>
										<span class="file_talent">超高校級的棒球選手</span>
									</div>
								</a>
							</li>
							
							<li>
								<a id="student8">
									<img src="plugins/lightGallery-master/demo/img/student_file/橘屋 冬狐/橘屋 冬狐.png" />
									<div>
										<span class="file_name">橘屋 冬狐</span>
										<span class="file_talent">超高校級的程序設計家</span>
									</div>
								</a>
							</li>
							
							<li>
								<a id="student13">
									<img src="plugins/lightGallery-master/demo/img/student_file/伊地知 覚/伊地知 覚.png" />
									<div>
										<span class="file_name">伊地知 覚</span>
										<span class="file_talent">超高校級的超心理學家</span>
									</div>
								</a>
							</li>
							
							<li>
								<a id="student15">
									<img src="plugins/lightGallery-master/demo/img/student_file/勘解由小路 露央紗/勘解由小路 露央紗.png" />
									<div>
										<span class="file_name" style="font-size: 20px;">勘解由小路 露央紗</span>
										<span class="file_talent">超高校級的操偶師</span>
									</div>
								</a>
							</li>
							
							<li>
								<a id="student26">
									<img src="plugins/lightGallery-master/demo/img/student_file/魚住 桃果/魚住 桃果.png" />
									<div>
										<span class="file_name">魚住 桃果</span>
										<span class="file_talent">超高校級的游泳選手</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student18">
									<img src="plugins/lightGallery-master/demo/img/student_file/平丸 早由美/平丸 早由美.png" />
									<div>
										<span class="file_name">平丸 早由美</span>
										<span class="file_talent">超高校級的彩妝師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student6">
									<img src="plugins/lightGallery-master/demo/img/student_file/俞墨辰/俞墨辰.png" />
									<div>
										<span class="file_name">俞墨辰</span>
										<span class="file_talent">超高校級的狙擊手</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student22">
									<img src="plugins/lightGallery-master/demo/img/student_file/高田 夏野/高田 夏野.png" />
									<div>
										<span class="file_name">高田 夏野</span>
										<span class="file_talent">超高校級的貿易商</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student_out_1">
									<img src="plugins/lightGallery-master/demo/img/student_file/八森 數馬/八森 數馬.png" />
									<div>
										<span class="file_name">八森 數馬</span>
										<span class="file_talent">超高校級的腹語師</span>
									</div>
								</a>
							</li>

							<li>
								<a id="student_out_5">
									<img src="plugins/lightGallery-master/demo/img/student_file/佐倉 和里/佐倉 和里.png" />
									<div>
										<span class="file_name">佐倉 和里</span>
										<span class="file_talent">超高校級的西點師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student19">
									<img src="plugins/lightGallery-master/demo/img/student_file/九十九 累/九十九 累.png" />
									<div>
										<span class="file_name">九十九 累</span>
										<span class="file_talent">超高校級的標本師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student33">
									<img src="plugins/lightGallery-master/demo/img/student_file/穂戸田 清衣/穂戸田 清衣.png" />
									<div>
										<span class="file_name">穂戸田 清衣</span>
										<span class="file_talent">超高校級的服裝設計師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student21">
									<img src="plugins/lightGallery-master/demo/img/student_file/泉 綾/泉 綾.png" />
									<div>
										<span class="file_name">泉 綾</span>
										<span class="file_talent">超高校級的魔術師</span>
									</div>
								</a>
							</li>
							
							<li>
								<a id="student24">
									<img src="plugins/lightGallery-master/demo/img/student_file/七海 秋/七海 秋.png" />
									<div>
										<span class="file_name">七海 秋</span>
										<span class="file_talent">超高校級的軍醫</span>
									</div>
								</a>
							</li>
							
							<li>
								<a id="student29">
									<img src="plugins/lightGallery-master/demo/img/student_file/月見 葵/月見 葵.png" />
									<div>
										<span class="file_name">月見 葵</span>
										<span class="file_talent">超高校級的料理人</span>
									</div>
								</a>
							</li>
							
							<li>
								<a id="student38">
									<img src="plugins/lightGallery-master/demo/img/student_file/零次 修一/零次 修一.png" />
									<div>
										<span class="file_name">零次 修一</span>
										<span class="file_talent">超高校級的情報屋</span>
									</div>
								</a>
							</li>

							
							<li>
								<a id="student2">
									<img src="plugins/lightGallery-master/demo/img/student_file/相宮 春久/相宮 春久.png" />
									<div>
										<span class="file_name">相宮 春久</span>
										<span class="file_talent">超高校級的人偶師</span>
									</div>
								</a>
							</li>
							<li>
								<a id="student_out_3">
									<img src="plugins/lightGallery-master/demo/img/student_file/月澄 末/月澄 末.png" />
									<div>
										<span class="file_name">月澄 末</span>
										<span class="file_talent">超高校級的魔術師</span>
									</div>
								</a>
							</li>


							
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
   








<!--tab-->
<script>
function openStudent(evt, studentName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(studentName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!--tab-->