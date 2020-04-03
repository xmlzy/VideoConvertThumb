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
	<style>
		#announcement{position:absolute;width:100%;max-width:640px;height:30px;line-height:30px;overflow:hidden;}
		#announcement ul{position:absolute; top:0;width:100%;max-width:640px;}
		#announcement li{width:100%;max-width:640px;height:30px; line-height:30px; overflow:hidden;color:red;text-align:center;}
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
	<div id="announcement">
        <ul>
            <li>所有内容均收录于互联网，一切法律责任与本站无关。</li>
            <li>如有违反当地法律条款，请联系站长关闭此页。</li>
        </ul>
    </div>
    <!--nav-container end-->
	<aside class="fall-box grid" style="margin-top:30px;">
		<div class="grid-item item" onclick="javascript:window.location.href='play.php?v_url=/video/(1).mp4&img_url=/thumb/(1).jpg';">
			<img src="thumb/(1).jpg" class="item-img" />
			<section class="section-p">
		   		<p class="name-p">(1)</p>
			</section>
		</div>
		</a>
		<!--item end-->
		<div class="grid-item item" onclick="javascript:window.location.href='play.php?v_url=/video/(10).mp4&img_url=/thumb/(10).jpg';">
			<img src="thumb/(10).jpg" class="item-img" />
			<section class="section-p">
		   		<p class="name-p">(10)</p>
			</section>
		</div>
		<!--item end-->
		<div class="grid-item item" onclick="javascript:window.location.href='play.php?v_url=/video/(100).mp4&img_url=/thumb/(100).jpg';">
			<img src="thumb/(100).jpg" class="item-img" />
			<section class="section-p">
		   		<p class="name-p">(100)</p>
			</section>
		</div>
		<!--item end-->
		<div class="grid-item item" onclick="javascript:window.location.href='play.php?v_url=/video/(101).mp4&img_url=/thumb/(101).jpg';">
			<img src="thumb/(101).jpg" class="item-img" />
			<section class="section-p">
		   		<p class="name-p">(101)</p>
			</section>
		</div>
		<!--item end-->
	</aside>
	<a href="javascript:;" id="loading" class="more-a"><img src="finishing/img/ic_loading.gif" /></a>
</div>

<script src="finishing/js/jquery.min.js"></script>
<script>
	//首页公告
	var $announcement = $('#announcement ul');
	var cheight = parseInt($('#announcement').css('line-height').split('p')[0]);
	var announcementLength = $announcement.find('li').length;
	var nowtop,nexttop;
	var announcementTimer = setInterval(function (){
		nowtop = parseInt($announcement.css('top').split('p')[0]);
		nexttop = 0;
		if(nowtop == (-(announcementLength - 1)*cheight)){
			nexttop = '0px';
		}else{
			nexttop = (nowtop - 30) + 'px';
		}
		console.log(nowtop + ' ' + (-(announcementLength - 1)*cheight));
		$announcement.animate({top:''+nexttop});
	},2000);
</script>
<script src="finishing/js/imagesloaded.pkgd.min.js"></script>
<script src="finishing/js/masonry.pkgd.min.js"></script>
<script src="finishing/js/swiper.min.js"></script>
<script src="finishing/js/find.js"></script>		
</body>
</html>