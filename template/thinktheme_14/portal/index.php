<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<style id="diy_style" type="text/css"></style>
<div class="wp">
	<!--[diy=ttdiy1]--><div id="ttdiy1" class="area"></div><!--[/diy]-->
</div>
<link href="$_G['style']['styleimgdir']/portal/portal.css" rel="stylesheet" type="text/css" />

<div id="tt_portal_content">
<style>
.tt_banner_box{width:960px;height:320px;position:relative;z-index:1; margin-bottom:10px; overflow:hidden; background:#fff; padding:10px; margin-top:10px;}
.tt_banner_box .sub_box{width:960px;height:320px;float:left;position:relative;}
.tt_banner_box .sub_box img{width:100px;height:50px;}
#bd1lfimg{position:relative;width:960px;height:320px;overflow:hidden}
#bd1lfimg img{ width:960px; height:320px;}
#bd1lfimg div{width:100000px}
#bd1lfimg dl{width:960px;height:320px;position:relative;overflow:hidden;float:left}
#bd1lfimg dt{width:960px;height:320px;position:absolute;left:0;top:0}
.sub_no{float:right;position:absolute;right:14px;bottom:12px;z-index:200; height:auto;}
.sub_no li{width:100px;height:50px;float:left;overflow:hidden;background:#fff;cursor:pointer;margin-left:10px; border:5px #fff solid;filter:alpha(Opacity=70);Opacity:0.7;}
.sub_no li.show{filter:alpha(Opacity=100);Opacity:1;}
</style>
<div class="tt_banner_box">   
        
	 	<!--[diy=tt_portal_flash]--><div id="tt_portal_flash" class="area"></div><!--[/diy]-->

        <script src="$_G['style']['styleimgdir']/portal/focus_image_box.js" type="text/javascript"></script>
        <script type="text/javascript">movec();</script>                                
</div>
    
<div class="tt_content_b">

	<div class="tt_kuaixun">
        <!--[diy=tt_portal_kuaixun]--><div id="tt_portal_kuaixun" class="area"></div><!--[/diy]-->
    </div>

	<div class="tt_content_left">
		<ul style="display: block;" class="tt_portal_list">
			<!--[diy=tt_portal_tuwen]--><div id="tt_portal_tuwen" class="area"></div><!--[/diy]-->
		</ul>
        <!--[diy=tt_portal_more]--><div id="tt_portal_more" class="area"></div><!--[/diy]-->
       	
    </div>

	<div class="tt_content_right">
		<div class="tt_remenhuodong">
			<!--[diy=tt_portal_huodong]--><div id="tt_portal_huodong" class="area"></div><!--[/diy]-->
		</div>
	
    	<div class="tt_jiaodian">
			<!--[diy=tt_portal_zixun]--><div id="tt_portal_zixun" class="area"></div><!--[/diy]-->					
		</div>
        
        <div class="tt_mtxs">
			<!--[diy=tt_portal_mtxs]--><div id="tt_portal_mtxs" class="area"></div><!--[/diy]-->					
		</div>
        
        <div class="tt_hyyh">
			<!--[diy=tt_portal_hyyh]--><div id="tt_portal_hyyh" class="area"></div><!--[/diy]-->           				
		</div>
        
        <div class="tt_erweima cl">
        	<!--[diy=tt_portal_guanzhu]--><div id="tt_portal_guanzhu" class="area"></div><!--[/diy]-->
		</div>
	</div>

</div>

<!--友情链接开始-->
	<div class="tt_yqlj">
    	<h2 class="tt_yqlj_h cl"><a>友情链接</a></h2>
			<!--[diy=tt_portal_yqlj]--><div id="tt_portal_yqlj" class="area"></div><!--[/diy]-->           				
	</div>
</div>




<script src="misc.php?mod=diyhelp&action=get&type=index&diy=yes&r={echo random(4)}" type="text/javascript"></script>
<!--{template common/footer}-->
