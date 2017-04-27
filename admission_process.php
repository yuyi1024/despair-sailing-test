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
					<h2 class="title">報名流程</h2>
					<img src="images/title.png" style="margin: -10px auto 50px; display:block;">
					
						<ul class="timeline" style="padding-bottom: 100px;">
							
							<li class="blue">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/admission_icon1.png" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>2017/05/01 - 2017/05/25</h4>
										<h4 class="subheading">填寫調查表單</h4>
									</div>
									<div class="timeline-body animate-left">
										<p>　　詳讀<a href="description.php">【企劃詳細說明】</a>與<a href="rules.php">【報名規則】</a>，在確認沒問題後，填寫<a href="https://docs.google.com/forms/d/e/1FAIpQLSdYQ-rycyOKZ53mB5UBiHYHysAyfT2b9tqoJlTWIbbF746AMw/viewform">意願調查表單</a>。</p>
										<p>　　※注意：此為參考用調查表單，非正式報名且不具任何效力。正式報名時的設定可與此表單的填寫內容不同。</p>
										<p>　　若填單人數於5/25前不滿低標*，將視情況延期或不舉辦。</p>
										<p>　　低標*：單一性別未滿6人，或總人數不滿16人。</p>
									</div>
								</div>
							</li>
							
							<li class="timeline-inverted red">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/admission_icon2.png" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>即日起 - 2017/07/13 21:00</h4>
										<h4 class="subheading">設計角色</h4>
									</div>
									<div class="timeline-body animate-left">
										<p>　　<a href="download.php">【下載素材】</a>並設計角色，設定上若有任何問題都能透過Q&A或噗浪詢問。</p>
										<p>正式報名時需繳交的附件如下：</p>
										<ul>
											<li>電子學生手冊1、2</li>
											<li>角色立繪</li>
										</ul>
									</div>
								</div>
							</li>
							
							<li class="green">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/admission_icon3.png" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>2017/06/01 - 2017/07/13 21:00</h4>
										<h4 class="subheading">報名開始</h4>
									</div>
									<div class="timeline-body animate-left">
										<p>　　於報名期間內，填寫<a>報名表單</a>後，並以【本噗】私噗<a href="https://www.plurk.com/monokitsune2017">【校長】</a>繳交附件資料。</p>
										<p>　　若角色設定上有問題，官方在與該報名者討論過後可能要求其進行修改。</p>
										<p>　　在報名時間結束以前，皆可進行角色設定的修改。若皆無問題，則等待報名時間結束後抽籤。</p>
										<p>　　07/05 - 07/11官方網站更新及噗浪回覆為一天一次，建議有任何問題在此之前詢問。</p>
									</div>
								</div>
							</li>
							
							<li class="timeline-inverted yellow">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/admission_icon4.png" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>2017/07/14 0:00</h4>
										<h4 class="subheading">抽籤</h4>
									</div>
									<div class="timeline-body animate-left">
										<p>　　於報名時間結束後，若總報名同學超過16人、單一性別同學過多、或才能與設定重複的狀況，將採用抽籤的方式決定。</p>
										<p>　　抽籤順序為才能→性別。</p>
										<p>　　在完成抽籤後，校長會將確定入學的同學加為好友，其餘同學則視為場外。</p>
									</div>
								</div>
							</li>
							
							<li class="timeline-inverted">
								<div class="timeline-image start_circle">
									<img class="img-circle img-responsive start" src="images/anchor.png" alt="">
									<h4>2017/07/15
									<br>企劃
									<br>開始</h4>
								</div>
							</li>
						</ul>

					</div>
				</div>		
			</div>
		
	</body>
</html>

<style type="text/css">
	@media only screen and (max-width: 1000px) {
	    .start{
	      width: 80px;
	      margin: 5px auto;
	    }
	    .timeline>li .timeline-image h4 {
		    margin-top: -90px !important;
			}
  	}
</style>

