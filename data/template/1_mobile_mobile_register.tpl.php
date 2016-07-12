<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html>
<head>
<meta charset="<?php echo CHARSET;?>" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="MobileOptimized" content="320" />
<style>
body { background:#f7f7f7; font-size: 100%; }
UL, LI{ list-style:none; padding:0; margin:0; }
.xg1 { color: #999999; }
.xs8 { font-size: 80%; }
.cl:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; } .cl { zoom: 1; }
.y { float: right; }
.txt, .px{ background: #FFF; border: 1px #efefef solid; width: 60%; padding:5px; }
.reg_c  UL { margin-bottom: 10px; }
.reg_c  UL LI { padding:8px; border: 1px #bababa solid; border-bottom:none;  background: #FFFFFF;}
.reg_c  UL LI strong{ width: 90px; display:inline-block; }
.reg_c  UL LI:first-child{ border: 1px #bababa solid; border-bottom: none; -webkit-border-top-left-radius: 8px; -webkit-border-top-right-radius: 8px;}
.reg_c  UL LI:last-child{ border: 1px #bababa solid; -webkit-border-bottom-left-radius: 8px; -webkit-border-bottom-right-radius: 8px;}
.secstyle { margin-top: 4px; }
.submitbox{ text-align:center; }
#registerformsubmit { font-size:100%; padding: 10px 20px; border: 1px #595959 solid; background: -webkit-gradient(linear, 0 0, 0 100%, from(#f3f3f3), to(#dfdfdf)); -webkit-border-top-left-radius: 8px; -webkit-border-top-right-radius: 8px;-webkit-border-bottom-left-radius: 8px; -webkit-border-bottom-right-radius: 8px; }
.tb {border-bottom:1px solid #CDCDCD;line-height:30px;padding-top:10px;float:left;width:100%;background:#f7f7f7;}
.tb li {float:left;margin:0 3px -1px 0;}
.tb li:first-child{margin-left:5px;}
* html .tb .a {position:relative;}
.tb a {background:none repeat scroll 0 0 #E7F0F7;border:1px solid #CDCDCD;display:block;padding:0 10px;text-decoration:none;}
.tb .a a {background:none repeat scroll 0 0 #FFFFFF;border-bottom-color:#FFFFFF;font-weight:700;}
#main2 form{display:none;}
#main2 form.block{display:block;}
</style>
</head>
<body>
<?php if($isconnect) { ?>
<script type="text/javascript">
<!--
function settab(m,n){
var tli=document.getElementById("tb"+m).getElementsByTagName("li");
var mli=document.getElementById("main"+m).getElementsByTagName("form");
for(i=0;i<tli.length;i++){
tli[i].className=i==n?"a":"";
mli[i].style.display=i==n?"block":"none";
}
}
// -->
</script>
<ul id="tb2" class="tb cl">
<li onClick="settab(2,0)" class="a"><a href="#">完善帐号信息</a></li>
<li onClick="settab(2,1)"><a href="#">绑定已有帐号</a></li>
</ul>
<?php } ?>
<div id="main2" class="cl">
<form method="post" class="block" autocomplete="off" enctype="multipart/form-data" action="<?php echo $_G['siteurl'];?>api/mobile/index.php?module=<?php if($_GET['mod'] == 'connect') { ?>connect<?php } else { ?>register&mod=<?php echo $_GET['mod'];?><?php } ?>&version=<?php echo $_G['mobile_version'];?>&mobilemessage=<?php echo $_GET['mobilemessage'];?>">
<input type="hidden" name="regsubmit" value="yes" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
    <input type="hidden" id="auth_hash" name="auth_hash" value="<?php echo $_G['qc']['connect_auth_hash'];?>" />
<input type="hidden" id="is_notify" name="is_notify" value="<?php echo $_G['qc']['connect_is_notify'];?>" />
<input type="hidden" id="is_feed" name="is_feed" value="<?php echo $_G['qc']['connect_is_feed'];?>" />
<?php if($_G['setting']['sendregisterurl']) { ?>
<input type="hidden" name="hash" value="<?php echo $_GET['hash'];?>" />
<?php } ?>
<div class="regbox">
<div class="reg_c">
    <ul>
<?php if($sendurl) { ?>
<li>
<label><strong>Email:</strong></label>
<input type="email" class="txt" name="<?php echo $_G['setting']['reginput']['email'];?>" />
</li>
        <li>
        	注册需要验证邮箱，请务必填写正确的邮箱，提交后请及时查收邮件。
        </li>
<?php } else { if($invite && !$invite['uid']) { ?>
<li>
<label><strong>邀请码:</strong></label>
<input type="text" class="txt" name="invitecode" />
</li>
<?php } if(empty($invite) && $this->setting['regstatus'] == 2 && !$invitestatus) { ?>
<li>
<label><strong>邀请码:</strong></label>
<input type="text" class="txt" name="invitecode" />
</li>
<?php } ?>

<li>
<label><strong>用户名:</strong></label>
<input type="text" class="txt" name="<?php echo $_G['setting']['reginput']['username'];?>" />
</li>

<?php if(!$isconnect) { ?>
<li>
<label><strong>密码:</strong></label>
<input type="password" class="txt" name="<?php echo $_G['setting']['reginput']['password'];?>" />
</li>
<li>
<label><strong>确认密码:</strong></label>
<input type="password" class="txt" name="<?php echo $_G['setting']['reginput']['password2'];?>" />
</li>
<?php } ?>

<li>
<label><strong>Email:</strong></label>
<input type="email" class="txt" name="<?php echo $_G['setting']['reginput']['email'];?>" />
</li>
<?php } if($this->setting['regverify'] == 2) { ?>
<li>
<label><strong>注册原因:</strong></label>
<input type="text" class="txt" name="regmessage" />
</li>
<?php } if(empty($invite) && $this->setting['regstatus'] == 3) { ?>
<li>
<label><strong>邀请码:</strong></label>
<input type="text" class="txt" name="invitecode" />
</li>
<?php } if(is_array($_G['cache']['fields_register'])) foreach($_G['cache']['fields_register'] as $field) { if($htmls[$field['fieldid']]) { ?>
<li>
<?php echo $field['title'];?>:
<?php echo $htmls[$field['fieldid']];?>
</li>
<?php } } if($isconnect) { ?>
<li>
<label><strong>头像:</strong></label>
<input type="checkbox" name="use_qzone_avatar" id="use_qzone_avatar" class="pc" value="1" checked="checked" tabindex="1" /> 使用QQ头像
<input type="checkbox" name="use_qqshow" id="use_qqshow" class="pc" value="1" checked="checked" tabindex="1" /> <span title="QQ秀将展示在论坛帖子左侧和个人空间首页">使用QQ秀形象</span>
</li>
<?php } ?>


</ul>
<?php if($seccodecheck || $secqaacheck) { $sechash = random(8);?><input type="hidden" class="txt" name="sechash" value="<?php echo $sechash;?>" />
<ul>
<?php if($seccodecheck) { ?>
<li>
<label><strong>验证码:</strong></label>
<span id="seccode"></span>
<a href="javascript:;" onClick="updateseccode()">换一个</a>
<input type="text" class="txt" name="seccodeverify" />
<script type="text/javascript">
var updateseccode = function () {document.getElementById('seccode').innerHTML = '<img id="seccode" src="<?php echo $_G['siteurl'];?>api/mobile/index.php?module=seccode&sechash=<?php echo $sechash;?>&mobile=no&version=<?php if(empty($_GET['secversion'])) { ?>1<?php } else { ?><?php echo $_GET['secversion'];?><?php } ?>&random=' + Math.random() + '" />';}
updateseccode();
</script>
</li>
<?php } if($secqaacheck) { ?>
<li>
<label><strong>验证问答:</strong></label><?php echo make_secqaa();; ?><input type="text" class="txt" name="secanswer" />
</li>
<?php } ?>
</ul>
<?php } ?>
<ul>
<li class="submitbox">
<input type="hidden" name="agreebbrule" value="<?php echo $bbrulehash;?>" />
<button type="submit" id="registerformsubmit">提交</button>
</li>
</ul>
</div>
</div>
</form>

<?php if($isconnect) { ?>
<form method="post" autocomplete="off" enctype="multipart/form-data" action="<?php echo $_G['siteurl'];?>api/mobile/index.php?module=connect&action=login&loginsubmit=yes&mobilemessage=<?php echo $_GET['mobilemessage'];?>">
<input type="hidden" id="auth_hash" name="auth_hash" value="<?php echo $_G['qc']['connect_auth_hash'];?>" />
<input type="hidden" id="is_notify" name="is_notify" value="<?php echo $_G['qc']['connect_is_notify'];?>" />
<input type="hidden" id="is_feed" name="is_feed" value="<?php echo $_G['qc']['connect_is_feed'];?>" />
<div class="regbox">
<div class="reg_c">
<ul>
<li>
<label><strong>帐号:</strong></label>
<input type="text" class="txt" name="username" />
</li>
<li>
<label><strong>密码:</strong></label>
<input type="password" class="txt" name="password" />
</li>
<li>
<label><strong>安全提问:</strong></label>
<select name="questionid">
<option value="0">安全提问(未设置请忽略)</option>
<option value="1">母亲的名字</option>
<option value="2">爷爷的名字</option>
<option value="3">父亲出生的城市</option>
<option value="4">您其中一位老师的名字</option>
<option value="5">您个人计算机的型号</option>
<option value="6">您最喜欢的餐馆名称</option>
<option value="7">驾驶执照最后四位数字</option>
</select>
</li>
<li>
<label><strong>答案:</strong></label>
<input type="text" class="txt" name="answer" />
</li>
</ul>
<ul>
<li class="submitbox">
<input type="hidden" name="agreebbrule" value="<?php echo $bbrulehash;?>" />
<button type="submit" id="registerformsubmit">提交</button>
</li>
</ul>
</div>
</div>
</form>
<?php } ?>
</div>
</body>
</html>