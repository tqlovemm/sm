<?php echo 'Ä§¿Í°É www.moke8.com ';exit;?>
<!--{subtemplate common/header_common}-->
	<meta name="application-name" content="$_G['setting']['bbname']" />
	<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />
	<!--{if $_G['setting']['portalstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" /><!--{/if}-->
	<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />
	<!--{if $_G['setting']['groupstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" /><!--{/if}-->
	<!--{if helper_access::check_module('feed')}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" /><!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->
		<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />
	<!--{/if}-->
	<!--{if !empty($rsshead)}-->$rsshead<!--{/if}-->
	<!--{if widthauto()}-->
		<link rel="stylesheet" id="css_widthauto" type="text/css" href='{$_G['setting']['csspath']}{STYLEID}_widthauto?{VERHASH}' />
		<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
	<!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'home' || $_G['basescript'] == 'userapp'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_G['basescript'] != 'portal' || $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<link rel="stylesheet" type="text/css" id="diy_common" href="{$_G['setting']['csspath']}{STYLEID}_css_diy.css?{VERHASH}" />
	<!--{/if}-->
</head>

<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}" onkeydown="if(event.keyCode==27) return false;">
	<div id="append_parent"></div><div id="ajaxwaitid"></div>
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<!--{template common/header_diy}-->
	<!--{/if}-->
	<!--{if check_diy_perm($topic)}-->
		<!--{template common/header_diynav}-->
	<!--{/if}-->
	<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}-->
		$diynav
	<!--{/if}-->
	<!--{if empty($topic) || $topic['useheader']}-->
		<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->
			<div class="xi1 bm bm_c">
			    {lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a>
			</div>
		<!--{/if}-->
		<!--{if $_G['setting']['shortcut'] && $_G['member'][credits] >= $_G['setting']['shortcut']}-->
			<div id="shortcut">
				<span><a href="javascript:;" id="shortcutcloseid" title="{lang close}">{lang close}</a></span>
				{lang shortcut_notice}
				<a href="javascript:;" id="shortcuttip">{lang shortcut_add}</a>

			</div>
			<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
		<!--{/if}-->
		<div id="toptb" class="cl wk_toptb" style="background:#282828;">
			<!--{hook/global_cpnav_top}-->
			<div class="wp">
				<div class="z">
                    <div id="headertop">
                    	<div class="wk_zxleft"><img src="$_G['style']['styleimgdir']/icon.png" />$week_lang[30]</div>
                        <!--{if empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']}-->
                            <a href="javascript:;" id="switchwidth" onClick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="switchwidth"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a>
                        <!--{/if}-->
                        <!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}--><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">{lang changestyle}</a><!--{/if}-->
                        <!--{if check_diy_perm($topic)}-->
                            $diynav
                        <!--{/if}-->
                	</div>
				</div>
				<div class="y">
                	<div class="wk_search"><a href="search.php" target="_blank" title="$week_lang[9]"><span class="i_search">$week_lang[9]</span></a></div>
                	<!--{template common/header_userstatus}-->
				</div>
			</div>
		</div>

		<!--{if !IS_ROBOT}-->
			<!--{if $_G['uid']}-->
			<ul id="myprompt_menu" class="p_pop" style="display: none;">				
				<li><a href="home.php?mod=space&do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news{if empty($_G[member][newpm])}_0{/if}"></em>{lang pm_center}</a></li>
				<li><a href="home.php?mod=follow&do=follower"><em class="prompt_follower{if empty($_G[member][newprompt_num][follower])}_0{/if}"></em><!--{lang notice_interactive_follower}-->{if $_G[member][newprompt_num][follower]}($_G[member][newprompt_num][follower]){/if}</a></li>
				<!--{if $_G[member][newprompt] && $_G[member][newprompt_num][follow]}-->
					<li><a href="home.php?mod=follow"><em class="prompt_concern"></em><!--{lang notice_interactive_follow}-->($_G[member][newprompt_num][follow])</a></li>
				<!--{/if}-->
				<!--{if $_G[member][newprompt]}-->
					<!--{loop $_G['member']['category_num'] $key $val}-->
						<li><a href="home.php?mod=space&do=notice&view=$key"><em class="notice_$key"></em><!--{echo lang('template', 'notice_'.$key)}-->(<span class="rq">$val</span>)</a></li>
					<!--{/loop}-->
				<!--{/if}-->
				<!--{if empty($_G['cookie']['ignore_notice'])}-->
					<li class="ignore_noticeli"><a href="javascript:;" onClick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="{lang temporarily_to_remind}"><em class="ignore_notice"></em></a></li>
				<!--{/if}-->
			</ul>
			<!--{/if}-->
			<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}-->
				<div id="sslct_menu" class="cl p_pop" style="display: none;">
					<!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onClick="extstyle('')" title="{lang default}"><i></i></span><!--{/if}-->
					<!--{loop $_G['style']['extstyle'] $extstyle}-->
						<span class="sslct_btn" onClick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:$extstyle[2]'></i></span>
					<!--{/loop}-->
				</div>
			<!--{/if}-->
            <ul class="sub_menu" id="qme_menu" style="display: none;">
            	<!--{loop $_G['setting']['mynavs'] $nav}-->
                    <!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->
                        <li>$nav[code]</li>
                    <!--{/if}-->
                <!--{/loop}-->
            </ul>
			<ul class="sub_menu" id="sm_menu" style="display: none;">
              <!--{if $_G['uid']}-->
				<li><a href="forum.php?mod=guide&view=my">$week_lang[7]</a></li>
				<li><a href="home.php?mod=space&do=favorite&view=me">{lang favorite}</a></li>
				<li><a href="home.php?mod=space&do=friend">{lang friends}</a></li>
				<!--{hook/global_myitem_extra}-->
              <!--{/if}--> 
              <li><a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: $_G[member][credits]</a></li>
              <li><a href="home.php?mod=spacecp">{lang setup}</a></li>
              <!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
              <li><a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a></li>
              <!--{/if}--> 
              <!--{if $_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']}-->
              <li><a href="admin.php?frames=yes&action=cloud&operation=applist" target="_blank">{lang cloudcp}</a></li>
              <!--{/if}--> 
              <!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
              <li><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a></li>
              <!--{/if}--> 
              <!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
              <li><a href="admin.php" target="_blank">{lang admincp}</a></li>
              <!--{/if}--> 
              <!--{hook/global_usernav_extra4}-->
            </ul>
		<!--{/if}-->

		<!--{ad/headerbanner/wp a_h}-->
		<div id="hd" style="border-bottom:1px solid #EEE;"><div class="clear"></div>
            <div id="week_nav">
                <div class="wp">
                    <div class="hdc cl">
                        <div class="wk_logo">
                            <!--{eval $mnid = getcurrentnav();}-->
                            <h2><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}--></h2>
                        </div>
                        <ul class="nav">
                            <!--{loop $_G['setting']['navs'] $nav}-->
                                <!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}--><li {if $mnid == $nav[navid]}class="a" {/if}$nav[nav]></li><!--{/if}-->
                            <!--{/loop}-->
                        </ul>
                        <!--{hook/global_nav_extra}-->	
                    </div>
                </div>
            </div>
        </div>

        <!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->
            <ul class="p_pop h_pop" id="plugin_menu" style="display: none">
            <!--{loop $_G['setting']['plugins']['jsmenu'] $module}-->
                 <!--{if !$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->
                 <li>$module[url]</li>
                 <!--{/if}-->
            <!--{/loop}-->
            </ul>
        <!--{/if}-->
        <div class="sub_nav"> $_G[setting][menunavs] </div>
        <div id="mu" class="cl wp">
        <!--{if $_G['setting']['subnavs']}-->
            <!--{loop $_G[setting][subnavs] $navid $subnav}-->
                <!--{if $_G['setting']['navsubhover'] || $mnid == $navid}-->
                <ul class="cl {if $mnid == $navid}current{/if}" id="snav_$navid" style="display:{if $mnid != $navid}none{/if}">
                $subnav
                </ul>
                <!--{/if}-->
            <!--{/loop}-->
        <!--{/if}-->
        </div>
        <!--{ad/subnavbanner/a_mu}-->
    <!--{hook/global_header}-->
	<!--{/if}-->
    <script type="text/javascript" src="$_G['style'][styleimgdir]/js/week_nav.js"></script> 
    <script type="text/javascript" src="$_G['style']['styleimgdir']/js/jquery-1.7.2.js"></script>
    
    <!--{if $_G['basescript'] != 'portal'}-->
    <div class="wk_content_left">
        <div class="wk_content_left5">
            <div class="wk_content_bottom">
                <div class="wp">
                    <div class="wk_content_left_t">
                        <span class="wk_content_left_t1">$week_lang[122]</span>
                        <span class="wk_content_left_t2">$week_lang[123]</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--{/if}-->

	<div id="wp" class="wp">
