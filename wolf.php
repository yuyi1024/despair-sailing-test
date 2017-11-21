<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>人狼遊戲抽籤</title>
</head>
<body>
<h1>絕望航行-人狼遊戲抽籤(･∀･*)</h1>
	<form action="result.php" method="POST">
		<div class="name" style="left: 20px; width:350px;">
			<h2>場內</h2>
			<div class="n1">
				<input type="checkbox" name="checkbox[]" value="系屋 拓麻">系屋 拓麻<br>
				<input type="checkbox" name="checkbox[]" value="天之川 時央">天之川 時央<br>
				<input type="checkbox" name="checkbox[]" value="室伏 左十留">室伏 左十留<br>
				<input type="checkbox" name="checkbox[]" value="五月七日 悠咲">五月七日 悠咲<br>
				<input type="checkbox" name="checkbox[]" value="眠目 影心">眠目 影心<br>
				<input type="checkbox" name="checkbox[]" value="宇佐見 颯太">宇佐見 颯太<br>
				<input type="checkbox" name="checkbox[]" value="安間 昼">安間 昼<br>
				<input type="checkbox" name="checkbox[]" value="月見 鬼灯">月見 鬼灯<br>
			</div>
			<div class="n2">
				<input type="checkbox" name="checkbox[]" value="緒坂 凜">緒坂 凜<br>
				<input type="checkbox" name="checkbox[]" value="若月 暁音">若月 暁音<br>
				<input type="checkbox" name="checkbox[]" value="速水 星蓮">速水 星蓮<br>
				<input type="checkbox" name="checkbox[]" value="熊吉 庫瑪">熊吉 庫瑪<br>
				<input type="checkbox" name="checkbox[]" value="七五三木 桃">七五三木 桃<br>
				<input type="checkbox" name="checkbox[]" value="大久保 小夜子">大久保 小夜子<br>
				<input type="checkbox" name="checkbox[]" value="花島 紗里">花島 紗里<br>
				<input type="checkbox" name="checkbox[]" value="金澤 琉璃子">金澤 琉璃子<br>
			</div>
		</div>

		<div class="name" style="left: 450px; width:350px;">
			<h2>場外</h2>
			<div class="n1">

				<input type="checkbox" name="checkbox[]" value="古座 水季">古座 水季<br>
				<input type="checkbox" name="checkbox[]" value="八森 數馬">八森 數馬<br>
				<input type="checkbox" name="checkbox[]" value="佐藤 陽介">佐藤 陽介<br>
				<input type="checkbox" name="checkbox[]" value="勘解由小路 露央紗">勘解由小路 露央紗<br>
				<input type="checkbox" name="checkbox[]" value="七海 秋">七海 秋<br>
			</div>
			<div class="n2">
				<input type="checkbox" name="checkbox[]" value="佐倉 和里">佐倉 和里<br>
				<input type="checkbox" name="checkbox[]" value="九十九 累">九十九 累<br>
				<input type="checkbox" name="checkbox[]" value="月見 葵">月見 葵<br>
				<input type="checkbox" name="checkbox[]" value="月澄 末">月澄 末<br>
				<input type="checkbox" name="checkbox[]" value="冬樹 逸狸">冬樹 逸狸<br>
				<input type="checkbox" name="checkbox[]" value="俞墨辰">俞墨辰<br>
			</div>	

		</div>
		

		<textarea name="player" placeholder="或輸入玩家名稱(換行表示為另一個人)"></textarea>
		<div class="button">
			<p>適用於11位玩家以上</p>
			<p>*不要兩邊都填</p>
			<input type="submit" value="抽籤送出" class="submit">
		</div>
	</form>

	<p class="by">by 悠咲中　　　　</p>
</body>
</html>

<style type="text/css">
	html{
		font-family: Microsoft JhengHei;
		background: linear-gradient(#ffffff,#A29EEF);
		height: 100%;
	}
	textarea{
		width: 300px;
		height: 300px;
		position: absolute;
		top: 50px;
		left: 900px;
	}
	.name{
		position: absolute;
		top: 50px;
		font-size: 18px;
		line-height: 36px;
		font-weight: bold;
	}
	.button{
		position: absolute;
		top: 70%;
	}
	.submit{
		background-color: #000;
		color: #fff;
		border: 0;
		width: 120px;
		height: 80px;
	}
	.submit:hover{
		cursor: pointer; 
	}
	.n1{
		position: absolute;
		left: 0%;
		color: #0F06AD;
	}
	.n2{
		position: absolute;
		left: 60%;
		color: #911A4F;
	}
	.by{
		position: absolute;
		bottom: 0;
		right: 0;
	}
</style>

