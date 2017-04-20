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
						<h2 class="title">Q&A</h2>
						<img src="images/title.png" style="margin: -10px auto 20px; display:block;">
						
						<div class="about_sec1 no-sec">
							<a class="btn" href="#ask" role="button">前往發問</a>
						</div>

						<div class="qanda_sec">
							<div class="about_sec1 animate-left">
								<div id="QandA">
									<p class="Question">Q5.請問私噗報名是用本噗嗎? <img src="images/new.gif"></p>
									<div class="Answer">
										<p>A5.是的，請在填寫完報名表單後以本噗私噗校長繳交附件。<br/>若只使用角噗沒有本噗，請留下其他可以即時聯絡的方式（例如：FB或Line）。</p>
									</div>
								</div>
							</div>
						</div>

						<div class="qanda_sec">
							<div class="about_sec1 animate-left">
								<div id="QandA">
									<p class="Question">Q4.請問場外的同學需遵守的部分校規是? <img src="images/new.gif"></p>
									<div class="Answer">
										<p>A4.場外同學仍需遵守除了自相殘殺外的所有校規。</p>
									</div>
								</div>
							</div>
						</div>

						<div class="qanda_sec">
							<div class="about_sec1 animate-left">
								<div id="QandA">
									<p class="Question">Q3.請問這個企劃有簡稱嗎？ <img src="images/new.gif"></p>
									<div class="Answer">
										<p>A3.本企劃簡稱為<b>絕望航行</b>。</p>
									</div>
								</div>
							</div>
						</div>
		
						<div class="qanda_sec">
							<div class="about_sec1 animate-left">
								<div id="QandA">
									<p class="Question">Q2.可以在其他社群平台進行這個企劃的宣傳嗎？ <img src="images/new.gif"></p>
									<div class="Answer">
										<p>A2.本企劃不接受在噗浪以外的平台宣傳，感謝您的好意。</p>
									</div>
								</div>
							</div>
						</div>

						<div class="qanda_sec">
							<div class="about_sec1 animate-left">
								<div id="QandA">
									<p class="Question">Q1.如果才能跟其他角色重複可以嗎? <img src="images/new.gif"></p>
									<div class="Answer">
										<p>A1.可以。<br/>但是於正式入學名單中，一種才能僅限一位，若有重複將以抽籤決定。意願調查時填寫的才能可作為參考。</p>
									</div>
								</div>
							</div>
						</div>
				
						<div id="ask" class="about_sec1" style="width: 60%">
							<form action="https://docs.google.com/forms/d/e/1FAIpQLSdQABNhPC6oWdu7DWq4vSdt8cch2pY45UPEAT7J-LckQAKo8A/formResponse" method="get" target="foo" onsubmit="window.open('','foo','resizable=1')">
								<h3><b>發問</b></h3>
								<img src="images/title2.png" class="sub_title">
								<div class="text">
									<fieldset>
								    <div class="form-item">
							        <textarea name="entry.1181637701" rows="5" placeholder="有任何問題歡迎發問，跟官方告白也可以噢(*´﹀`)੭" required="required"></textarea>
								    </div>
								    <br/>
										<p class="ask">若是擔心設定上的問題會造成劇透，可使用噗浪私噗官方詢問。</p>
									</fieldset>
									<button type="submit" value="Submit" class="btn">ASK</button>

								</div>
							</form>
						</div>

					</div>
				</div>		
			</div>
		
	</body>
</html>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
jQuery(function($){
$("p.Question").css({cursor:"pointer"}).click(function(){
$(this).next().toggle("normal");
});
});
</script>

<style type="text/css">
.about_sec1{
	margin: 0 auto 15px;
	width: 60%
}

</style>