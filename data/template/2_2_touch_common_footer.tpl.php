<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/common/footer.htm', './template/yingxiao_toutiao2_m/touch/common/ceo_btoolbar.htm', 1458544825, '2', './data/template/2_2_touch_common_footer.tpl.php', './template/yingxiao_toutiao2_m', 'touch/common/footer')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/common/footer.htm', './template/yingxiao_toutiao2_m/touch/common/ceo_sidemenus.htm', 1458544825, '2', './data/template/2_2_touch_common_footer.tpl.php', './template/yingxiao_toutiao2_m', 'touch/common/footer')
;?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footer_mobile'])) echo $_G['setting']['pluginhooks']['global_footer_mobile'];?><?php $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);$clienturl = ''?><?php if(strpos($useragent, 'iphone') !== false || strpos($useragent, 'ios') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=ios' : 'http://www.discuz.net/mobile.php?platform=ios';?><?php } elseif(strpos($useragent, 'android') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=android' : 'http://www.discuz.net/mobile.php?platform=android';?><?php } elseif(strpos($useragent, 'windows phone') !== false) { $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=windowsphone' : 'http://www.discuz.net/mobile.php?platform=windowsphone';?><?php } ?>

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
