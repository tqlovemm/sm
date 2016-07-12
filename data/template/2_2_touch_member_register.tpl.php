<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('register');
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/member/register.htm', './template/yingxiao_toutiao2_m/touch/common/ceo_color.htm', 1458615516, '2', './data/template/2_2_touch_member_register.tpl.php', './template/yingxiao_toutiao2_m', 'touch/member/register')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/member/register.htm', './template/yingxiao_toutiao2_m/touch/common/seccheck.htm', 1458615516, '2', './data/template/2_2_touch_member_register.tpl.php', './template/yingxiao_toutiao2_m', 'touch/member/register')
;?><?php include template('common/header'); ?><?php
$color_main = <<<EOF


EOF;
 if($ceo_mobilecolor == 2) { 
$color_main .= <<<EOF

<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/main/t2.css" type="text/css" media="all">

EOF;
 } elseif($ceo_mobilecolor == 3) { 
$color_main .= <<<EOF

<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/main/t3.css" type="text/css" media="all">

EOF;
 } elseif($ceo_mobilecolor == 4) { 
$color_main .= <<<EOF

<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/main/t4.css" type="text/css" media="all">

EOF;
 } elseif($ceo_mobilecolor == 5) { 
$color_main .= <<<EOF

<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/main/t5.css" type="text/css" media="all">

EOF;
 } elseif($ceo_mobilecolor == 6) { 
$color_main .= <<<EOF

<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/main/t6.css" type="text/css" media="all">

EOF;
 } else { 
$color_main .= <<<EOF

<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/main/t1.css" type="text/css" media="all">

EOF;
 } if($php_self == 'home.php') { } 
$color_main .= <<<EOF


EOF;
?><?php
$color_login = <<<EOF

<style type="text/css"> 

header { display:none; }
.bg, #wp, .content { background: #d8323d;} 
.bm_c { background: none; overflow:hidden; }
.logo_in img { width:340px; }
.logo_in a { text-align:center;}
.loginbox { background: rgba(255, 255, 255, 0.6); }
.reg_link a {color: #fff;}
</style>

EOF;
?>

<?php echo $color_login;?>
<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/colortest.css" type="text/css" media="all">
<div class="bm_c">
<!-- registerbox start -->
<div class="logo_in"><a href="javascript:;" onclick="history.go(-1)"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/touch-logo.png"/></a></div>
<div class="loginbox registerbox">
<div class="login_from">
<form method="post" autocomplete="off" name="register" id="registerform" action="member.php?mod=<?php echo $_G['setting']['regname'];?>&amp;mobile=2">
<input type="hidden" name="regsubmit" value="yes" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" /><?php $dreferer = str_replace('&amp;', '&', dreferer());?><input type="hidden" name="referer" value="<?php echo $dreferer;?>" />
<input type="hidden" name="activationauth" value="<?php if($_GET['action'] == 'activation') { ?><?php echo $activationauth;?><?php } ?>" />
<input type="hidden" name="agreebbrule" value="<?php echo $bbrulehash;?>" id="agreebbrule" checked="checked" />
<ul>
<li><input type="text" tabindex="1" class="p_fre" size="30" autocomplete="off" value="" name="<?php echo $_G['setting']['reginput']['username'];?>" placeholder="用户名：3-15位" fwin="login"></li>
<li><input type="password" tabindex="2" class="p_fre" size="30" value="" name="<?php echo $_G['setting']['reginput']['password'];?>" placeholder="密码" fwin="login"></li>
<li><input type="password" tabindex="3" class="p_fre" size="30" value="" name="<?php echo $_G['setting']['reginput']['password2'];?>" placeholder="确认密码" fwin="login"></li>
<li class="bl_none"><input type="email" tabindex="4" class="p_fre" size="30" autocomplete="off" value="" name="<?php echo $_G['setting']['reginput']['email'];?>" placeholder="邮箱" fwin="login"></li>
<?php if(empty($invite) && ($_G['setting']['regstatus'] == 2 || $_G['setting']['regstatus'] == 3)) { ?>
<li><input type="text" name="invitecode" autocomplete="off" tabindex="5" class="p_fre" size="30" value="邀请码" placeholder="邀请码" fwin="login"></li>
<?php } if($_G['setting']['regverify'] == 2) { ?>
<li><input type="text" name="regmessage" autocomplete="off" tabindex="6" class="p_fre" size="30" value="注册原因" placeholder="注册原因" fwin="login"></li>
<?php } ?>
</ul>
<?php if($secqaacheck || $seccodecheck) { ?>
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
<div class="btn_register"><button tabindex="7" value="true" name="regsubmit" type="submit" class="formdialog pn pnc"><span>立即注册</span></button></div>
</form>
</div>
<!-- registerbox end -->
</div><?php updatesession();?><?php $nofooter = true;?><?php include template('common/footer'); ?>