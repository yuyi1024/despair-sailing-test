<link rel='stylesheet' href='css/navbar_style.css' type='text/css'/>
<script data-require="jquery" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>


<div class="navigation-top">
	<div class="wrap">
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="頂部選單">
			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use> </svg>選單</button>
			<a href="#content" class="menu-scroll-down"><svg class="icon icon-arrow-right" aria-hidden="true" role="img"> <use href="#icon-arrow-right" xlink:href="#icon-arrow-right"></use> </svg><span class="screen-reader-text">向下捲動至內容</span></a>
		</nav><!-- #site-navigation -->
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="頂部選單">
			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use> </svg>選單</button>
			<div>
				<ul id="top-menu" class="menu">

					<li class="menu-item <?php if($_SERVER['SCRIPT_NAME']=="/home.php") { ?>  active    <?php   }  ?>">
						<a href="home.php">Home</a>
						<img src="images/eye.png" class="eye">
					</li>
					
					<li <?php if($_SERVER['SCRIPT_NAME']=="/about.php") { ?>  class="active"   <?php   }  ?>>
						<a href="about.php">About</a>
						<img src="images/eye.png" class="eye">
					</li>

					<li <?php if($_SERVER['SCRIPT_NAME']=="/description.php") { ?>  class="active"   <?php   }  ?>>
						<a href="description.php">Description</a>
						<img src="images/eye.png" class="eye">
						
					</li>

					<li <?php if($_SERVER['SCRIPT_NAME']=="/rules.php" or $_SERVER['SCRIPT_NAME']=="/admission_process.php" or $_SERVER['SCRIPT_NAME']=="/download.php") { ?>  class="active"   <?php   }  ?>>
						<a href="#">Admission ▼</a>
						<img src="images/eye.png" class="eye">
						<ul class="sub-menu">
							<li><a href="rules.php"><img src="images/arr.png" class="arr"> 報名規則</a></li>
							<li><a href="admission_process.php"><img src="images/arr.png" class="arr"> 報名流程<span style="font-size:6px;">(已結束)</span></a></li>
							<li><a href="download.php"><img src="images/arr.png" class="arr"> 素材下載</a></li>
						</ul>
					</li>
					
					<li <?php if($_SERVER['SCRIPT_NAME']=="/student_file.php" or $_SERVER['SCRIPT_NAME']=="/map.php" or $_SERVER['SCRIPT_NAME']=="/regulations.php") { ?>  class="active"   <?php   }  ?>>
						<a href="#">Handbook ▼</a>
						<img src="images/eye.png" class="eye">
						<ul class="sub-menu">
							<li><a href="student_file.php"><img src="images/arr.png" class="arr"> 學生檔案</a></li>
							<li><a href="npc.php"><img src="images/arr.png" class="arr"> NPC</a></li>
							<li><a href="map.php"><img src="images/arr.png" class="arr"> 地圖</a></li>
							<li><a href="regulations.php"><img src="images/arr.png" class="arr"> 校規</a></li>
						</ul>
					</li>
					
					<li <?php if($_SERVER['SCRIPT_NAME']=="/calendar.php") { ?>  class="active"   <?php   }  ?>>
						<a href="calendar.php">Calendar</a>
						<img src="images/eye.png" class="eye">
					</li>

					<li <?php if($_SERVER['SCRIPT_NAME']=="/recall.php") { ?>  class="active"   <?php   }  ?>>
						<a href="recall.php">Recall</a>
						<img src="images/eye.png" class="eye">
					</li>
			
					<li <?php if($_SERVER['SCRIPT_NAME']=="/qanda.php") { ?>  class="active"   <?php   }  ?>>
						<a href="qanda.php">Q&A</a>
						<img src="images/eye.png" class="eye">
					</li>

					<li <?php if($_SERVER['SCRIPT_NAME']=="/connect.php") { ?>  class="active"   <?php   }  ?>>
						<a href="connect.php">Connect</a>
						<img src="images/eye.png" class="eye">
					</li>

					
					
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</div><!-- .wrap -->
</div><!-- .navigation-top -->

<script type="text/javascript" src="http://playlist.me/w/script.js" data-config="{'skin':'skins/black/skin.css','volume':10,'autoplay':true,'shuffle':false,'repeat':1,'placement':'bottom','showplaylist':false,'playlist':[{'title':'DANGANRONPA','url':'https://despair-sailing.000webhostapp.com/plugins/soundy-background-music/music/OST1.mp3'}]}" ></script>