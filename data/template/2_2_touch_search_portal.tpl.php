<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portal');
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/search/portal.htm', './template/yingxiao_toutiao2_m/touch/common/header.htm', 1458544828, '2', './data/template/2_2_touch_search_portal.tpl.php', './template/yingxiao_toutiao2_m', 'touch/search/portal')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/search/portal.htm', './template/yingxiao_toutiao2_m/touch/common/footer.htm', 1458544828, '2', './data/template/2_2_touch_search_portal.tpl.php', './template/yingxiao_toutiao2_m', 'touch/search/portal')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/search/portal.htm', './template/yingxiao_toutiao2_m/touch/common/ceo_color.htm', 1458544828, '2', './data/template/2_2_touch_search_portal.tpl.php', './template/yingxiao_toutiao2_m', 'touch/search/portal')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/search/portal.htm', './template/yingxiao_toutiao2_m/touch/common/ceo_btoolbar.htm', 1458544828, '2', './data/template/2_2_touch_search_portal.tpl.php', './template/yingxiao_toutiao2_m', 'touch/search/portal')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/search/portal.htm', './template/yingxiao_toutiao2_m/touch/common/ceo_sidemenus.htm', 1458544828, '2', './data/template/2_2_touch_search_portal.tpl.php', './template/yingxiao_toutiao2_m', 'touch/search/portal')
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
<a href="./forum.php"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/touch-logo.png" /></a>
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
<!-- header start -->

<div class="pt"><a href="forum.php"><?php echo m_lang('home'); ?></a> <em> &gt; </em> <?php echo m_lang('search'); ?></div>
<!-- header end -->
<div class="mmt"> <a href="search.php?mod=forum" ><?php echo m_lang('mthread'); ?></a> <a href="search.php?mod=portal" class="a" ><?php echo m_lang('arc'); ?></a> </div>
  
<div class="search">
      <form id="mod_portal" method="post" action="search.php">
        <input type="hidden" id="mod_portal" name="mod" value="portal" checked="checked" />
        <input type="hidden" value="yes" name="searchsubmit">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>						
                        <input type="text" name="srchtxt" value="" autocomplete="off" class="input" placeholder="<?php echo m_lang('searchportal'); ?>">
</td>
<td width="84" align="right" class="scbar_btn_td">
<div><input type="submit" name="btnG" value="搜索" class="button2" ></div>
</td>
</tr>
</tbody>
</table>
        </form>
</div>
  
<div class="threadlist">
  <?php if($keyword) { ?>  
  <h2 class="thread_tit">结果: <em>找到 “<span class="emfont"><?php echo $keyword;?></span>” 相关内容 <?php echo $index['num'];?> 个</em></h2>
  <?php } ?> 
  
  <?php if(!empty($searchid) && submitcheck('searchsubmit', 1)) { ?>
  <ul id="alist"> 
    <?php if(empty($articlelist)) { ?>
    <li class="wmt"><a href="javascript:;">对不起，没有找到匹配结果。</a></li>
    <?php } else { ?> 
    <?php if(is_array($articlelist)) foreach($articlelist as $article) { ?>    <li class="solist"><a href="portal.php?mod=view&amp;aid=<?php echo $article['aid'];?>"><?php echo $article['title'];?></a></li>
    <?php } ?> 
    <?php } ?> 
  </ul>  
  <?php } if($ceo_norepages == 1) { ?> 
<?php if($index['num'] > $_G['tpp']) { ?>
<div id="ajaxshow"></div> 
<div class="a_pg" id="a_pg"> 
<div id="ajaxld"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/load.gif" /> <?php echo m_lang('load_pic'); ?></div>
<div id="ajnt"><a href="search.php?mod=portal&amp;searchid=<?php echo $searchid;?>&amp;orderby=<?php echo $orderby;?>&amp;ascdesc=<?php echo $ascdesc;?>&amp;searchsubmit=yes" onclick="return ajaxpage(this.href, first1, last1, first2, last2);"><?php echo m_lang('load'); ?></a></div>
</div> 
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/ajaxpage.js?<?php echo VERHASH;?>" type="text/javascript" type="text/javascript"></script>        
<script type="text/javascript">
var pages=<?php echo $_G['page'];?>;
var allpage=<?php echo $thispage = ceil($index['num'] / $_G['tpp']);; ?>;
var first1 = "<ul id=\"alist\"";
var last1 = "<div id=\"ajaxshow\"></div>";
var first2 = ">";
var last2 = "</ul>";
</script>
<?php } } else { if($multipage) { ?><div class="pgbox"><?php echo $multipage;?></div><?php } } ?>  

