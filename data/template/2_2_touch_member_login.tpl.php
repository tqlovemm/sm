<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('login');
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/member/login.htm', './template/yingxiao_toutiao2_m/touch/common/seccheck.htm', 1456889397, '2', './data/template/2_2_touch_member_login.tpl.php', './template/yingxiao_toutiao2_m', 'touch/member/login')
;?><?php include template('common/header'); ?><?php echo $color_login;?><?php $loginhash = 'L'.random(4);?><div class="bm_c">
<!-- userinfo start -->
<div class="logo_in"><a href="javascript:;" onclick="history.go(-1)"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/login_logo.png"/></a></div>
<div class="loginbox yy <?php if($_GET['infloat']) { ?>login_pop<?php } ?>">
<?php if($_GET['infloat']) { ?>
<h2 class="log_tit"><a href="javascript:;" onclick="popup.close();"><span class="icon_close y">&nbsp;</span></a>登录</h2>
<?php } ?>
<form id="loginform" method="post" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;loginhash=<?php echo $loginhash;?>&amp;mobile=2" onsubmit="<?php if($_G['setting']['pwdsafety']) { ?>pwmd5('password3_<?php echo $loginhash;?>');<?php } ?>" >
<input type="hidden" name="formhash" id="formhash" value='<?php echo FORMHASH;?>' />
<input type="hidden" name="referer" id="referer" value="<?php if(dreferer()) { echo dreferer(); } else { ?>forum.php?mobile=2<?php } ?>" />
<input type="hidden" name="fastloginfield" value="username">
<input type="hidden" name="cookietime" value="2592000">
<?php if($auth) { ?>
<input type="hidden" name="auth" value="<?php echo $auth;?>" />
<?php } ?>
<div class="login_from">
<ul>
<li><input type="text" value="" tabindex="1" class="p_fre" size="30" autocomplete="off" value="" name="username" placeholder="请输入用户名" fwin="login"></li>
<li><input type="password" tabindex="2" class="p_fre" size="30" value="" name="password" placeholder="密码" fwin="login"></li>
<li class="bl_none questionli mtn mbn" style="height:34px;">
<div class="login_select">
<span class="login-btn-inner">
<span class="login_btn_text">
<span class="span_question">安全提问(未设置请忽略)</span>
</span>
<span class="icon-arrow">&nbsp;</span>
</span>
<select id="questionid_<?php echo $loginhash;?>" name="questionid" class="sel_list">
<option value="0" selected="selected">安全提问(未设置请忽略)</option>
<option value="1">母亲的名字</option>
<option value="2">爷爷的名字</option>
<option value="3">父亲出生的城市</option>
<option value="4">您其中一位老师的名字</option>
<option value="5">您个人计算机的型号</option>
<option value="6">您最喜欢的餐馆名称</option>
<option value="7">驾驶执照最后四位数字</option>
</select>
</div>
</li>
<li class="bl_none answerli" style="display:none;"><input type="text" name="answer" id="answer_<?php echo $loginhash;?>" class="p_fre" size="30" placeholder="答案"></li>
</ul>
<?php if($seccodecheck) { ?>
<div class="b_m"><?php $sechash = 'S'.random(4);
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
</div>
<?php } ?>
</div>
<div class="btn_login"><button tabindex="3" value="true" name="submit" type="submit" class="formdialog pn pnc"><span>登录</span></button></div>
</form>
<?php if($_G['setting']['connect']['allow'] && !$_G['setting']['bbclosed']) { ?>
    <div class="btn_qq_login"><a href="<?php echo $_G['connect']['login_url'];?>&statfrom=login_simple">使用QQ帐号登录</a></div>
    <?php } ?>
<p class="reg_link"><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>">还没有注册？ <span class="xi2">注册</span></a></p>
<?php if(!empty($_G['setting']['pluginhooks']['logging_bottom_mobile'])) echo $_G['setting']['pluginhooks']['logging_bottom_mobile'];?>
</div>
<!-- userinfo end -->
</div>

<?php if($_G['setting']['pwdsafety']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>md5.js?<?php echo VERHASH;?>" type="text/javascript" reload="1"></script>
<?php } updatesession();?><script type="text/javascript">
(function() {
$(document).on('change', '.sel_list', function() {
var obj = $(this);
$('.span_question').text(obj.find('option:selected').text());
if(obj.val() == 0) {
$('.answerli').css('display', 'none');
$('.questionli').addClass('bl_none');
} else {
$('.answerli').css('display', 'block');
$('.questionli').removeClass('bl_none');
}
});
formdialog.init();
 })();
</script><?php $nofooter = true;?><?php include template('common/footer'); ?>