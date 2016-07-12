<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('viewthread');
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/forum/viewthread.htm', './template/yingxiao_toutiao2_m/touch/forum/ceo_relateitems.htm', 1458544832, 'diy', './data/template/2_diy_touch_forum_viewthread.tpl.php', './template/yingxiao_toutiao2_m', 'touch/forum/viewthread')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/forum/viewthread.htm', './template/yingxiao_toutiao2_m/touch/forum/forumdisplay_fastpost.htm', 1458544832, 'diy', './data/template/2_diy_touch_forum_viewthread.tpl.php', './template/yingxiao_toutiao2_m', 'touch/forum/viewthread')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/forum/viewthread.htm', './template/yingxiao_toutiao2_m/touch/common/seccheck.htm', 1458544832, 'diy', './data/template/2_diy_touch_forum_viewthread.tpl.php', './template/yingxiao_toutiao2_m', 'touch/forum/viewthread')
;?><?php include template('common/header'); ?> 
<!-- header start -->
<div class="pt">
<?php if($_G['forum']['type'] == 'forum') { ?>
<a href="forum.php?forumlist=1"><?php echo m_lang('forum'); ?></a>
 <em> &gt; </em> <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>"><?php echo cutstr(strip_tags($_G['forum']['name']),20); ?></a>
<?php } else { ?>
<a href="forum.php?forumlist=1"><?php echo m_lang('forum'); ?></a>
 <em> &gt; </em> <a href="<?php echo $upnavlink;?>"><?php echo cutstr(strip_tags($_G['forum']['name']),20); ?></a>
<?php } ?>
<span class="y v_pst" ><button class="btn_pn btn_pn_blue br3" id="replyid"><span>回复</span></button></span>
</div>
<!-- header end -->

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_top_mobile'])) echo $_G['setting']['pluginhooks']['viewthread_top_mobile'];?>
<!-- main postlist start -->
<div class="postlist">
<div class="at_avat">
<h2>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>"><?php echo $_G['forum_thread']['subject'];?></a>
    <?php if($_G['forum_thread']['displayorder'] == -2) { ?> <span>(审核中)</span>
    <?php } elseif($_G['forum_thread']['displayorder'] == -3) { ?> <span>(已忽略)</span>
    <?php } elseif($_G['forum_thread']['displayorder'] == -4) { ?> <span>(草稿)</span>
    <?php } ?>
