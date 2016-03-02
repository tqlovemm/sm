<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('post');
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/forum/post.htm', './template/yingxiao_toutiao2_m/touch/common/seccheck.htm', 1456881771, '2', './data/template/2_2_touch_forum_post.tpl.php', './template/yingxiao_toutiao2_m', 'touch/forum/post')
;?><?php include template('common/header'); if($special != 2 && $special != 4 && !($isfirstpost && $sortid)) { $adveditor = $isfirstpost && $special && ($_GET['action'] == 'newthread' || $_GET['action'] == 'reply' && !empty($_GET['addtrade']) || $_GET['action'] == 'edit' );?><?php
$actiontitle = <<<EOF


EOF;
 if($_GET['action'] == 'newthread') { if($special == 0) { 
$actiontitle .= <<<EOF
发表帖子

EOF;
 } elseif($special == 1) { 
$actiontitle .= <<<EOF
发投票

EOF;
 } elseif($special == 2) { 
$actiontitle .= <<<EOF
出售商品

EOF;
 } elseif($special == 3) { 
$actiontitle .= <<<EOF
发悬赏

EOF;
 } elseif($special == 4) { 
$actiontitle .= <<<EOF
发起活动

EOF;
 } elseif($special == 5) { 
$actiontitle .= <<<EOF
发辩论

EOF;
 } elseif($specialextra) { 
$actiontitle .= <<<EOF
{$_G['setting']['threadplugins'][$specialextra]['name']}

EOF;
 } } elseif($_GET['action'] == 'reply') { 
$actiontitle .= <<<EOF

回复

EOF;
 } elseif($_GET['action'] == 'edit') { if($special == 2) { 
$actiontitle .= <<<EOF
编辑商品
EOF;
 } else { 
$actiontitle .= <<<EOF
编辑帖子
EOF;
 } } 
$actiontitle .= <<<EOF


EOF;
?>

<?php if($_G['forum']['type'] == 'forum') { ?>
<div class="pt">
<a href="forum.php?forumlist=1"><?php echo m_lang('forum'); ?></a>
<em> &gt; </em> <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['forum']['fid'];?>"><?php echo $_G['forum']['name'];?></a> <em> &gt; </em> <?php echo $actiontitle;?>
</div>
<?php } else { ?>
<div class="pt">
<a href="forum.php?forumlist=1"><?php echo m_lang('forum'); ?></a>
<em> &gt; </em> <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>"><?php echo $_G['forum']['name'];?></a> <em> &gt; </em> <?php echo $actiontitle;?>
</div>
<?php } if($_GET['action'] == 'newthread') { ?>
<div class="mmt nth mbm">
<?php if(!$_G['forum']['allowspecialonly']) { ?><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>" <?php if(($_GET['sortid'] || !$special) && $_GET['action'] != 'edit' && $_GET['action'] != 'reply') { ?>class="a"<?php } ?>>发帖</a><?php } if($_G['group']['allowpostpoll']) { ?><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1" <?php if(!$_GET['sortid'] && $special == 1) { ?>class="a"<?php } ?>>发投票</a><?php } if($_G['group']['allowpostreward']) { ?><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3" <?php if(!$_GET['sortid'] && $special == 3) { ?>class="a"<?php } ?>>发悬赏</a><?php } if($_G['group']['allowpostdebate']) { ?><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5" <?php if(!$_GET['sortid'] && $special == 5) { ?>class="a"<?php } ?>>发辩论</a><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>" <?php if($specialextra==$tpid) { ?>class="a"<?php } ?>><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a>
<?php } } } ?>
</div>
<?php } ?>

