<?php 
$v_url = $_GET["v_url"];
$img_url = $_GET["img_url"];
$filename = basename($img_url);
$filename = str_replace(strrchr($filename, '.'), '', $filename);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
	<title>视频合集</title>
	<link href="finishing/css/swiper.min.css" rel="stylesheet" type="text/css" />
	<link href="finishing/css/reset.css" type="text/css" rel="stylesheet" />
	<link href="finishing/css/find.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="ckplayer/ckplayer.js"></script>
	<style>
	.content{
		background-color: white;
		width: 100%;
		padding:10px 10px;
		margin-top:10px;
	}
	.footer{
		position:fixed;
		background-color: white;
		bottom:0;
		width:100%;
		padding:10px 10px;
		text-align:center;
	}
	</style>
</head>
<body>
<div class="container">
	<nav class="swiper-container nav-container">
		<ul class="swiper-wrapper nav-ul">
			<li class="swiper-slide active-li">
				<a href="javascript:;" class="slide-a">全部</a>
			</li>
			<li class="swiper-slide">
				<a href="javascript:;" class="slide-a">分类功能正在开发中……</a>
			</li>
		</ul>
	</nav>
    <!--nav-container end-->
    <div id="video" style="width:100%;height:300px;"></div>
	<!--ckplayer end-->
	<div class="content">
		<?php echo $filename;?>
	</div>
</div>

<div class="footer">
所有内容均收录于互联网，一切法律责任与本站无关。<br>
如有违反当地法律条款，请联系站长关闭此页。
</div>
<script type="text/javascript">
	var videoObject = {
		container: '#video',
		variable: 'player',
		flashplayer:false,
        autoplay:true,
        loop:false,
        poster:'<?php echo $img_url; ?>',
		video:'<?php echo $v_url; ?>'
	};
	var player=new ckplayer(videoObject);
</script>
<script src="finishing/js/jquery.min.js"></script>
<script src="finishing/js/imagesloaded.pkgd.min.js"></script>
<script src="finishing/js/masonry.pkgd.min.js"></script>
<script src="finishing/js/swiper.min.js"></script>
<script src="finishing/js/find.js"></script>		
</body>
</html>
