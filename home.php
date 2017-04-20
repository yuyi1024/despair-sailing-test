<!DOCTYPE html>
<html lang="zh-TW" class="no-js no-svg">
	<head>
		<meta charset="UTF-8">

		<title>希望的航行者&絕望的渡輪</title>

		<?php
			include('link.php');
		?>
		        	
		<style type="text/css" media="screen">
			html { margin-top: 32px !important; }
			* html body { margin-top: 32px !important; }
			@media screen and ( max-width: 782px ) {
				html { margin-top: 46px !important; }
				* html body { margin-top: 46px !important; }
			}
		</style>

	</head>

	<body class="home blog logged-in admin-bar no-customize-support hfeed has-header-image has-sidebar title-tagline-hidden colors-light">
		<div id="page" class="site">
			<header id="masthead" class="site-header" role="banner">
				<div class="custom-header">
					<div class="custom-header-media">
						<div id="wp-custom-header" class="wp-custom-header"><img src="images/home--1.png" width="1020" height="598" alt="希望的航行者 &amp; 絕望的渡輪" srcset="images/home--1.png 1020w" sizes="100vw" /></div>	
					</div>
				</div>
				<?php
					include('navbar.php');
				?>
				<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>" target="_blank" class="return">
					<img src="images/return_pic.png" class="return_index">
					<img src="images/return_say.png" class="return_say">
				</a>
				
			</header>
    <style type="text/css">
		.return_index{
			width: 120px;
	    position: fixed;
	    top: 5px;
	    right: -80px;
	    -o-transition:1s;
		  -ms-transition:1s;
		  -moz-transition:1s;
		  -webkit-transition:1s;
		  transition:1s;
		  z-index: 0;
		}
		.return:hover > .return_index{
			right: -10px;
			-o-transition:1s;
		  -ms-transition:1s;
		  -moz-transition:1s;
		  -webkit-transition:1s;
		  transition:1s;
		}
		.return_say{
			width: 100px;
	    position: fixed;
	    top: 10px;
	    right: -100px;
	    -o-transition:.8s;
		  -ms-transition:.8s;
		  -moz-transition:.8s;
		  -webkit-transition:.8s;
		  transition:.8s;
		  z-index: 0;
		  opacity: 0;
		}
		.return:hover > .return_say{
			right: 110px;
			-o-transition:.8s;
		  -ms-transition:.8s;
		  -moz-transition:.8s;
		  -webkit-transition:.8s;
		  transition:.8s;
		  opacity: 1;
		}
    </style>
			
			<div class="site-content-contain">
				<div id="content" class="site-content">
					<div id="index-container" class="container">
						<div class="content">

							<div class="row heading">
								<div class="col-lg-12">
									<h2>希望的航行者 & 絕望的渡輪&nbsp;&nbsp;&nbsp;</h2>
									<img src="images/title.png" style="margin: -5px auto -10px;">
									<div class="intro">Hopeful Sailors & Despair Ferry&nbsp;&nbsp;&nbsp;</div>
								</div>
							</div>

							<div class="bg_intro">
								<img src="images/school.png" width="550px;" >
								<p></p>
								<p>私立希望之峰學園，集合各領域的超一流高校生，以培育精英為目的，並獲得政府公認的超特權學校。</p>
								<p>有人說，若能從這所學校畢業，人生幾乎等於是成功了。</p>
								<p>而你作為第８７屆新生，在踏入校門的一剎那昏了過去，醒來後發現……</p>
								<p><a class="btn btn-primary btn-lg" href="about.php" role="button">ABOUT</a></p>
							</div>
							
							<div class="new">
								<h3>近期更新</h3>
								<img src="images/title.png" style="margin: -20px auto 30px;">
								<div class="new_inner">
								<p>2017.05.01.Mon. &nbsp;更新Q&A 1~5&nbsp;<img src="images/new.gif"></p>
								<p>2017.05.01.Mon. &nbsp;企劃宣傳開始！&nbsp;<img src="images/new.gif"></p>
								
								</div>
							</div>
						
							<div class="plurk">
								<h3 class="en">Plurk</h3>
								<img src="images/title.png" style="margin: -20px auto 30px;">
								<div style="width:200px; height:375px; margin:0 auto;"><iframe src="//www.plurk.com/getWidget?uid=14103759&amp;h=375&amp;w=200&amp;u_info=2&amp;bg=000000&tl=f0f0f0" width="200" frameborder="0" height="375" scrolling="no"></iframe></div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- site-content-contai -->
		</div>

		<script type='text/javascript' src='js/global.js'></script>

	</body>
</html>
