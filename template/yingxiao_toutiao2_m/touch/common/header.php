<?php echo '请购买正版'; exit;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="{if $_G['setting']['mobile'][mobilecachetime] > 0}{$_G['setting']['mobile'][mobilecachetime]}{else}no-cache{/if}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="{if !empty($metakeywords)}{echo dhtmlspecialchars($metakeywords)}{/if}" />
<meta name="description" content="{if !empty($metadescription)}{echo dhtmlspecialchars($metadescription)} {/if},$_G['setting']['bbname']" />
<!--{if $_G['basescript'] == 'portal'}--><base href="{$_G['siteurl']}" /><!--{/if}-->
<title><!--{if !empty($navtitle)}-->$navtitle - <!--{/if}--><!--{if empty($nobbname)}--> $_G['setting']['bbname'] - <!--{/if}--> {lang waptitle} - Powered by Discuz!</title>
<!--{eval require_once(DISCUZ_ROOT.'./template/yingxiao_toutiao2_m/toutiao_mobile/config.php');}-->
<!--{eval require_once(DISCUZ_ROOT.'./template/yingxiao_toutiao2_m/toutiao_mobile/func.php');}-->
<!--{eval require_once(DISCUZ_ROOT.'./template/yingxiao_toutiao2_m/toutiao_mobile/lang.php');}-->
<link rel="stylesheet" href="{STATICURL}image/mobile/style.css" type="text/css" media="all">
<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/font/iconfont.css" type="text/css" media="all">
<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/style.css" type="text/css" media="all">
<script src="{STATICURL}js/mobile/jquery-1.8.3.min.js?{VERHASH}"></script>

<script type="text/javascript">var STYLEID = '{STYLEID}', STATICURL = '{STATICURL}', IMGDIR = '{IMGDIR}', VERHASH = '{VERHASH}', charset = '{CHARSET}', discuz_uid = '$_G[uid]', cookiepre = '{$_G[config][cookie][cookiepre]}', cookiedomain = '{$_G[config][cookie][cookiedomain]}', cookiepath = '{$_G[config][cookie][cookiepath]}', showusercard = '{$_G[setting][showusercard]}', attackevasive = '{$_G[config][security][attackevasive]}', disallowfloat = '{$_G[setting][disallowfloat]}', creditnotice = '<!--{if $_G['setting']['creditnotice']}-->$_G['setting']['creditnames']<!--{/if}-->', defaultstyle = '$_G[style][defaultextstyle]', REPORTURL = '$_G[currenturl_encode]', SITEURL = '$_G[siteurl]', JSPATH = '$_G[setting][jspath]';</script>
<script src="{STATICURL}js/mobile/common.js?{VERHASH}" charset="{CHARSET}"></script>
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/yingxiaomobile.js"></script>
</head>

<body class="bg" onLoad="">
<div class="ceo_ad"><!--{$ceo_header_ad}--></div>

<div id="wp">
<div id="content" class="content">
<header>
<div class="hd_mu">
<!--{if $_G['uid'] || $_G['connectguest']}-->
<a id="us_list_btn" href="home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1" class="z"><img src="<!--{avatar($space[uid], middle, true)}-->" class="uspic" /><i class="iconfont i_usermenu">&#xe812;</i></a>
<!--{else}-->    
<a href="member.php?mod=logging&action=login" class="z"><i class="iconfont i_usermenu">&#xe812;</i></a>
<!--{/if}-->
<!--{if $_G[member][newpm] || $_G[member][newprompt] || $_G['connectguest'] }--><em></em><!--{/if}-->
</div>
<div class="logo">
<a href="./forum.php"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/logo.png" /></a>
</div>
<div id="side_pr" class="hd_mu">
<a href="javascript:;" id="side_open" class="y"><i class="iconfont i_sidemenu">&#xe810;</i></a>
</div>
</header>
<!--{subtemplate common/ceo_color}-->
<!--{$color_main}-->
<div class="ceo_ad"><!--{$ceo_headerbottom_ad}--></div>

<!--{hook/global_header_mobile}-->