</div><?php if(!empty($_G['setting']['pluginhooks']['global_footer_mobile'])) echo $_G['setting']['pluginhooks']['global_footer_mobile'];?><?php $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);$clienturl = ''?><?php if(strpos($useragent, 'iphone') !== false || strpos($useragent, 'ios') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=ios' : 'http://www.discuz.net/mobile.php?platform=ios';?><?php } elseif(strpos($useragent, 'android') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=android' : 'http://www.discuz.net/mobile.php?platform=android';?><?php } elseif(strpos($useragent, 'windows phone') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=windowsphone' : 'http://www.discuz.net/mobile.php?platform=windowsphone';?><?php } ?>

<div id="mask" style="display:none;"></div>
<?php if(!$nofooter) { ?>
<div class="ceo_ad"><?php echo $ceo_footer_ad;?></div>

<div class="footer">
<div>
<?php if(!$_G['uid'] && !$_G['connectguest']) { ?>
<a href="forum.php">首页</a> | <a href="member.php?mod=logging&amp;action=login" title="登录">登录</a> | <a href="<?php if($_G['setting']['regstatus']) { ?>member.php?mod=<?php echo $_G['setting']['regname'];?><?php } else { ?>javascript:;" style="color:#D7D7D7;<?php } ?>" title="<?php echo $_G['setting']['reglinkname'];?>">注册</a>
<?php } else { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1"><?php echo $_G['member']['username'];?></a> , <a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" title="退出" class="dialog">退出</a>
<?php } ?>
</div>
    <div style="display: none;">
<a href="<?php echo $_G['setting']['mobile']['simpletypeurl']['0'];?>">标准版</a> |  
<a href="javascript:;" style="color:#D7D7D7;">触屏版</a> | 
<a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">电脑版</a> | 
<?php if($clienturl) { ?><a href="<?php echo $clienturl;?>">客户端</a><?php } ?>
    </div>
<p>&copy; SMON HOME.</p>
    <div class="mfb"></div>
</div>
<?php } ?>
<!--底部导航-->
<?php if($ceo_mbtoolopen ) { ?>
<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/btool/t1.css" type="text/css" media="all">

<div id="btoolbar">
    <div class="btool btoolft cl">
        <ul>
            <li class="c1<?php if($php_indexurl === 0) { ?> current<?php } ?>"><a href="forum.php"><i class="iconfont ib_index">&#xe811;</i><span><?php echo m_lang('home'); ?></span></a></li>
            <li class="c2<?php if($_GET['mod'] == 'forumdisplay' || $_GET['forumlist'] == '1') { ?> current<?php } ?>"><a href="forum.php?forumlist=1"><i class="iconfont ib_forum">&#xe807;</i><span><?php echo m_lang('forum'); ?></span></a></li>
            <li class="c3<?php if($_GET['mod'] == 'post') { ?> current<?php } ?>">
<?php if($_GET['mod'] == 'forumdisplay' || $_GET['mod'] == 'viewthread' || $_GET['mod'] == 'group') { ?>
    <a href="<?php if($_G['group']['allowpost']) { ?>forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?><?php } else { if($_G['uid']) { ?>forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?><?php } else { ?>member.php?mod=logging&action=login<?php } } ?>"><i class="iconfont ib_post">&#xe814;</i><span><?php echo m_lang('post'); ?></span></a>
 <?php } else { ?>
    <?php if($_G['uid']) { ?>
        <a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav&amp;mobile=2"><i class="iconfont ib_post">&#xe814;</i><span><?php echo m_lang('post'); ?></span></a></a>
    <?php } else { ?>
        <a href="member.php?mod=logging&amp;action=login"><i class="iconfont ib_post">&#xe814;</i><span><?php echo m_lang('post'); ?></span></a>
    <?php } ?>
 <?php } ?>
            </li>
            <li class="c1<?php if($php_self == 'search.php' ) { ?> current<?php } ?>"><a href="<?php if(helper_access::check_module('portal') && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?>search.php<?php if($ceo_defaultsearchs == 1) { ?>?mod=forum<?php } else { ?>?mod=portal<?php } } else { ?>search.php?mod=forum<?php } ?>"><i class="iconfont ib_serach">&#xe805;</i><span><?php echo m_lang('search'); ?></span></a></li>
<li class="c1<?php if($_GET['mod'] == 'space') { ?> current<?php } ?>"><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>"><i class="iconfont ib_profile">&#xe804;</i><span><?php echo m_lang('me'); ?></span></a></li>
        </ul>
    </div>
</div>
<?php } ?>

</div><div id="side_nv" class="side_nv"><div class="nv"><ul>
<?php if(( $ceo_sidemenus)) { ?>
<?php echo $ceo_sidemenus;?>
<?php } else { ?>
<li><a href="forum.php?mod=portal"><i class="iconfont i_portal">&#xe820;</i><?php echo m_lang('portal'); ?></a></li>
<li><a href="forum.php?forumlist=1"><i class="iconfont i_forum">&#xe807;</i><?php echo m_lang('forum'); ?></a></li>
<li><a href="forum.php?mod=photo"><i class="iconfont i_photo">&#xe803;</i><?php echo m_lang('pic'); ?></a></li>
<li><a href="forum.php?mod=guide&amp;view=newthread"><i class="iconfont i_guide">&#xe808;</i><?php echo m_lang('guide'); ?></a></li>
<li><a href="misc.php?mod=tag"><i class="iconfont i_tag">&#xe802;</i><?php echo m_lang('tag'); ?></a></li>
<li><a href="search.php?mod=forum&amp;mobile=2"><i class="iconfont i_search">&#xe805;</i><?php echo m_lang('search'); ?></a></li>
<li><a href="portal.php?mod=list&amp;catid=1&amp;mobile=2"><i class="iconfont i_channel">&#xe821;</i><?php echo m_lang('channel'); ?></a></li>
<?php } ?>
</ul></div></div>
</div>

<script type="text/javascript">
<?php if($_G['basescript'] == 'forum' && CURMODULE == forumdisplay || $_G['basescript'] == 'portal' && $_GET['mod'] == 'list' ) { ?>
function mys(id){
    return !id ? null : document.getElementById(id);
}

function dbox(id,classname){
if(mys(id+'_menu').style.display == 'block'){
mys(id+'_menu').style.display = 'none';
mys(id).className = '';
} else {
mys(id+'_menu').style.display = 'block';
mys(id).className = classname;
}
}
<?php } ?>
if(window.onload!=null){   
    window.onload=function(){auto_height();<?php if($_G['basescript'] == 'forum' && CURMODULE == post ) { ?>setTimeout(function(){
$('#fastsmilies').html('<table cellspacing="0" cellpadding="0" class="smilies"><tr>' + smilies_fastdata + '</tr></table>');},0);<?php } ?>};  
}

</script>

</body>
</html><?php updatesession();?><?php if(defined('IN_MOBILE')) { output();?><?php } else { output_preview();?><?php } ?>
