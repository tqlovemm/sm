<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forumdisplay');
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/forum/forumdisplay.htm', './template/yingxiao_toutiao2_m/touch/forum/forumdisplay_list.htm', 1458544840, 'diy', './data/template/2_diy_touch_forum_forumdisplay.tpl.php', './template/yingxiao_toutiao2_m', 'touch/forum/forumdisplay')
;?><?php include template('common/header'); ?><!-- header start -->

<div class="forumhead">
<div class="fh">
    	<h1><?php echo $_G['forum']['name'];?></h1>
    	<p><span class="mr20">今日 <?php echo $_G['forum']['todayposts'];?></span><span class="mr20">主题 <?php echo $_G['forum']['threads'];?></span></p>
        
<div class="fbt">
<a href="<?php if($_G['group']['allowpost']) { ?>forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?><?php } else { if($_G['uid']) { ?>forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?><?php } else { ?>member.php?mod=logging&action=login<?php } } ?>" class="z f_pst" >发帖</a>
<?php if($_G['uid']) { ?><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=forum&amp;id=<?php echo $_G['fid'];?>" class="favorite" >收藏</a><?php } ?> 
</div>
        <div class="flogo">
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" title="<?php echo $_G['forum']['name'];?>"><img alt="<?php echo $_G['forum']['name'];?>" src="<?php if($_G['forum']['icon']) { ?>data/attachment/common/<?php echo $_G['forum']['icon'];?><?php } else { ?>template/yingxiao_toutiao2_m/toutiao_mobile/img/forum.png<?php } ?>"><span class="img-shadow"></span></a>
        </div>
    </div>
</div>
<?php if(($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || $_G['forum']['threadsorts'] || $subexists) { ?>
<div class="nmt">
<div class="z">
<?php if($ceo_sortopen) { ?>
  <?php if(!$_G['setting']['mobile']['mobilesimpletype']) { if(($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || $_G['forum']['threadsorts']) { ?><a href="javascript:;" id="thtys" onclick="dbox('thtys','thtys');"><?php echo m_lang('thtys'); ?></a><?php } } ?> 
<?php } ?>
  <?php if($subexists) { ?><a href="javascript:;" id="subfrm" onclick="dbox('subfrm','subfrm');"<?php if($ceo_subopen == 1 && $_G['page'] == 1) { ?> class="subfrm"<?php } ?>><?php echo m_lang('subfrm'); ?></a><?php } ?> 
</div>
</div>
<?php } ?> 
<?php if($subexists) { ?>
<div class="catlist clnb" id="subfrm_menu" style="display:<?php if($ceo_subopen == 1 && $_G['page'] == 1) { ?>block<?php } else { ?>none<?php } ?>">
  <ul>
    <?php if(is_array($sublist)) foreach($sublist as $sub) { ?>    <li class="brtb"> 
      <?php if($sub['icon']) { ?> 
      <?php echo $sub['icon'];?> 
      <?php } else { ?> 
      <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $sub['fid'];?>"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/forum<?php if($sub['folder']) { ?>_new<?php } ?>.png" alt="<?php echo $sub['name'];?>" /></a> 
      <?php } ?> 
      <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $sub['fid'];?>" class="a">
      <p class="f_nm f15"><?php echo $sub['name'];?></p>
      <?php if($sub['description']) { ?>
      <p class="f11 xg1 f_dp"><?php echo cutstr(strip_tags($sub['description']),30); ?></p>
      <?php } ?> 
      <?php if($sub['todayposts']) { ?><span class="l yy f12"><?php echo $sub['todayposts'];?></span><?php } ?>
      </a> </li>
    <?php } ?>
  </ul>
</div>
<?php } ?> 
<?php if($ceo_sortopen) { ?>
    <!-- forum/forumdisplay_sort --><?php } ?>
<!-- header end --> 

<?php if($quicksearchlist && !$_GET['archiveid']) { ?><!-- forum/search_sortoption --><?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_top_mobile'])) echo $_G['setting']['pluginhooks']['forumdisplay_top_mobile'];?> 

<!-- main threadlist start --> 
<?php if(!$subforumonly) { ?> 
<div class="threadlist">
<?php if($_G['forum_threadcount']) { ?> <!--如果 帖子总数不为 false 或 0-->
    <?php if($ceo_piclistopen == 1) { ?> <!--如果 图文列表打开状态-->
        <!--如果打开图文列表--><!-- forum/forumdisplay_piclist -->    <?php } else { ?>
        <!--如果未打开图文列表-->
<ul id="alist">
  <?php if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { ?>    <li class="thlist"> <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" <?php echo $thread['highlight'];?>>
    <h1> 
      <?php if($thread['folder'] == 'lock') { ?> 
      <span class="t_att"><?php echo m_lang('tlock'); ?></span> 
      <?php } elseif($thread['special'] == 1) { ?> 
      <span class="t_att"><?php echo m_lang('ts1'); ?></span> 
      <?php } elseif($thread['special'] == 2) { ?> 
      <span class="t_att"><?php echo m_lang('ts2'); ?></span> 
      <?php } elseif($thread['special'] == 3) { ?> 
      <span class="t_att"><?php echo m_lang('ts3'); ?></span> 
      <?php } elseif($thread['special'] == 4) { ?> 
      <span class="t_att"><?php echo m_lang('ts4'); ?></span> 
      <?php } elseif($thread['special'] == 5) { ?> 
      <span class="t_att"><?php echo m_lang('ts5'); ?></span> 
      <?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?> 
      <span class="t_att"><?php echo m_lang('tdis'); ?></span> 
      <?php } elseif($thread['digest'] > 0) { ?> 
      <span class="t_att"><?php echo m_lang('tdig'); ?></span> 
      <?php } elseif($thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0) { ?> 
      <span class="t_att"><?php echo m_lang('tatt'); ?></span> 
      <?php } else { ?> 
      <?php } ?> 
      <?php echo $thread['subject'];?> </h1>
    <p> 
      <?php if($thread['authorid'] && $thread['author']) { ?> 
      <?php echo $thread['author'];?><?php } else { if($_G['forum']['ismoderator']) { ?>匿名<?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } } ?><span class="pipe">-</span><?php echo $thread['dateline'];?> <span class="num"><?php if($thread['replies'] > 0) { ?><?php echo $thread['replies'];?><?php } else { ?>0<?php } ?></span> </p>
    </a> </li>
  <?php } ?> 
</ul>    <?php } ?> 
<?php } else { ?>  <!--如果 帖子总数是 false 或 0-->
<li class="wmt brtb">本版块或指定的范围内尚无主题</li>
<?php } ?> 
</div>

<?php } if($ceo_norepages == 1) { ?> 
<?php if($_G['forum_threadcount'] > $_G['tpp']) { ?>
<div id="ajaxshow"></div>
<div class="a_pg" id="a_pg">
  <div id="ajaxld"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/load.gif" /> <?php echo m_lang('load_pic'); ?></div>
  <div id="ajnt"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=<?php echo $filter;?>&amp;orderby=<?php echo $_GET['orderby'];?><?php echo $forumdisplayadd['page'];?>&amp;<?php echo $multipage_archive;?>" onclick="return ajaxpage(this.href, first1, last1, first2, last2);"><?php echo m_lang('load'); ?></a></div>
</div>
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/ajaxpage.js?<?php echo VERHASH;?>" type="text/javascript" type="text/javascript"></script> 
<script type="text/javascript">
var pages=<?php echo $_G['page'];?>;
var allpage=<?php echo $thispage = ceil($_G['forum_threadcount'] / $_G['tpp']);; ?>;
var first1 = "<ul id=\"alist\"";
var last1 = "<div id=\"ajaxshow\"></div>";
var first2 = ">";
var last2 = "</ul>";
</script> 
<?php } ?> 
<?php } else { ?> 
<?php if($multipage) { ?>
<div class="pgbox"><?php echo $multipage;?></div>
<?php } ?> 
<?php } ?>

<script type="text/javascript">
$('.favorite').on('click', function() {
var obj = $(this);
$.ajax({
type:'POST',
url:obj.attr('href') + '&handlekey=favorite&inajax=1',
data:{'favoritesubmit':'true', 'formhash':'<?php echo FORMHASH;?>'},
dataType:'xml',
})
.success(function(s) {
popup.open(s.lastChild.firstChild.nodeValue);
evalscript(s.lastChild.firstChild.nodeValue);
})
.error(function() {
window.location.href = obj.attr('href');
popup.close();
});
return false;
});
</script> 

<!-- main threadlist end --> 
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_bottom_mobile'])) echo $_G['setting']['pluginhooks']['forumdisplay_bottom_mobile'];?>
<div class="pullrefresh" style="display:none;"></div><?php include template('common/footer'); ?> 
