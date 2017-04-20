<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>希望的航行者&絕望的渡輪</title>
		<?php
			include('link.php');
		?>
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

<style type="text/css">
	.ex{
		color: blue;
		cursor: pointer;
	}
</style>

		
		<div id="container" class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="daily"></div>
					<h2 class="title">詳細說明</h2>
					<img src="images/title.png" style="margin: -10px auto 50px; display:block;">

					<div class="instuction_title">
						<img src="images/number1.png" style="width:100px; margin: 0 auto 0; display: block;">
						<div  class="title_back">
							<div class="title_front">
								<h3><b>（非）日常篇&nbsp;&nbsp;</b></h3>
							</div>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>地圖探索</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　於每章＜（非）日常篇＞開始時，校長將開放部份未開放區域並公佈地圖。</p>
							<p>　　同學們可以發噗（私噗或公開噗皆可），在噗首註明【主線】、【個人／多人探索】、【時間】，並＠黑白狐校長，即可在可探索區域任意進行探索，校長將針對探索的地方進行回覆。</p>
							<p id="ex1" class="ex">>地圖探索範例</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>動機創作</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p style="color:red;">*所有同學必須</p>
							<p>　　在校長公佈動機到<b>＜（非）日常篇＞結束前</b>，請所有同學務必針對該次動機進行創作，圖文、語C皆不限。</p>
							<p>　　噗首請註明【主線／第N章動機】。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>黑白狐金幣</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　校長為給予參與＜學級裁判＞的同學們獎勵，將贈予有參與該次＜學級裁判＞的同學們每人兩枚『黑白狐金幣』。</p>
							<p>　　地圖中也存在著數量稀少的黑白狐金幣，同學們可在進行【地圖探索】時獲得。</p>
							<p>　　黑白狐金幣可用於【黑白狐轉蛋機】的抽獎。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>黑白狐轉蛋機</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　【黑白狐轉蛋機】將於＜學級裁判＞結束後開放<b>4天</b>，校長會發一則公開的轉蛋噗，持有黑白狐金幣的同學將可於此噗中進行抽獎。</p>
							<p>　　抽獎辦法為噗浪語法（dice10）（dice10），骰一次將消耗一枚黑白狐金幣，且依照同學骰出的數字將獲得一份小禮物。</p>
							<p>　　校長將個別私噗告知同學獲得的禮物內容，並於4天的開放期限結束後以亂數次序的方式公佈該次抽取出的禮物內容於轉蛋噗中，同時關閉回應功能。</p>
							<p>　　同學們可自行決定是否公佈禮物內容，校長並不會加以限制。</p>
							<p>　　請同學們記得於開放期限中進行抽獎，若是錯過將必須等待下次開放。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>黑白狐轉蛋機注意事項</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<ul style="list-style-type:cjk-ideographic;">
								<p><li>所有抽獎的過程皆為公開，<b>不可刪除或編輯留言重骰</b>。若經發現或檢舉將取消往後所有抽獎資格。幫忙檢舉的同學則可以獲得一枚黑白狐金幣作為獎勵。</li></p>
								<p><li>骰子數字10視為0，故禮物編號為00至99號，共100種。</li></p>
								<p><li>獲得的禮物可用於任何地方，送禮或殺人皆可。但送禮請一律於<b>公開噗中</b>送，若有不能公開的理由請與校長進行討論。</li></p>
								<p><li>校長需紀錄所有禮物的流向，若有同學送禮請私噗提醒校長、並附上交流連結以供確認。</li></p>
							</ul>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>黑白狐冬眠時間</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　每隔一段時間，黑白狐將宣佈進入冬眠時間。</p>
							<p>　　於該日的22:00至隔日7:00，同學們將被禁止出房門，請特別注意。</p>
							<div id="non-daily"></div>
						</div>
					</div>

					<div class="instuction_title">
						<img src="images/number2.png" style="width:100px; margin: 0 auto 0; display: block;">
						<div  class="title_back">
							<div class="title_front">
								<h3><b>非日常篇</b></h3>
							</div>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>主線報名與案件構想</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　在兇手及死者確定人選後，一律由校長發出只有案件當事人的私噗，同學們將於私噗中與企劃官方進行討論。</p>
							<p>　　建議當事人先自行構思劇本以方便後續討論，官方將針對劇本提出問題與改善意見。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>若想當兇手</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<ul style="list-style-type:cjk-ideographic;">
								<p><li>自行尋找中意的死者，經死者確認同意後私噗校長。</li></p>
								<p><li>承上條，若不希望身份曝光，也可委託官方代為詢問。</li></p>
								<p><li>填寫<a>『主線案件報名表單』</a>進行報名，由官方進行死者的安排。</li></p>
								<p><li>於新章節開始<b>四天</b>後若無人報名，將進行抽籤。</li></p>
							</ul>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>若想當死者</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<ul style="list-style-type:cjk-ideographic;">
								<p><li>自行尋找中意的兇手，經兇手確認同意後私噗校長。</li></p>
								<p><li>承上條，若不希望身份曝光，也可委託官方代為詢問。</li></p>
								<p><li>填寫<a>『主線案件報名表單』</a>進行報名，由官方進行兇手的安排。</li></p>
								<p><li>於新章節開始<b>四天</b>後若無人報名，將進行抽籤。</li></p>
								<p><li>第二章開始後若無人報名，將安排過去<b>參與情況較不理想者</b>優先擔任。</li></p>
							</ul>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>若想當案件關係人</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　目擊者、被嫁禍者、抑或是像十神（一代二章）、狛枝（二代一章）…等，可透過填寫<a>『主線案件報名表單』</a>進行報名。</p>
							<p>　　在兇手及死者同意後，官方將依案件的情況進行安排，但也有可能完全無法加入，請報名者注意。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>若想玩雙殺</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　僅有一個章節開放雙殺，請盡量於第三章（包含）以前進行報名。</p>
							<p>　　且本章節僅限發生於第四章（包含）以前。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>死亡 CG 圖</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　由官方進行繪製。死者若想自行繪製也可向校長申請。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>發現屍體</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　在校長發出《似乎有同學發生什麼事》的提示後，將提供同學們數個《起始點》。</p>
							<p>　　同學們可以發噗表示目前的位置（僅限於該次提供的起始點）與行動，並開始自由探索。個人或組隊進行皆可。</p>
							<p>　　當到達新的地點時，沒有問題的地方校長會提示《似乎沒什麼特別的》，直到有同學探索到《有問題的地方》。</p>
							<p>　　同學們可多加留意其他同學的搜查噗，當噗主作出《尖叫》或是《呼叫他人》的行動，而自己剛好在《該地點附近》時，即可闖入該同學的搜查噗。</p>
							<p>　　當屍體首次被三名以上的同學發現時，校長將進行《屍體發現公告》，此刻即進入＜非日常篇＞。</p>
							<p id="ex2" class="ex">>校長公告範例</p>
							<p id="ex3" class="ex">>尋找屍體範例</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>線索搜查</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　《屍體發現公告》將連同《死亡CG》一起放出，於留言處則放有《黑白狐檔案》。</p>
							<p>　　校長將個別發出《屍體搜查》和數個《有線索地點》的搜查噗，噗首會附上場景圖及總線索數。</p>
							<p>　　<b>場景圖上並不會有搜查點</b>，請同學們直接留言說出想要調查的地方即可，校長將針對調查的地方進行回覆，並註明剩餘線索數。</p>
							<p>　　若想針對某些部份進行更仔細的調查，例如：物品顏色、尺寸…等，可進一步追問。若不在原定的線索內，則剩餘線索數不會減少。</p>
							<p>　　在所有線索都被調查過後，將停止該地點的搜查。當所有地點的線索皆已調查完成，將進入＜學級裁判＞的環節。</p>
							<p id="ex4" class="ex">>屍體公告範例</p>
							<p id="ex5" class="ex">>線索搜查範例</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>線索搜查注意事項</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<ul style="list-style-type:cjk-ideographic;">
								<p><li>每位同學每次只能夠在一個地點進行搜查，除非同學離開該地點。</li></p>
								<p><li>請勿一口氣調查數個地方。</li></p>
								<p><li>搜查沒有時間限制，在所有地點的線索都被調查過後才開始＜學級裁判＞。</li></p>
								<p><li>雖然是在公開噗中搜查，但請勿在＜學級裁判＞中說出《同學自身沒有調查到》的線索。</li></p>
								<p><li>請同學們盡量以線索數作為分工依據進行搜查，避免所有人集中在同一地點，以節省搜查時間。</li></p>
								<p><li>未經校長回應，請勿擅自碰觸案發現場的物品。<br/><a id="ex6" class="ex">>正確的搜查範例</a><br/><a id="ex7" class="ex">>錯誤的搜查範例</a></li></p>
							</ul>
							<div id="trial"></div>
						</div>
					</div>



					<div id="trial" class="instuction_title">
						<img src="images/number3.png" style="width:100px; margin: 0 auto 0; display: block;">
						<div  class="title_back">
							<div class="title_front">
								<h3><b>學級裁判</b></h3>
							</div>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>學級裁判</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　待＜非日常篇＞搜查結束後將進入本環節。</p>
							<p>　　校長將發出＜學級裁判＞的噗，在說明規則後，請同學們於該噗中進行推理並找出兇手。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>學級裁判注意事項</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<ul style="list-style-type:cjk-ideographic;">
								<p><li>若推理過程有卡住太久的狀況發生，官方將視情況私噗某些人給予些許提示。</li></p>
								<p><li>弱點部份可使用噗浪粗體字標記。（例：凶器真的是<b>菜刀</b>嗎？）</li></p>
								<p><li>針對某人的回應可使用噗浪的回覆功能。</li></p>
								<p><li>若有跨夜的狀況將詢問同學們的意願，繼續或改日進行。</li></p>
							<ul style="list-style-type:cjk-ideographic;">
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>投票</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　當同學們討論出結果，校長會提示進入投票時間，請所有參與＜學級裁判＞的同學說出兇手的名字進行投票，將以多數決來決定結果。</p>
							<p>　　若是結果正確，將宣佈＜學級裁判＞閉庭，同學們仍然可在此噗留言直到校長宣佈《處刑》開始。</p>
							<p>　　若是結果錯誤，校長將取笑全體同學們並予以懲罰。</p>
						</div>
					</div>

					<div class="about_sec1 animate-left">
						<h3><b>處刑</b></h3>
						<img src="images/title2.png" class="sub_title">
						<div class="text">
							<p>　　於校長宣佈《處刑》開始後，由兇手自行發噗，針對《處刑》的過程進行創作（圖文、語C皆可）。</p>
							<p>　　處刑結束後第一次拉線，其他同學可針對目睹兇手的處刑進行交流。</p>
							<p>　　噗主需自行判斷進行第二次拉線，此時則開放玩家留言。也可直接另開一則感想噗。</p>
							<p>　　兇手請於＜學級裁判＞結束前準備好《處刑》創作。</p>
						</div>
					</div>

					<div class="reference">*部份內容參考自企劃＜絕望合宿＞</div>
				</div>
			</div>		
		</div>
	

		<div class="snip">
		  <figure class="snip1566">
		    <img src="images/number1.png" alt="sq-sample14" />
		    <figcaption><img src="images/number1_h.png"></figcaption>
		    <a href="description.php#daily"></a>
		  </figure>

		  <figure class="snip1566">
		    <img src="images/number2.png" />
		    <figcaption><img src="images/number2_h.png"></figcaption>
		    <a href="description.php#non-daily"></a>
		  </figure>

		  <figure class="snip1566">
		    <img src="images/number3.png" />
		    <figcaption><img src="images/number3_h.png"></figcaption>
		    <a href="description.php#trial"></a>
		  </figure>
		</div>


		<?php
			include('plugins/lightGallery-master/demo/description_lightbox.php');
		?>
	</body>
</html>

<style type="text/css">
	.reference{
		position: absolute;
		bottom: 30px;
		right: 0;
	}
</style>