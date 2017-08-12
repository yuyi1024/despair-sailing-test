<!DOCTYPE html>
<link href="plugins/booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script> window.jQuery || document.write('<script src="plugins/booklet/jquery-2.1.0.min.js"><\/script>') </script>


<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>


<script src="plugins/booklet/jquery.easing.1.3.js"></script>
<script src="plugins/booklet/jquery.booklet.latest.min.js"></script>


<html>
	<head>
		<meta charset="UTF-8">
		<title>希望的航行者&絕望的渡輪</title>
		<?php
			include('link.php');
		?>
	</head>
	<body>

		<div id="container" class="container">

			<h2 style="text-align:center;padding-top:20px;">狐民曆</h2>
			<img src="images/title.png" style="margin: -10px auto 10px; display:block;">


			<div id="mybook">
		    <div>
	        <img src="plugins\booklet\images\lunar/cover1.png">
		    </div>

		    <div class="pbg">
	        <img src="plugins\booklet\images\lunar/list1.png">
		    </div>
		    <div>
	        <img src="plugins\booklet\images\lunar/list2.png">
		    </div>

		    <div class="pbg">
	        <img src="plugins\booklet\images\lunar/p1.png">
		    </div>
		    <div>
	        <img src="plugins\booklet\images\lunar/p2.png">
		    </div>

		    <div class="pbg">
	        <img src="plugins\booklet\images\lunar/p3.png">
		    </div>
		    <div>
	        <img src="plugins\booklet\images\lunar/p4.png">
		    </div>

		    <div class="pbg">
	        <img src="plugins\booklet\images\lunar/p5.png">
		    </div>
		    <div>
	        <img src="plugins\booklet\images\lunar/p6.png">
		    </div>

		    <div class="pbg">
	        <img src="plugins\booklet\images\lunar/p7.png">
		    </div>
		    <div>
	        <img src="plugins\booklet\images\lunar/p8.png">
		    </div>

		    <div class="pbg">
	        <img src="plugins\booklet\images\lunar/p9.png">
		    </div>
		    <div>
	        <img src="plugins\booklet\images\lunar/p10.png">
		    </div>

		    <div class="pbg">
	        <img src="plugins\booklet\images\lunar/p11.png">
		    </div>
		    <div>
	        <img src="plugins\booklet\images\lunar/p12.png">
		    </div>

		    <div class="pbg">
		        <img src="plugins\booklet\images\lunar/cover2.png">
		    </div>
			</div>
		</div>		
	</body>
</html>


<style type="text/css">
	.pbg{
		background-color:rgba(240,240,240,1);
	}
	#container{
	  height: 100vh;
		top: 0px;
	}

</style>

<script type="text/javascript">
	if ($('#container').height() < $(window).height()) {
    document.getElementById('container').style.height = "100vh";
	}
</script>

<script type="text/javascript">
$(function() {
    //single book
    $('#mybook').booklet({
        width:  730,
        height: 520,
        pageNumbers: false,
        closed: true,
        autoCenter: true,
        arrows: true,
        pagePadding: 0,
        speed: 300
    });
    $('#mybook1, #mybook2').booklet();

    //multiple books with a class
    $('.mycustombooks').booklet();
});
</script>
