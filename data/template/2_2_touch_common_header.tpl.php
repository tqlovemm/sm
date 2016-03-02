<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/common/header.htm', './template/yingxiao_toutiao2_m/touch/common/ceo_color.htm', 1456881744, '2', './data/template/2_2_touch_common_header.tpl.php', './template/yingxiao_toutiao2_m', 'touch/common/header')
;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="<?php if($_G['setting']['mobile']['mobilecachetime'] > 0) { ?><?php echo $_G['setting']['mobile']['mobilecachetime'];?><?php } else { ?>no-cache<?php } ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } ?>,<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['basescript'] == 'portal') { ?><base href="<?php echo $_G['siteurl'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> 手机版 - Powered by Discuz!</title><?php require_once(DISCUZ_ROOT.'./template/yingxiao_toutiao2_m/toutiao_mobile/config.php');?><?php require_once(DISCUZ_ROOT.'./template/yingxiao_toutiao2_m/toutiao_mobile/func.php');?><?php require_once(DISCUZ_ROOT.'./template/yingxiao_toutiao2_m/toutiao_mobile/lang.php');?><link rel="stylesheet" href="<?php echo STATICURL;?>image/mobile/style.css" type="text/css" media="all">
<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/font/iconfont.css" type="text/css" media="all">
<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/style.css" type="text/css" media="all">
<script src="<?php echo STATICURL;?>js/mobile/jquery-1.8.3.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>

<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo STATICURL;?>js/mobile/common.js?<?php echo VERHASH;?>" type="text/javascript" charset="<?php echo CHARSET;?>"></script>
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/yingxiaomobile.js" type="text/javascript"></script>
</head>

<body class="bg" onLoad="">
<div class="ceo_ad"><?php echo $ceo_header_ad;?></div>

<div id="wp">
<div id="content" class="content">
<header>
<div class="hd_mu">
<?php if($_G['uid'] || $_G['connectguest']) { ?>
<a id="us_list_btn" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1" class="z"><img src="<?php echo avatar($space[uid], middle, true);?>" class="uspic" /><i class="iconfont i_usermenu">&#xe812;</i></a>
<?php } else { ?>    
<a href="member.php?mod=logging&amp;action=login" class="z"><i class="iconfont i_usermenu">&#xe812;</i></a>
<?php } if($_G['member']['newpm'] || $_G['member']['newprompt'] || $_G['connectguest'] ) { ?><em></em><?php } ?>
</div>
<div class="logo">
<a href="./forum.php"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/logo.png" /></a>
</div>
<div id="side_pr" class="hd_mu">
<a href="javascript:;" id="side_open" class="y"><i class="iconfont i_sidemenu">&#xe810;</i></a>
</div>
</header><?php
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

<?php echo $color_main;?>
<div class="ceo_ad"><?php echo $ceo_headerbottom_ad;?></div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header_mobile'])) echo $_G['setting']['pluginhooks']['global_header_mobile'];?>
