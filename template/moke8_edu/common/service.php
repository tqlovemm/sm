<?php echo 'Ä§¿Í°É www.moke8.com ';exit;?>
<!--{if $service}-->
<link href="$_G['style']['styleimgdir']/js/service.css" rel="stylesheet" type="text/css" />

<div class="service_side">
	<ul>
		<li><a href="$week_lang[20]" target="_blank"><div class="service_sidebox"><img src="$_G['style']['styleimgdir']/js/images/side_icon01.png">$week_lang[21]</div></a></li>
		<li><a href="$week_lang[22]" target="_blank"><div class="service_sidebox"><img src="$_G['style']['styleimgdir']/js/images/side_icon02.png">$week_lang[23]</div></a></li>
		<li><a href="http://wpa.qq.com/msgrd?v=3&uin=$week_lang[24]&site=qq&menu=yes" ><div class="service_sidebox"><img src="$_G['style']['styleimgdir']/js/images/side_icon04.png">$week_lang[25]</div></a></li>
		<li><a href="$week_lang[26]" target="_blank"><div class="service_sidebox"><img src="$_G['style']['styleimgdir']/js/images/side_icon03.png" target="_blank">$week_lang[27]</div></a></li>
		<li style="border:none;"><a href="javascript:goTop();" class="service_sidetop"><div class="service_sidebox"><img src="$_G['style']['styleimgdir']/js/images/side_icon05.png" target="_blank">$week_lang[28]</div></a></li>
	</ul>
</div>

<script type="text/javascript" src="$_G['style']['styleimgdir']/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
SER(document).ready(function(){
	SER(".service_side ul li").hover(function(){
		SER(this).find(".service_sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#178EEE"})	
	},function(){
		SER(this).find(".service_sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})	
	});	
});
function goTop(){
	SER('html,body').animate({'scrollTop':0},600);
}
</script>

<!--{/if}-->