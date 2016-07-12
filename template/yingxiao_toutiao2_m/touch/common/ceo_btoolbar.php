<?php exit;?>

<!--底部导航-->
<!--{if $ceo_mbtoolopen }-->
<link rel="stylesheet" href="template/yingxiao_toutiao2_m/toutiao_mobile/css/btool/t1.css" type="text/css" media="all">

<div id="btoolbar">
    <div class="btool btoolft cl">
        <ul>
            <li class="c1{if $php_indexurl === 0} current{/if}"><a href="forum.php"><i class="iconfont ib_index">&#xe811;</i><span>{echo m_lang('home')}</span></a></li>
            <li class="c2{if $_GET['mod'] == 'forumdisplay' || $_GET['forumlist'] == '1'} current{/if}"><a href="forum.php?forumlist=1"><i class="iconfont ib_forum">&#xe807;</i><span>{echo m_lang('forum')}</span></a></li>
            <li class="c3{if $_GET['mod'] == 'post'} current{/if}">
<!--{if $_GET['mod'] == 'forumdisplay' || $_GET['mod'] == 'viewthread' || $_GET['mod'] == 'group'}-->
    <a href="{if $_G['group']['allowpost']}forum.php?mod=post&action=newthread&fid=$_G[fid]{else}{if $_G['uid']}forum.php?mod=post&action=newthread&fid=$_G[fid]{else}member.php?mod=logging&action=login{/if}{/if}"><i class="iconfont ib_post">&#xe814;</i><span>{echo m_lang('post')}</span></a>
 <!--{else}-->
    <!--{if $_G['uid']}-->
        <a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav&mobile=2"><i class="iconfont ib_post">&#xe814;</i><span>{echo m_lang('post')}</span></a></a>
    <!--{else}-->
        <a href="member.php?mod=logging&action=login"><i class="iconfont ib_post">&#xe814;</i><span>{echo m_lang('post')}</span></a>
    <!--{/if}-->
 <!--{/if}-->
            </li>
            <li class="c1{if $php_self == 'search.php' } current{/if}"><a href="{if helper_access::check_module('portal') && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)}search.php{if $ceo_defaultsearchs == 1}?mod=forum{else}?mod=portal{/if}{else}search.php?mod=forum{/if}"><i class="iconfont ib_serach">&#xe805;</i><span>{echo m_lang('search')}</span></a></li>
<li class="c1{if $_GET['mod'] == 'space'} current{/if}"><a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}"><i class="iconfont ib_profile">&#xe804;</i><span>{echo m_lang('me')}</span></a></li>
        </ul>
    </div>
</div>
<!--{/if}-->