<div class="wp bm_c">
<form method="post" name="postform" id="postform" 
<?php if($_GET['action'] == 'newthread') { ?>action="forum.php?mod=post&amp;action=<?php if($special != 2) { ?>newthread<?php } else { ?>newtrade<?php } ?>&amp;fid=<?php echo $_G['fid'];?>&amp;extra=<?php echo $extra;?>&amp;topicsubmit=yes&amp;mobile=2"
<?php } elseif($_GET['action'] == 'reply') { ?>action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $extra;?>&amp;replysubmit=yes&amp;mobile=2"
<?php } elseif($_GET['action'] == 'edit') { ?>action="forum.php?mod=post&amp;action=edit&amp;extra=<?php echo $extra;?>&amp;editsubmit=yes&amp;mobile=2" <?php echo $enctype;?>
<?php } ?>>
<input type="hidden" name="formhash" id="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="posttime" id="posttime" value="<?php echo TIMESTAMP;?>" />
<?php if(!empty($_GET['modthreadkey'])) { ?><input type="hidden" name="modthreadkey" id="modthreadkey" value="<?php echo $_GET['modthreadkey'];?>" /><?php } if($_GET['action'] == 'reply') { ?>
<input type="hidden" name="noticeauthor" value="<?php echo $noticeauthor;?>" />
<input type="hidden" name="noticetrimstr" value="<?php echo $noticetrimstr;?>" />
<input type="hidden" name="noticeauthormsg" value="<?php echo $noticeauthormsg;?>" />
<?php if($reppid) { ?>
<input type="hidden" name="reppid" value="<?php echo $reppid;?>" />
<?php } if($_GET['reppost']) { ?>
<input type="hidden" name="reppost" value="<?php echo $_GET['reppost'];?>" />
<?php } elseif($_GET['repquote']) { ?>
<input type="hidden" name="reppost" value="<?php echo $_GET['repquote'];?>" />
<?php } } if($_GET['action'] == 'edit') { ?>
<input type="hidden" name="fid" id="fid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="tid" value="<?php echo $_G['tid'];?>" />
<input type="hidden" name="pid" value="<?php echo $pid;?>" />
<input type="hidden" name="page" value="<?php echo $_GET['page'];?>" />
<?php } if($special) { ?>
<input type="hidden" name="special" value="<?php echo $special;?>" />
<?php } if($specialextra) { ?>
<input type="hidden" name="specialextra" value="<?php echo $specialextra;?>" />
<?php } ?>
<!-- main postbox start -->

<div class="post_from">
    
    <?php if($adveditor) { ?>    
        <?php if($special == 1) { include template('forum/post_poll'); ?>        <?php } elseif($special == 3) { include template('forum/post_reward'); ?>        <?php } elseif($special == 5) { include template('forum/post_debate'); ?>        <?php } elseif($specialextra) { ?><div><?php echo $threadplughtml;?></div>
        <?php } ?>       
    <?php } ?>
    
<ul class="cl">
<?php if($isfirstpost && !empty($_G['forum']['threadtypes']['types'])) { ?>
<li class="mbn">
<select id="typeid" name="typeid" class="sort_sel" style="width:180px;">
<option value="0" selected="selected">选择主题分类</option><?php if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $typeid => $name) { if(empty($_G['forum']['threadtypes']['moderators'][$typeid]) || $_G['forum']['ismoderator']) { ?>
<option value="<?php echo $typeid;?>"<?php if($thread['typeid'] == $typeid || $_GET['typeid'] == $typeid) { ?> selected="selected"<?php } ?>><?php echo strip_tags($name);; ?></option>
<?php } } ?>
</select>
</li>
<?php } ?>
            
<li class="mbm">
<?php if($_GET['action'] != 'reply') { ?>
<input type="text" tabindex="1" class="px" id="needsubject" size="30" autocomplete="off" value="<?php echo $postinfo['subject'];?>" name="subject" placeholder="标题" fwin="login">
<?php } else { ?>
RE: <?php echo $thread['subject'];?>
<?php if($quotemessage) { ?><?php echo $quotemessage;?><?php } } ?>
</li>
            <li class="post_plus mbm">             
<a href="javascript:;" class="post_photo z"><input type="file" name="Filedata" id="filedata"/></a>
            <?php if($_G['setting']['fastsmilies']) { ?>
            <a class="smilie_open z" onclick="$(this).hide(); $('#fastsmiliesdiv_data').fadeIn();"></a>
            <div id="fastsmiliesdiv_data" style="display:none;"><div id="fastsmilies"></div></div>
            <?php } ?>
            </li>
            
<?php if($_GET['action'] == 'edit' && $isorigauthor && ($isfirstpost && $thread['replies'] < 1 || !$isfirstpost) && !$rushreply && $_G['setting']['editperdel']) { ?>
<li>
<input type="checkbox" name="delete" id="delete" class="pc" value="1" title="删除本帖<?php if($thread['special'] == 3) { ?>，返还悬赏费用，不退还手续费<?php } ?>"> 删?
</li>
<?php } ?>
<li class="area mbn">
<textarea class="pt" id="needmessage" tabindex="3" autocomplete="off" id="<?php echo $editorid;?>_textarea" name="<?php echo $editor['textarea'];?>" cols="80" rows="4"  placeholder="内容" fwin="reply" ><?php echo $postinfo['message'];?></textarea>
</li>

