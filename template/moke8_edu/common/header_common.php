<?php echo 'ħ�Ͱ� www.moke8.com ';exit;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset={CHARSET}" />
	<!--{if $_G['config']['output']['iecompatible']}--><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE{$_G['config']['output']['iecompatible']}" /><!--{/if}-->
	<title><!--{if !empty($navtitle)}-->$navtitle - <!--{/if}--><!--{if empty($nobbname)}--> $_G['setting']['bbname'] - <!--{/if}--> by www.moke8.com</title>
	$_G['setting']['seohead']

	<meta name="keywords" content="{if !empty($metakeywords)}{echo dhtmlspecialchars($metakeywords)}{/if}" />
	<meta name="description" content="{if !empty($metadescription)}{echo dhtmlspecialchars($metadescription)} {/if}{if empty($nobbname)},$_G['setting']['bbname']{/if}" />
	<meta name="generator" content="Discuz! $_G['setting']['version']" />
	<meta name="author" content="Discuz! Team and Comsenz UI Team" />
	<meta name="copyright" content="2001-2013 Comsenz Inc." />
	<meta name="MSSmartTagsPreventParsing" content="True" />
	<meta http-equiv="MSThemeCompatible" content="Yes" />
	<base href="{$_G['siteurl']}" />
	<!--{csstemplate}-->
	<script type="text/javascript">var STYLEID = '{STYLEID}', STATICURL = '{STATICURL}', IMGDIR = '{IMGDIR}', VERHASH = '{VERHASH}', charset = '{CHARSET}', discuz_uid = '$_G[uid]', cookiepre = '{$_G[config][cookie][cookiepre]}', cookiedomain = '{$_G[config][cookie][cookiedomain]}', cookiepath = '{$_G[config][cookie][cookiepath]}', showusercard = '{$_G[setting][showusercard]}', attackevasive = '{$_G[config][security][attackevasive]}', disallowfloat = '{$_G[setting][disallowfloat]}', creditnotice = '<!--{if $_G['setting']['creditnotice']}-->$_G['setting']['creditnames']<!--{/if}-->', defaultstyle = '$_G[style][defaultextstyle]', REPORTURL = '$_G[currenturl_encode]', SITEURL = '$_G[siteurl]', JSPATH = '$_G[setting][jspath]', CSSPATH = '$_G[setting][csspath]', DYNAMICURL = '$_G[dynamicurl]';</script>
	<script type="text/javascript" src="{$_G[setting][jspath]}common.js?{VERHASH}"></script>
	<!--{if empty($_GET['diy'])}--><!--{eval $_GET['diy'] = '';}--><!--{/if}-->
	<!--{if !isset($topic)}--><!--{eval $topic = array();}--><!--{/if}-->
	<!--{eval require $_G['cache']['style_default']['directory'].'/language/week_'.CHARSET.'.php';}-->
	<link href="$_G['style']['styleimgdir']/js/portal.css" rel="stylesheet" type="text/css" />