</h2>    
    <div class="fh">
    <div class="favt"><img src="<?php echo avatar($_G[forum_thread][authorid], small, true);?>" />	</div>	
        <?php if($_G['forum_thread']['authorid'] && $_G['forum_thread']['author']) { ?> 
        <a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" title="<?php echo $_G['forum_thread']['author'];?>"><?php echo $_G['forum_thread']['author'];?></a> 
        <?php } else { ?> 
        <?php if($_G['forum']['ismoderator']) { ?> 
        <a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>">匿名</a> 
        <?php } else { ?> 
        匿名 
        <?php } ?> 
        <?php } ?> 
        <p id="authorposton<?php echo $post['pid'];?>" class="xg1"> <?php echo date('Y-m-d H:i',$_G['forum_thread']['dateline']);; ?></p>            
    
        <span class="btn_manages grey rela">
        <?php if($_G['uid']) { ?><em><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=<?php echo $_G['tid'];?>" class="favbtn blue" style="margin-left:10px;">收藏</a></em><?php } ?>
        <?php if($_G['forum']['ismoderator']) { ?>
        <!-- manage start -->
        <?php if($post['first']) { ?>
            <em><a href="#moption_<?php echo $post['pid'];?>" class="popup blue">管理</a></em>
            <div id="moption_<?php echo $post['pid'];?>" popup="true" class="manages" style="display:none;">
                <?php if(!$_G['forum_thread']['special']) { ?>
                <input type="button" value="编辑" class="redirect button" href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if($_G['forum_thread']['sortid']) { if($post['first']) { ?>&amp;sortid=<?php echo $_G['forum_thread']['sortid'];?><?php } } if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?>">
                <?php } ?>
                <input type="button" value="删除" class="dialog button" href="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;moderate[]=<?php echo $_G['tid'];?>&amp;operation=delete&amp;optgroup=3&amp;from=<?php echo $_G['tid'];?>">
                <input type="button" value="关闭" class="dialog button" href="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;moderate[]=<?php echo $_G['tid'];?>&amp;from=<?php echo $_G['tid'];?>&amp;optgroup=4">
                <input type="button" value="屏蔽" class="dialog button" href="forum.php?mod=topicadmin&amp;action=banpost&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;topiclist[]=<?php echo $_G['forum_firstpid'];?>">
                <input type="button" value="警告" class="dialog button" href="forum.php?mod=topicadmin&amp;action=warn&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;topiclist[]=<?php echo $_G['forum_firstpid'];?>">
            </div>
        <?php } else { ?>
            <em><a href="#moption_<?php echo $post['pid'];?>" class="popup blue">管理</a></em>
            <div id="moption_<?php echo $post['pid'];?>" popup="true" class="manages" style="display:none;">
                <input type="button" value="编辑" class="redirect button" href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?>">
                <?php if($_G['group']['allowdelpost']) { ?><input type="button" value="删除" class="dialog button" href="forum.php?mod=topicadmin&amp;action=delpost&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;operation=&amp;optgroup=&amp;page=&amp;topiclist[]=<?php echo $post['pid'];?>"><?php } ?>
                <?php if($_G['group']['allowbanpost']) { ?><input type="button" value="屏蔽" class="dialog button" href="forum.php?mod=topicadmin&amp;action=banpost&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;operation=&amp;optgroup=&amp;page=&amp;topiclist[]=<?php echo $post['pid'];?>"><?php } ?>
                <?php if($_G['group']['allowwarnpost']) { ?><input type="button" value="警告" class="dialog button" href="forum.php?mod=topicadmin&amp;action=warn&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;operation=&amp;optgroup=&amp;page=&amp;topiclist[]=<?php echo $post['pid'];?>"><?php } ?>
            </div>
        <?php } ?>
        <!-- manage end -->					
        <?php } ?>					
        </span>
             
    </div>
</div>

<div id="alist">
    <?php $postcount = 0;?>    <?php if(is_array($postlist)) foreach($postlist as $post) { $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);?><?php if(!empty($_G['setting']['pluginhooks']['viewthread_posttop_mobile'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_posttop_mobile'][$postcount];?>
   <div class="plc cl" id="pid<?php echo $post['pid'];?>">
   <?php if(!$post['first']) { ?><span class="avatar"><img src="<?php if(!$post['authorid'] || $post['anonymous']) { ?><?php echo avatar(0, small, true);?><?php } else { ?><?php echo avatar($post[authorid], small, true);?><?php } ?>" style="width:28px;height:28px;" /></span><?php } ?>
       <div class="display pi" href="#replybtn_<?php echo $post['pid'];?>" <?php if($post['first']) { ?>style=" margin-left:10px;"<?php } ?>>
   <ul class="authi">
           <?php if(!$post['first']) { ?>
<li class="grey mbn">
<em>
<?php if(isset($post['isstick'])) { ?>
<img src ="<?php echo IMGDIR;?>/settop.png" title="置顶回复" class="vm" /> 来自 <?php echo $post['number'];?><?php echo $postnostick;?>
<?php } elseif($post['number'] == -1) { ?>
推荐
<?php } else { if(!empty($postno[$post['number']])) { ?><?php echo $postno[$post['number']];?><?php } else { ?><?php echo $post['number'];?><?php echo $postno['0'];?><?php } } ?>
</em><b>
<?php if($post['authorid'] && $post['username'] && !$post['anonymous']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" class="blue"><?php echo $post['author'];?></a></b>

<?php } else { if(!$post['authorid']) { ?>
<a href="javascript:;">游客 <em><?php echo $post['useip'];?><?php if($post['port']) { ?>:<?php echo $post['port'];?><?php } ?></em></a>
<?php } elseif($post['authorid'] && $post['username'] && $post['anonymous']) { if($_G['forum']['ismoderator']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank">匿名</a><?php } else { ?>匿名<?php } } else { ?>
<?php echo $post['author'];?> <em>该用户已被删除</em>
<?php } } ?>
                    <?php echo $post['dateline'];?> 
</li>
                <?php } ?>				

            </ul>
<div class="message">
                	<?php if($post['warned']) { ?>
                        <span class="grey quote">受到警告</span>
                    <?php } ?>
                    <?php if(!$post['first'] && !empty($post['subject'])) { ?>
                        <h2><strong><?php echo $post['subject'];?></strong></h2>
                    <?php } ?>
                    <?php if($_G['adminid'] != 1 && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || $post['status'] == -1 || $post['memberstatus'])) { ?>
                        <div class="grey quote">提示: <em>作者被禁止或删除 内容自动屏蔽</em></div>
                    <?php } elseif($_G['adminid'] != 1 && $post['status'] & 1) { ?>
                        <div class="grey quote">提示: <em>该帖被管理员或版主屏蔽</em></div>
                    <?php } elseif($needhiddenreply) { ?>
                        <div class="grey quote">此帖仅作者可见</div>
                    <?php } elseif($post['first'] && $_G['forum_threadpay']) { include template('forum/viewthread_pay'); } else { ?>

                    	<?php if($_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5))) { ?>
                            <div class="grey quote">提示: <em>作者被禁止或删除 内容自动屏蔽，只有管理员或有管理权限的成员可见</em></div>
                        <?php } elseif($post['status'] & 1) { ?>
                            <div class="grey quote">提示: <em>该帖被管理员或版主屏蔽，只有管理员或有管理权限的成员可见</em></div>
                        <?php } ?>
                        <?php if($_G['forum_thread']['price'] > 0 && $_G['forum_thread']['special'] == 0) { ?>
                            付费主题, 价格: <strong><?php echo $_G['forum_thread']['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?> </strong> <a href="forum.php?mod=misc&amp;action=viewpayments&amp;tid=<?php echo $_G['tid'];?>" >记录</a>
                        <?php } ?>

                        <?php if($post['first'] && $threadsort && $threadsortshow && $ceo_sortopen) { ?>
                            <?php include template('forum/viewthread_viewsort'); ?>                        <?php } ?>
                        <?php if($post['first']) { ?>
                            <?php if(!$_G['forum_thread']['special']) { ?>
                                <?php echo $post['message'];?>
                            <?php } elseif($_G['forum_thread']['special'] == 1) { ?>
                                <?php include template('forum/viewthread_poll'); ?>                            <?php } elseif($_G['forum_thread']['special'] == 2) { ?>
                                <?php include template('forum/viewthread_trade'); ?>                            <?php } elseif($_G['forum_thread']['special'] == 3) { ?>
                                <?php include template('forum/viewthread_reward'); ?>                            <?php } elseif($_G['forum_thread']['special'] == 4) { ?>
                                <?php include template('forum/viewthread_activity'); ?>                            <?php } elseif($_G['forum_thread']['special'] == 5) { ?>
                                <?php include template('forum/viewthread_debate'); ?>                            <?php } elseif($threadplughtml) { ?>
                                <?php echo $threadplughtml;?>
                                <?php echo $post['message'];?>
                            <?php } else { ?>
                            	<?php echo $post['message'];?>
                            <?php } ?>
                        <?php } else { ?>
                            <?php echo $post['message'];?>
                        <?php } ?>                       

<?php } ?>
</div>
<?php if($_G['setting']['mobile']['mobilesimpletype'] == 0) { if($post['attachment']) { ?>
               <div class="grey quote">
               附件: <em><?php if($_G['uid']) { ?>您所在的用户组无法下载或查看附件<?php } else { ?>您需要<a href="member.php?mod=logging&amp;action=login">登录</a>才可以下载或查看附件。没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="注册帐号"><?php echo $_G['setting']['reglinkname'];?></a><?php } ?></em>
               </div>
            <?php } elseif($post['imagelist'] || $post['attachlist']) { ?>
               <?php if($post['imagelist']) { if(count($post['imagelist']) == 1) { ?>
<ul class="img_list cl vm"><?php echo showattach($post, 1); ?></ul>
<?php } else { ?>
<ul class="img_list cl vm"><?php echo showattach($post, 1); ?></ul>
<?php } } ?>
                <?php if($post['attachlist']) { ?>
<ul><?php echo showattach($post); ?></ul>
<?php } } } if($_G['uid'] && $allowpostreply && !$post['first']) { ?>
<div id="replybtn_<?php echo $post['pid'];?>" class="replybtn" display="true" style="display:none;position:absolute;right:0px;top:5px;">
<input type="button" class="redirect button" href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;repquote=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" value="回复">
</div>
<?php } ?>       
        <?php if($post['first'] && ($post['tags'] || $relatedkeywords) && $_GET['from'] != 'preview') { ?>
        <div class="tags mbm"> 
          <?php if($post['tags']) { ?> 
          <?php $tagi = 0;?> 
          <?php if(is_array($post['tags'])) foreach($post['tags'] as $var) { ?> 
          <?php if($tagi) { ?>, <?php } ?><a title="<?php echo $var['1'];?>" href="misc.php?mod=tag&amp;id=<?php echo $var['0'];?>" target="_blank"><?php echo $var['1'];?></a> 
          <?php $tagi++;?> 
          <?php } ?> 
          <?php } ?> 
        </div>
        <?php } ?> 
        <?php if($post['relateitem'] && $post['first']) { ?>
<div class="relateitem mbn br3">
    <h3>相关帖子:</h3>
    <ul>
        <?php $rel = 0;?> 
        <?php if(is_array($post['relateitem'])) foreach($post['relateitem'] as $var) { ?> 
        <?php if($rel < $ceo_relateitems) { ?>
        <li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $var['tid'];?>"><?php echo cutstr(strip_tags($var['subject']),40); ?></a></li>
        <?php } ?> 
        <?php $rel++;?> 
        <?php } ?>
    </ul>
</div>
<?php } ?> 
        <?php if($post['first']) { ?><?php echo $ceo_mshare;?><div class="ceo_ad"><?php echo $ceo_viewthread_ad;?></div><?php } ?> 
        </div>
       
   </div>
   <?php if($post['first']) { ?>
    <div class="titls brtb f14">
    <?php if($_G['page'] > 1) { ?>
    <a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>" class="xi2">&laquo;<?php echo m_lang('tthread'); ?></a>
    <?php } else { if($ordertype != 1) { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=1" class="xi2">倒序浏览</a>
<?php } else { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=2" class="xi2">正序浏览</a>
<?php } ?> 
    <?php } ?>   
    <span class="y"><?php echo m_lang('tt'); ?><?php echo $_G['forum_thread']['replies'];?><?php echo m_lang('od'); ?>回复</span>
    </div>
    <?php } ?>
   <?php if(!empty($_G['setting']['pluginhooks']['viewthread_postbottom_mobile'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postbottom_mobile'][$postcount];?>
   <?php $postcount++;?>   <?php } ?>
  <div id="post_new"></div>
 
   </div>   
<?php if($_G['forum']['ismoderator']) { if($multipage) { ?><div class="pgbox"><?php echo $multipage;?></div><?php } } else { if($ceo_norepages == 1) { ?>    
<?php if($_G['forum_thread']['replies'] > $_G['ppp']) { ?>
<div id="ajaxshow"></div> 
<div id="post_ajax"><div id="post_new"></div></div> 
<div class="a_pg" id="a_pg"> 
<div id="ajaxld"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/load.gif" /> <?php echo m_lang('load_pic'); ?></div>
<div id="ajnt"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;ordertype=<?php if($ordertype != 1) { ?>2<?php } else { ?>1<?php } ?>&amp;threads=thread" onclick="return ajaxpage(this.href, first1, last1, first2, last2);"><?php echo m_lang('load'); ?></a></div>
</div> 
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/ajaxpage.js?<?php echo VERHASH;?>" type="text/javascript" type="text/javascript"></script>        
<script type="text/javascript">
var pages=<?php echo $_G['page'];?>;
var allpage=<?php echo $thispage = ceil($_G['forum_thread']['replies'] / $_G['ppp']);; ?>;
var first1 = "<div id=\"alist\"";
var last1 = "<div id=\"ajaxshow\"></div>";
var first2 = ">";
var last2 = "</div>";
</script>
<?php } } else { if($multipage) { ?><div class="pgbox"><?php echo $multipage;?></div><?php } } } ?><div class="plc cl">
<form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;replysubmit=yes&amp;mobile=2">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
 
<div class="pi" style="margin-left:10px;">
<ul class="fastpost">
<?php if($_G['forum_thread']['special'] == 5 && empty($firststand)) { ?>
<li>
<select id="stand" name="stand" >
<option value="">选择观点</option>
<option value="0">中立</option>
<option value="1">正方</option>
<option value="2">反方</option>
</select>
</li>
<?php } ?>
<li<?php if($secqaacheck || $seccodecheck) { ?> class="mbm" <?php } ?> style="margin-right:14px;"><input type="text" value="我也说一句" class="input grey" color="gray" name="message" id="fastpostmessage"></li>
<li id="fastpostsubmitline" style="display:none;"><?php if($secqaacheck || $seccodecheck) { $sechash = 'S'.random(4);
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');	
$ran = random(5, 1);?><?php if($secqaacheck) { $message = '';
$question = make_secqaa();
$secqaa = lang('core', 'secqaa_tips').$question;?><?php } if($sectpl) { if($secqaacheck) { ?>
<p class="mbm">        
        <span class="xg2"><?php echo $secqaa;?></span><br />
<input name="secqaahash" type="hidden" value="<?php echo $sechash;?>" />
        <input name="secanswer" id="secqaaverify_<?php echo $sechash;?>" type="text" class="txt" />
        </p>
<?php } if($seccodecheck) { ?>
<div class="sec_code vm mbm">
<input name="seccodehash" type="hidden" value="<?php echo $sechash;?>" />
<input type="text" class="txt px vm" style="ime-mode:disabled;width:60px;background:white;" autocomplete="off" value="" id="seccodeverify_<?php echo $sechash;?>" name="seccodeverify" placeholder="验证码" fwin="seccode">
        <img src="misc.php?mod=seccode&amp;update=<?php echo $ran;?>&amp;idhash=<?php echo $sechash;?>&amp;mobile=2" class="seccodeimg"/>
</div>
<?php } } ?>
<script type="text/javascript">
(function() {
$('.seccodeimg').on('click', function() {
$('#seccodeverify_<?php echo $sechash;?>').attr('value', '');
var tmprandom = 'S' + Math.floor(Math.random() * 1000);
$('.sechash').attr('value', tmprandom);
$(this).attr('src', 'misc.php?mod=seccode&update=<?php echo $ran;?>&idhash='+ tmprandom +'&mobile=2');
});
})();
</script>
<?php } ?><input type="button" value="回复" class="button2" name="replysubmit" id="fastpostsubmit"><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;reppost=<?php echo $_G['forum_firstpid'];?>&amp;page=<?php echo $page;?>" class="y" style="height:22px;width:24px;margin-top:15px;background:url(template/yingxiao_toutiao2_m/toutiao_mobile/img/icon_photo.png) no-repeat; background-size:auto 20px;"><span class="none">回复</span></a><?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_button_mobile'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_button_mobile'];?></li>
</ul>
</div>
    </form>
</div>
<script type="text/javascript">
(function() {
var form = $('#fastpostform');
<?php if(!$_G['uid'] || $_G['uid'] && !$allowpostreply) { ?>
$('#fastpostmessage').on('focus', function() {
<?php if(!$_G['uid']) { ?>
popup.open('您还未登录，立即登录?', 'confirm', 'member.php?mod=logging&action=login');
<?php } else { ?>
popup.open('您暂时没有权限发表', 'alert');
<?php } ?>
this.blur();
});
<?php } else { ?>
$('#fastpostmessage').on('focus', function() {
var obj = $(this);
if(obj.attr('color') == 'gray') {
obj.attr('value', '');
obj.removeClass('grey');
obj.attr('color', 'black');
$('#fastpostsubmitline').css('display', 'block');
}
})
.on('blur', function() {
var obj = $(this);
if(obj.attr('value') == '') {
obj.addClass('grey');
obj.attr('value', '我也说一句');
obj.attr('color', 'gray');
}
});
<?php } ?>
$('#fastpostsubmit').on('click', function() {
var msgobj = $('#fastpostmessage');
if(msgobj.val() == '我也说一句') {
msgobj.attr('value', '');
}
$.ajax({
type:'POST',
url:form.attr('action') + '&handlekey=fastpost&loc=1&inajax=1',
data:form.serialize(),
dataType:'xml'
})
.success(function(s) {
evalscript(s.lastChild.firstChild.nodeValue);
})
.error(function() {
window.location.href = obj.attr('href');
popup.close();
});
return false;
});

$('#replyid').on('click', function() {
$(document).scrollTop($(document).height());
$('#fastpostmessage')[0].focus();
});

})();

function succeedhandle_fastpost(locationhref, message, param) {
var pid = param['pid'];
var tid = param['tid'];
if(pid) {
$.ajax({
type:'POST',
url:'forum.php?mod=viewthread&tid=' + tid + '&viewpid=' + pid + '&mobile=2',
dataType:'xml'
})
.success(function(s) {
$('#post_new').append(s.lastChild.firstChild.nodeValue);
})
.error(function() {
window.location.href = 'forum.php?mod=viewthread&tid=' + tid;
popup.close();
});
} else {
if(!message) {
message = '本版回帖需要审核，您的帖子将在通过审核后显示';
}
popup.open(message, 'alert');
}
$('#fastpostmessage').attr('value', '');
if(param['sechash']) {
$('.seccodeimg').click();
}
}

function errorhandle_fastpost(message, param) {
popup.open(message, 'alert');
}
</script>
</div>
<!-- main postlist end -->

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_bottom_mobile'])) echo $_G['setting']['pluginhooks']['viewthread_bottom_mobile'];?>

<script type="text/javascript">
$('.favbtn').on('click', function() {
var obj = $(this);
$.ajax({
type:'POST',
url:obj.attr('href') + '&handlekey=favbtn&inajax=1',
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

<a href="javascript:;" title="返回顶部" class="scrolltop bottom"></a><?php include template('common/footer'); ?>