<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>人狼遊戲抽籤</title>
    <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
</head>
<body>


<?php  

if($_POST['player']==''){
	$players=$_POST['checkbox'];
}else{
	$ss=$_POST['player'];
	$players = explode("\n",$ss);
}




if(count($players)<13){
	$wolf=2;
}else if(count($players)<13){
	$wolf=2;
}else if(count($players)>15){
	$wolf=4;
}else{
	$wolf=3;
}

echo "人數：".count($players)."　　　　　死掉的同學可點擊標記";


$jobs = array();
for ($k=0; $k < count($players); $k++) { 
	$jobs[$k] = "x";
}


$jobs_kind= array("wolf","diviner","wolf_fans","hunter","witch","cupid","people");
$jobs_name= array("人狼","占卜師","狂人","獵人","女巫","邱比特","村民");
$jobs_num = array($wolf,1,1,1,1,1,count($players)-$wolf-5);

for($i=0; $i<count($jobs_kind); $i++){
	do{
		$num=rand(0,count($players)-1);
		if($jobs[$num]=="x"){
			$jobs[$num]=$jobs_kind[$i];
			$jobs_num[$i]--;
		}
	}while ($jobs_num[$i]>0);
}


for ($m=0; $m < 7; $m++) { 
	if($jobs_kind[$m]=="wolf"||$jobs_kind[$m]=="wolf_fans"){
		?>
		<h3 style="color:red;"><?php echo $jobs_name[$m]; ?></h3>
		<?php	
	}else	if($jobs_kind[$m]=="people"){
		?>
		<h3><?php echo $jobs_name[$m]; ?></h3>
		<?php	
	}else{
		?>
		<h3 style="color:blue;"><?php echo $jobs_name[$m]; ?></h3>
		<?php	
	}
	

	for ($n=0; $n < count($players); $n++) { 
		if($jobs[$n]==$jobs_kind[$m]){
			?>
			<span class="name"><?php echo $players[$n]; ?></span>　　　　　
			<?php	
		}
	}
	?>
	<hr/>
	<?php	
}



?>

</body>
</html>

<style type="text/css">
	html{
		font-family: Microsoft JhengHei;
		background: linear-gradient(#ffffff,#A29EEF);
		height: 100%;
		line-height: 20px;
	}
	.name{
		font-weight: bold;
	}
	.name:hover{
		cursor: pointer; 
	}
	.newName{
		color:#fff;
		background-color: #dddddd;
		font-weight: regular;
	}
</style>

<script>
$(document).ready(function(){
  $("span").click(function(){
    $(this).attr('class', 'newName');
  });
});
</script>