</ul>
<ul id="imglist" class="post_imglist cl">
</ul>
<?php if($_GET['action'] != 'edit' && ($secqaacheck || $seccodecheck)) { $sechash = 'S'.random(4);
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
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_bottom_mobile'])) echo $_G['setting']['pluginhooks']['post_bottom_mobile'];?>
</div>

<button id="postsubmit" class="btn_pn br3 btn_pn_post <?php if($_GET['action'] == 'edit') { ?>btn_pn_blue" disable="false"<?php } else { ?>btn_pn_grey" disable="true"<?php } ?>><span><?php if($_GET['action'] == 'newthread') { ?>发表<?php } elseif($_GET['action'] == 'reply') { ?>回复<?php } elseif($_GET['action'] == 'edit') { ?>保存<?php } ?></span></button>
<input type="hidden" name="<?php if($_GET['action'] == 'newthread') { ?>topicsubmit<?php } elseif($_GET['action'] == 'reply') { ?>replysubmit<?php } elseif($_GET['action'] == 'edit') { ?>editsubmit<?php } ?>" value="yes">

<!-- main postbox start -->
</form>
<?php } else { ?>
<div class="box xg1">
<?php if($special == '2') { ?>
手机版不支持<strong>商品</strong>发布，请点击上方发帖选择其他方式
    <?php } elseif($special == '4') { ?>
手机版不支持<strong>活动</strong>发布，请点击上方发帖选择其他方式
<?php } elseif($isfirstpost && $sortid) { ?>
发布分类信息请使用电脑版
    <?php } ?>
    </div>
<?php } ?>

</div>
<?php if($_G['setting']['fastsmilies']) { ?>
<script src="data/cache/common_smilies_var.js?eAa" type="text/javascript" type="text/javascript"></script>
<script type="text/javascript">
function seditor_insertunit(key, smilies) {
 textarea = document.postform.message;
 textarea.value += smilies;
 textarea.focus();
}
var j = 1, smilies_fastdata = '',  img, seditorkey = "fastpost";
for(i = 0;i < smilies_fast.length; i++) {
if(j == 0) {
smilies_fastdata += '<tr>';
}
j = ++j > 10 ? 0 : j;
s = smilies_array[smilies_fast[i][0]][smilies_fast[i][1]][smilies_fast[i][2]];
smilieimg = "static/" + 'image/smiley/' + smilies_type['_' + smilies_fast[i][0]][1] + '/' + s[2];
smilies_fastdata += s ? '<td onclick="' + (typeof wysiwyg != 'undefined' ? 'insertSmiley(' + s[0] + ')': 'seditor_insertunit(\'' + seditorkey + '\', \'' + s[1].replace(/'/, '\\\'') + '\')') +
'" ><img src="' + smilieimg + '" />' : '<td>';
}
</script>
<?php } ?>

