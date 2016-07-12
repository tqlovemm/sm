<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('announcement');?><?php include template('common/header'); ?><script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(<?php echo $_G['setting']['zoomstatus'];?>);var imagemaxwidth = '<?php echo $_G['setting']['imagemaxwidth'];?>';</script>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em>
公告
</div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<div id="annofilter"></div><?php if(is_array($announcelist)) foreach($announcelist as $ann) { ?><div id="announce<?php echo $ann['id'];?>_c" class="umh<?php if($messageid != $ann['id']) { ?> umn<?php } ?>">
<h3 onclick="toggle_collapse('announce<?php echo $ann['id'];?>', 1, 1);"><?php echo $ann['subject'];?><em>(<?php echo $ann['starttime'];?>)</em></h3>
<div class="umh_act">
<p class="umh_cb"><a href="javascript:;" onclick="toggle_collapse('announce<?php echo $ann['id'];?>', 1, 1);">[ 展开 ]</a></p>
</div>
</div>
<div id="announce<?php echo $ann['id'];?>" class="um" style="display: none">
<p class="mbn">作者: <a href="home.php?mod=space&amp;username=<?php echo $ann['authorenc'];?>" class="xi2"><?php echo $ann['author'];?></a></p>
<?php echo $ann['message'];?>
</div>
<?php } ?>
</div>
</div>
<div class="appl">
<div class="tbn">
<h2 class="mt bbda">公告</h2>
<ul id="annonav">
<li class="cl<?php if(empty($_GET['m'])) { ?> a<?php } ?>"><a href="forum.php?mod=announcement">全部</a></li><?php if(is_array($months)) foreach($months as $month) { ?><li class="cl<?php if($_GET['m'] == $month['0'].$month['1']) { ?> a<?php } ?>"><a href="forum.php?mod=announcement&amp;m=<?php echo $month['0'].$month['1'];?>"><?php echo $month['0'];?> 年 <?php echo $month['1'];?> 月</a></li>
<?php } ?>
</ul>
</div>
</div>
</div>
<script type="text/javascript">
<?php if(!empty($annid)) { ?>
toggle_collapse('announce<?php echo $annid;?>', 1, 1);
<?php } ?>
var a = $('annonav').getElementsByTagName('li');
for(var i = 0, len = a.length; i < len; i++) {
if(a[i].className.indexOf(' a') != -1) {
var str = a[i].innerText || a[i].textContent;
$('annofilter').innerHTML = '<h1 class="mt">' + str + '</h1>';
break;
}
}
</script><?php include template('common/footer'); ?>