<script type="text/javascript">
(function() {
var needsubject = needmessage = false;

<?php if($_GET['action'] == 'reply') { ?>
needsubject = true;
<?php } elseif($_GET['action'] == 'edit') { ?>
needsubject = needmessage = true;
<?php } if($_GET['action'] == 'newthread' || ($_GET['action'] == 'edit' && $isfirstpost)) { ?>
$('#needsubject').on('keyup input', function() {
var obj = $(this);
if(obj.val()) {
needsubject = true;
if(needmessage == true) {
$('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
$('.btn_pn').attr('disable', 'false');
}
} else {
needsubject = false;
$('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
$('.btn_pn').attr('disable', 'true');
}
});
<?php } ?>
$('#needmessage').on('keyup input', function() {
var obj = $(this);
if(obj.val()) {
needmessage = true;
if(needsubject == true) {
$('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
$('.btn_pn').attr('disable', 'false');
}
} else {
needmessage = false;
$('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
$('.btn_pn').attr('disable', 'true');
}
});

$('#needmessage').on('scroll', function() {
var obj = $(this);
if(obj.scrollTop() > 0) {
obj.attr('rows', parseInt(obj.attr('rows'))+2);
}
}).scrollTop($(document).height());
 })();
</script>
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/ajaxfileupload.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/buildfileupload.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var imgexts = typeof imgexts == 'undefined' ? 'jpg, jpeg, gif, png' : imgexts;
var STATUSMSG = {
'-1' : '内部服务器错误',
'0' : '上传成功',
'1' : '不支持此类扩展名',
'2' : '服务器限制无法上传那么大的附件',
'3' : '用户组限制无法上传那么大的附件',
'4' : '不支持此类扩展名',
'5' : '文件类型限制无法上传那么大的附件',
'6' : '今日您已无法上传更多的附件',
'7' : '请选择图片文件(' + imgexts + ')',
'8' : '附件文件无法保存',
'9' : '没有合法的文件被上传',
'10' : '非法操作',
'11' : '今日您已无法上传那么大的附件'
};
var form = $('#postform');
$(document).on('change', '#filedata', function() {
popup.open('<img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/imageloading.gif">');

uploadsuccess = function(data) {
if(data == '') {
popup.open('上传失败，请稍后再试', 'alert');
}
var dataarr = data.split('|');
if(dataarr[0] == 'DISCUZUPLOAD' && dataarr[2] == 0) {
popup.close();
$('#imglist').append('<li><span aid="'+dataarr[3]+'" class="del"><a href="javascript:;"><img src="<?php echo STATICURL;?>image/mobile/images/icon_del.png"></a></span><span class="p_img"><a href="javascript:;"><img style="height:54px;width:54px;" id="aimg_'+dataarr[3]+'" title="'+dataarr[6]+'" src="<?php echo $_G['setting']['attachurl'];?>forum/'+dataarr[5]+'" /></a></span><input type="hidden" name="attachnew['+dataarr[3]+'][description]" /></li>');
} else {
var sizelimit = '';
if(dataarr[7] == 'ban') {
sizelimit = '(附件类型被禁止)';
} else if(dataarr[7] == 'perday') {
sizelimit = '(不能超过'+Math.ceil(dataarr[8]/1024)+'K)';
} else if(dataarr[7] > 0) {
sizelimit = '(不能超过'+Math.ceil(dataarr[7]/1024)+'K)';
}
popup.open(STATUSMSG[dataarr[2]] + sizelimit, 'alert');
}
};

if(typeof FileReader != 'undefined' && this.files[0]) {//note ֧��html5�ϴ�������

$.buildfileupload({
uploadurl:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
files:this.files,
uploadformdata:{uid:"<?php echo $_G['uid'];?>", hash:"<?php echo md5(substr(md5($_G[config][security][authkey]), 8).$_G[uid])?>"},
uploadinputname:'Filedata',
maxfilesize:"<?php echo $swfconfig['max'];?>",
success:uploadsuccess,
error:function() {
popup.open('上传失败，请稍后再试', 'alert');
}
});

} else {

$.ajaxfileupload({
url:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
data:{uid:"<?php echo $_G['uid'];?>", hash:"<?php echo md5(substr(md5($_G[config][security][authkey]), 8).$_G[uid])?>"},
dataType:'text',
fileElementId:'filedata',
success:uploadsuccess,
error: function() {
popup.open('上传失败，请稍后再试', 'alert');
}
});

}
});

<?php if(0 && $_G['setting']['mobile']['geoposition']) { ?>
geo.getcurrentposition();
<?php } ?>
$('#postsubmit').on('click', function() {
var obj = $(this);
if(obj.attr('disable') == 'true') {
return false;
}

obj.attr('disable', 'true').removeClass('btn_pn_blue').addClass('btn_pn_grey');
popup.open('<img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/imageloading.gif">');

var postlocation = '';
if(geo.errmsg === '' && geo.loc) {
postlocation = geo.longitude + '|' + geo.latitude + '|' + geo.loc;
}

$.ajax({
type:'POST',
url:form.attr('action') + '&geoloc=' + postlocation + '&handlekey='+form.attr('id')+'&inajax=1',
data:form.serialize(),
dataType:'xml'
})
.success(function(s) {
popup.open(s.lastChild.firstChild.nodeValue);
})
.error(function() {
popup.open('网络出现问题，请稍后再试', 'alert');
});
return false;
});

$(document).on('click', '.del', function() {
var obj = $(this);
$.ajax({
type:'GET',
url:'forum.php?mod=ajax&action=deleteattach&inajax=yes&aids[]=' + obj.attr('aid'),
})
.success(function(s) {
obj.parent().remove();
})
.error(function() {
popup.open('网络出现问题，请稍后再试', 'alert');
});
return false;
});

</script><?php include template('common/footer'); ?>