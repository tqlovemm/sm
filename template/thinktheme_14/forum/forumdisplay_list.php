<?PHP exit('Access Denied');?>
<div class="tt_tiezi_box_bottom cl">
	$multipage
	<div class="tt_fatie_btn_box z">
	<!--{if !$_GET['archiveid']}--><a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"{if !$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']} onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')"{else} onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]';return false;"{/if} title="{lang send_posts}">发表新帖</a><!--{/if}-->
	</div>
    <!--{if $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
	<ul class="p_pop" id="newspecial_menu" style="display: none">
		<!--{if !$_G['forum']['allowspecialonly']}--><li><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]">{lang post_newthread}</a></li><!--{/if}-->
		<!--{if $_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']}-->
			<!--{loop $_G['forum']['threadsorts']['types'] $id $threadsorts}-->
				<!--{if $_G['forum']['threadsorts']['show'][$id]}-->
					<li class="popupmenu_option"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&extra=$extra&sortid=$id">$threadsorts</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
		<!--{if $_G['group']['allowpostpoll']}--><li class="poll"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=1">{lang post_newthreadpoll}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostreward']}--><li class="reward"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=3">{lang post_newthreadreward}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostdebate']}--><li class="debate"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=5">{lang post_newthreaddebate}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostactivity']}--><li class="activity"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=4">{lang post_newthreadactivity}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowposttrade']}--><li class="trade"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=2">{lang post_newthreadtrade}</a></li><!--{/if}-->
		<!--{if $_G['setting']['threadplugins']}-->
			<!--{loop $_G['forum']['threadplugin'] $tpid}-->
				<!--{if array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])}-->
					<li class="popupmenu_option"{if $_G['setting']['threadplugins'][$tpid][icon]} style="background-image:url(source/plugin/$tpid/$_G[setting][threadplugins][$tpid][icon])"{/if}><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&specialextra=$tpid">{$_G[setting][threadplugins][$tpid][name]}</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
	</ul>
<!--{/if}-->
	<!--{hook/forumdisplay_postbutton_bottom}-->
</div>
 <div id="threadlist" class="tl"{if $_G['uid']} style="position: relative;"{/if}>
	<!--{if $quicksearchlist && !$_GET['archiveid']}-->
		<!--{subtemplate forum/search_sortoption}-->
	<!--{/if}-->
	<div class="tt_tiezi_list_th">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th colspan="{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}3{else}2{/if}">
				<!--{if CURMODULE != 'guide'}-->
					<div class="tf">
						<span id="atarget" {if $_G['cookie']['atarget'] > 0}onclick="setatarget(-1)" class="y atarget_1"{else}onclick="setatarget(1)" class="y"{/if} title="{lang new_window_thread}">{lang new_window}</span>
						{lang screening}:
						<a id="filter_special" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">
							<!--{if $_GET['specialtype'] == 'poll'}-->{lang thread_poll}<!--{elseif $_GET['specialtype'] == 'trade'}-->{lang thread_trade}<!--{elseif $_GET['specialtype'] == 'reward'}-->{lang thread_reward}<!--{elseif $_GET['specialtype'] == 'activity'}-->{lang thread_activity}<!--{elseif $_GET['specialtype'] == 'debate'}-->{lang thread_debate}<!--{else}-->{lang threads_all}<!--{/if}-->
						</a>
						<!--{if $_GET['specialtype'] == 'reward'}-->
						<a id="filter_reward" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">
							<!--{if $_GET['rewardtype'] == ''}-->{lang all_reward}<!--{elseif $_GET['rewardtype'] == '1'}-->{lang rewarding}<!--{elseif $_GET['rewardtype'] == '2'}-->{lang reward_solved}<!--{/if}-->
						</a>
						<!--{/if}-->
						<a id="filter_dateline" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">
							<!--{if $_GET['dateline'] == 86400}-->{lang last_1_days}<!--{elseif $_GET['dateline'] == 172800}-->{lang last_2_days}<!--{elseif $_GET['dateline'] == 604800}-->{lang list_one_week}<!--{elseif $_GET['dateline'] == 2592000}-->{lang list_one_month}<!--{elseif $_GET['dateline'] == 7948800}-->{lang list_three_month}<!--{else}-->{lang search_any_date}<!--{/if}-->
						</a>
						<!--{if !$_G['setting']['closeforumorderby']}-->
						{lang orderby}:
						<a id="filter_orderby" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">
							<!--{if $_GET['orderby'] == 'dateline'}-->{lang list_post_time}<!--{elseif $_GET['orderby'] == 'replies'}-->{lang replies}<!--{elseif $_GET['orderby'] == 'views'}-->{lang views}<!--{elseif $_GET['orderby'] == 'lastpost'}-->{lang lastpost}<!--{elseif $_GET['orderby'] == 'heats'}-->{lang order_heats}<!--{else}-->{lang list_default_sort}<!--{/if}-->
						<!--{/if}-->
						</a><span class="pipe">|</span><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=digest&digest=1$forumdisplayadd[digest]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="xi2">{lang digest_posts}</a><!--{if !empty($_G[setting][recommendthread][status])}--><span class="pipe">|</span><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=recommend&orderby=recommends&recommend=1$forumdisplayadd[recommend]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="xi2">{lang order_recommends}</a><!--{/if}-->
						<!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && (!$_G['setting']['forumseparator'] || !$separatepos) && !$_GET['filter']}--><span class="pipe">|</span><a href="javascript:;" onclick="checkForumnew_btn('{$_G['fid']}')" title="{lang showupgrade}" class="forumrefresh"></a><!--{/if}-->
						<!--{hook/forumdisplay_filter_extra}-->
					</div>
				<!--{else}-->
					{lang title}
				<!--{/if}-->
				</th>
				<!--{if empty($_G['forum']['picstyle'])}-->
					<!--{if CURMODULE == 'guide'}-->
						<td class="by">{lang forum_group}</td>
					<!--{/if}-->
				<td class="by">{lang author}</td>
				<td class="num">{lang replies}</td>
				<td class="by">{lang lastpost}</td>
				<!--{else}-->
				<td class="by" colspan="3">
					<a{if empty($_G['cookie']['forumdefstyle'])} href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=yes" class="chked"{else} href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=no" class="unchk"{/if} title="{lang view_thread_imagemode}{lang view_thread}">{lang view_thread_imagemode}</a>
				</td>
				<!--{/if}-->
			</tr>
		</table>
	</div>
 <div class="tt_tiezi_list">  
		<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
			<script type="text/javascript">var lasttime = $_G['timestamp'];</script>
		<!--{/if}-->
		<div id="forumnew" style="display:none"></div>
		<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&action=moderate&fid=$_G[fid]&infloat=yes&nopost=yes">
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<input type="hidden" name="listextra" value="$extra" />
			<table summary="forum_$_G[fid]" cellspacing="0" cellpadding="0">
            
        <tbody id="separatorline">
           <tr class="tt_tiezi_list_t"><td class="icn">&nbsp;</td>
           <!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}--><td class="o">&nbsp;</td><!--{/if}-->
           <td class="common">{if $separatepos>0}本版置顶{else}版块主题{/if}</td><td class="by">&nbsp;</td><td class="num">&nbsp;</td><td class="by">&nbsp;</td></tr>
		</tbody>
  
				<!--{if (!$simplestyle || !$_G['forum']['allowside'] && $page == 1) && !empty($announcement)}-->
					<tbody>
						<tr>
							<td class="icn"><img src="{IMGDIR}/ann_icon.gif" alt="{lang announcement}" /></td>
							<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}--><td class="o">&nbsp;</td><!--{/if}-->
							<th><strong class="xst">{lang announcement}: <!--{if empty($announcement['type'])}--><a href="forum.php?mod=announcement&id=$announcement[id]#$announcement[id]" target="_blank">$announcement[subject]</a><!--{else}--><a href="$announcement[message]" target="_blank">$announcement[subject]</a><!--{/if}--></strong></th>
							<td class="by">
								<cite><a href="home.php?mod=space&uid=$announcement[authorid]" c="1"><!--{avatar($announcement[authorid], 'small')}-->$announcement[author]</a></cite>
								<em>$announcement[starttime]</em>
							</td>
							<td class="num">&nbsp;</td>
							<td class="by">&nbsp;</td>
						</tr>
					</tbody>
				<!--{/if}-->
				<!--{if $_G['forum_threadcount']}-->
					<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
						<!--{loop $_G['forum_threadlist'] $key $thread}-->
							<!--{if $_G[setting][forumseparator] == 1 && $separatepos == $key + 1}-->
								<tbody id="separatorline">
									<tr class="tt_tiezi_list_t">
										<td>&nbsp;</td>
										<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}--><td>&nbsp;</td><!--{/if}-->
										<th><!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && !$_GET['filter']}--><a href="javascript:;" onclick="checkForumnew_btn('{$_G['fid']}')" title="{lang showupgrade}" class="forumrefresh">{lang forum_thread}</a><!--{else}-->版块主题<!--{/if}--></th><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
									</tr>
								</tbody>
							<!--{/if}-->
							<!--{if $separatepos <= $key + 1}-->
								<!--{ad/threadlist}-->
							<!--{/if}-->
							<tbody id="$thread[id]">
								<tr>
									<td class="icn">
										<a href="forum.php?mod=viewthread&tid=$thread[icontid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" title="{if $thread['displayorder'] == 1}{lang thread_type1} - {/if}
											{if $thread['displayorder'] == 2}{lang thread_type2} - {/if}
											{if $thread['displayorder'] == 3}{lang thread_type3} - {/if}
											{if $thread['displayorder'] == 4}{lang thread_type4} - {/if}
											{if $thread[folder] == 'lock'}{lang closed_thread} - {/if}
											{if $thread['special'] == 1}{lang thread_poll} - {/if}
											{if $thread['special'] == 2}{lang thread_trade} - {/if}
											{if $thread['special'] == 3}{lang thread_reward} - {/if}
											{if $thread['special'] == 4}{lang thread_activity} - {/if}
											{if $thread['special'] == 5}{lang thread_debate} - {/if}
											{if $thread[folder] == "new"}{lang have_newreplies} - {/if}
											{lang target_blank}" target="_blank">
										<!--{if $thread[folder] == 'lock'}-->
											<img src="{IMGDIR}/folder_lock.gif" />
										<!--{elseif $thread['special'] == 1}-->
											<img src="{IMGDIR}/pollsmall.gif" alt="{lang thread_poll}" />
										<!--{elseif $thread['special'] == 2}-->
											<img src="{IMGDIR}/tradesmall.gif" alt="{lang thread_trade}" />
										<!--{elseif $thread['special'] == 3}-->
											<img src="{IMGDIR}/rewardsmall.gif" alt="{lang thread_reward}" />
										<!--{elseif $thread['special'] == 4}-->
											<img src="{IMGDIR}/activitysmall.gif" alt="{lang thread_activity}" />
										<!--{elseif $thread['special'] == 5}-->
											<img src="{IMGDIR}/debatesmall.gif" alt="{lang thread_debate}" />
										<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
											<img src="{IMGDIR}/pin_$thread[displayorder].gif" alt="$_G[setting][threadsticky][3-$thread[displayorder]]" />
										<!--{else}-->
											<img src="{IMGDIR}/folder_$thread[folder].gif" />
										<!--{/if}-->
										</a>
									</td>
									<!--{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}-->
									<td class="o">
										<!--{if $thread['fid'] == $_G[fid]}-->
											<!--{if $thread['displayorder'] <= 3 || $_G['adminid'] == 1}-->
												<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="$thread[tid]" />
											<!--{else}-->
												<input type="checkbox" disabled="disabled" />
											<!--{/if}-->
										<!--{else}-->
											<input type="checkbox" disabled="disabled" />
										<!--{/if}-->
									</td>
									<!--{/if}-->
									<th class="$thread[folder]">
										<!--{hook/forumdisplay_thread $key}-->
										<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
										<!--{/if}-->
										$thread[typehtml] $thread[sorthtml]
										<!--{if $thread['moved']}-->
											{lang thread_moved}:<!--{eval $thread[tid]=$thread[closed];}-->
										<!--{/if}-->
										<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra"$thread[highlight]{if $thread['isgroup'] == 1 || $thread['forumstick']} target="_blank"{else} onclick="\atarget(this)"{/if} class="xst" >$thread[subject]</a>
										<!--{if $thread[icon] >= 0}-->
											<img src="{STATICURL}image/stamp/{$_G[cache][stamps][$thread[icon]][url]}" alt="{$_G[cache][stamps][$thread[icon]][text]}" align="absmiddle" />
										<!--{/if}-->
										<!--{if $thread['rushreply']}-->
											<img src="{IMGDIR}/rushreply_s.png" alt="{lang rushreply}" align="absmiddle" />
										<!--{/if}-->
										<!--{if $stemplate && $sortid}-->$stemplate[$sortid][$thread[tid]]<!--{/if}-->
										<!--{if $thread['readperm']}--> - [{lang readperm} <span class="xw1">$thread[readperm]</span>]<!--{/if}-->
										<!--{if $thread['price'] > 0}-->
											<!--{if $thread['special'] == '3'}-->
											- <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=1" title="{lang show_rewarding_only}"><span class="xi1">[{lang thread_reward} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][title]}]</span></a>
											<!--{else}-->
											- [{lang price} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][title]}]
											<!--{/if}-->
										<!--{elseif $thread['special'] == '3' && $thread['price'] < 0}-->
											- <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=2" title="{lang show_rewarded_only}">[{lang reward_solved}]</a>
										<!--{/if}-->
										<!--{if $thread['attachment'] == 2}-->
											<img src="{STATICURL}image/filetype/image_s.gif" alt="attach_img" title="{lang attach_img}" align="absmiddle" />
										<!--{elseif $thread['attachment'] == 1}-->
											<img src="{STATICURL}image/filetype/common.gif" alt="attachment" title="{lang attachment}" align="absmiddle" />
										<!--{/if}-->
										<!--{if $thread['mobile']}-->
											<img src="{IMGDIR}/mobile-attach-$thread['mobile'].png" alt="{lang post_mobile}" align="absmiddle" />
										<!--{/if}-->
										<!--{if $thread['digest'] > 0 && $filter != 'digest'}-->
											<img src="{IMGDIR}/digest_$thread[digest].gif" align="absmiddle" alt="digest" title="{lang thread_digest} $thread[digest]" />
										<!--{/if}-->
										<!--{if $thread['displayorder'] == 0}-->
											<!--{if $thread[recommendicon] && $filter != 'recommend'}-->
												<img src="{IMGDIR}/recommend_$thread[recommendicon].gif" align="absmiddle" alt="recommend" title="{lang thread_recommend} $thread[recommends]" />
											<!--{/if}-->
											<!--{if $thread[heatlevel]}-->
												<img src="{IMGDIR}/hot_$thread[heatlevel].gif" align="absmiddle" alt="heatlevel" title="$thread[heatlevel] {lang heats}" />
											<!--{/if}-->
											<!--{if $thread['rate'] > 0}-->
												<img src="{IMGDIR}/agree.gif" align="absmiddle" alt="agree" title="{lang rate_credit_add}" />
											<!--{elseif $thread['rate'] < 0}-->
												<img src="{IMGDIR}/disagree.gif" align="absmiddle" alt="disagree" title="{lang posts_deducted}" />
											<!--{/if}-->
										<!--{/if}-->
										<!--{if $thread['replycredit'] > 0}-->
											- <span class="xi1">[{lang replycredit} <strong> $thread['replycredit']</strong> ]</span>
										<!--{/if}-->
										<!--{hook/forumdisplay_thread_subject $key}-->
										<!--{if $thread[multipage]}-->
											<span class="tps">$thread[multipage]</span>
										<!--{/if}-->
										<!--{if $thread['weeknew']}-->
											<a href="forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost#lastpost" class="xi1">New</a>
										<!--{/if}-->
										<!--{if !$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
											<!--{if $thread['related_group'] == 0 && $thread['closed'] > 1}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
											<!--{/if}-->
											<!--{if $groupnames[$thread[tid]]}-->
												<span class="fromg xg1"> [{lang from}: <a href="forum.php?mod=forumdisplay&fid={$groupnames[$thread[tid]][fid]}" target="_blank" class="xg1">{$groupnames[$thread[tid]][name]}</a>]</span>
											<!--{/if}-->
										<!--{/if}-->
									</th>
									<!--{if CURMODULE == 'guide'}-->
										<td class="by"><a href="forum.php?mod=forumdisplay&fid=$thread[fid]" target="_blank">$forumnames[$thread[fid]]['name']</a></td>
									<!--{/if}-->
									<td class="by">
										<!--{hook/forumdisplay_author $key}-->
										<cite>
										<!--{if $thread['authorid'] && $thread['author']}-->
											<a href="home.php?mod=space&uid=$thread[authorid]" c="1"><!--{avatar($thread[authorid], 'small')}-->$thread[author]</a><!--{if !empty($verify[$thread['authorid']])}--> $verify[$thread[authorid]]<!--{/if}-->
										<!--{else}-->
											$_G[setting][anonymoustext]
										<!--{/if}-->
										</cite>
										<em><span{if $thread['istoday']} class="xi1"{/if}>$thread[dateline]</span></em>
									</td>
									<td class="num"><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra" class="xi2">$thread[replies]</a><em><!--{if $thread['isgroup'] != 1}-->$thread[views]<!--{else}-->{$groupnames[$thread[tid]][views]}<!--{/if}--></em></td>
									<td class="by">
										<cite><!--{if $thread['lastposter']}--><a href="{if $thread[digest] != -2}home.php?mod=space&username=$thread[lastposterenc]{else}forum.php?mod=viewthread&tid=$thread[tid]&page={echo max(1, $thread[pages]);}{/if}" c="1">$thread[lastposter]</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
										<em><a href="{if $thread[digest] != -2 && !$thread[ordertype]}forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost$highlight#lastpost{else}forum.php?mod=viewthread&tid=$thread[tid]{if !$thread[ordertype]}&page={echo max(1, $thread[pages]);}{/if}{/if}">$thread[lastpost]</a></em>
									</td>
								</tr>
							</tbody>
						<!--{/loop}-->
						</table><!-- end of table "forum_G[fid]" branch 1/3 -->
					<!--{else}-->
						</table><!-- end of table "forum_G[fid]" branch 2/3 -->
                        
                        
            <style>
							.mlt li .sybl {overflow:hidden;width:205px;height:160px;height:160px !important;}
							.mlt li .sybl img {width:auto;height:auto;}
						</style>            
                        
						<ul class="ml mlt mtw cl">
							<!--{loop $_G['forum_threadlist'] $key $thread}-->
							<!--{if !$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
								<!--{if $thread['related_group'] == 0 && $thread['closed'] > 1}-->
									<!--{eval $thread[tid]=$thread[closed];}-->
								<!--{/if}-->
							<!--{/if}-->
							<li style="width:{$_G[setting][forumpicstyle][thumbwidth]}px;">
								<!--{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}-->
									<div style="position: absolute;padding:2px;background:#FFF">
									<!--{if $thread['fid'] == $_G[fid]}-->
										<!--{if $thread['displayorder'] <= 3 || $_G['adminid'] == 1}-->
											<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="$thread[tid]" />
										<!--{else}-->
											<input type="checkbox" disabled="disabled" />
										<!--{/if}-->
									<!--{else}-->
										<input type="checkbox" disabled="disabled" />
									<!--{/if}-->
									</div>
								<!--{/if}-->
								<div class="c cl sybl">
									<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" {if $thread['isgroup'] == 1 || $thread['forumstick'] || CURMODULE == 'guide'} target="_blank"{else} onclick="atarget(this)"{/if} title="$thread[subject]" class="z">
										<!--{if $thread['cover']}-->
											<img src="$thread[coverpath]" alt="$thread[subject]" width="{$_G[setting][forumpicstyle][thumbwidth]}" height="{$_G[setting][forumpicstyle][thumbheight]}" />
										<!--{else}-->
											<span class="nopic" style="width:{$_G[setting][forumpicstyle][thumbwidth]}px; height:{$_G[setting][forumpicstyle][thumbheight]}px;"><img style="margin-top:70px" src="{IMGDIR}/nophototiny.png" alt="$thread[subject]" width="{$_G[setting][forumpicstyle][thumbwidth]}" height="{$_G[setting][forumpicstyle][thumbheight]}" /></span>
										<!--{/if}-->
									</a>
								</div>
								<h3 class="ptn" style="width: {$_G[setting][forumpicstyle][thumbwidth]}px;">
									<!--{hook/forumdisplay_thread $key}-->
									<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}--><em class="sum pin">{lang thread_stick}</em> <!--{/if}--><!--{if in_array($thread['digest'], array(1, 2, 3))}--><em class="sum digest">{lang thread_digest}</em> <!--{/if}--><a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra"$thread[highlight]{if $thread['isgroup'] == 1 || $thread['forumstick']} target="_blank"{else} onclick="atarget(this)"{/if} title="$thread[subject]">$thread[subject]</a>
								</h3>
								<div class="cl">
									<!--{hook/forumdisplay_author $key}-->
									<!--{if $thread['cover']}--><em class="sum y xs0 xi1 xw1" title="$thread[cover] {lang pics}">$thread[cover]</em><!--{/if}-->
									<!--{if $thread['authorid'] && $thread['author']}-->
										<a href="home.php?mod=space&uid=$thread[authorid]">$thread[author]</a><!--{if !empty($verify[$thread['authorid']])}--> $verify[$thread[authorid]]<!--{/if}-->
									<!--{else}-->
										$_G[setting][anonymoustext]
									<!--{/if}-->
								</div>
								<div class="cl">
									<em class="y xs0"><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra" class="xi2" title="$thread[replies] {lang reply}">$thread[replies]</a> / <em title="{if $thread['isgroup'] != 1}$thread[views]{else}{$groupnames[$thread[tid]][views]}{/if} {lang show}"><!--{if $thread['isgroup'] != 1}-->$thread[views]<!--{else}-->{$groupnames[$thread[tid]][views]}<!--{/if}--></em></em>
									<em class="xs0{if $thread['istoday']} xi1{/if}">$thread[dateline]</em>
								</div>
							</li>
							<!--{/loop}-->
						</ul>
					<!--{/if}-->
				<!--{else}-->
						<tbody class="bw0_all"><tr><th colspan="{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}6{else}5{/if}"><p class="emp">{lang forum_nothreads}</p></th></tr></tbody>
					</table><!-- end of table "forum_G[fid]" branch 3/3 -->
				<!--{/if}-->
			<!--{if $_G['forum']['ismoderator'] && $_G['forum_threadcount']}-->
				<!--{template forum/topicadmin_modlayer}-->
			<!--{/if}-->
		</form>
	</div>
	<!--{hook/forumdisplay_threadlist_bottom}-->
</div>



<!--{if !IS_ROBOT}-->
	<div id="filter_special_menu" class="p_pop" style="display:none" change="location.href='forum.php?mod=forumdisplay&fid=$_G[fid]&filter='+$('filter_special').value">
		<ul>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang threads_all}</a></li>
			<!--{if $showpoll}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=poll$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_poll}</a></li><!--{/if}-->
			<!--{if $showtrade}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=trade$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_trade}</a></li><!--{/if}-->
			<!--{if $showreward}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_reward}</a></li><!--{/if}-->
			<!--{if $showactivity}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=activity$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_activity}</a></li><!--{/if}-->
			<!--{if $showdebate}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=debate$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_debate}</a></li><!--{/if}-->
		</ul>
	</div>
	<div id="filter_reward_menu" class="p_pop" style="display:none" change="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype='+$('filter_reward').value">
		<ul>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang all_reward}</a></li>
			<!--{if $showpoll}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=1">{lang rewarding}</a></li><!--{/if}-->
			<!--{if $showtrade}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=2">{lang reward_solved}</a></li><!--{/if}-->
		</ul>
	</div>
	<div id="filter_dateline_menu" class="p_pop" style="display:none">
		<ul>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang search_any_date}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=86400$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang last_1_days}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=172800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang last_2_days}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=604800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_one_week}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=2592000$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_one_month}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=7948800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_three_month}</a></li>
		</ul>
	</div>
	<!--{if !$_G['setting']['closeforumorderby']}-->
	<div id="filter_orderby_menu" class="p_pop" style="display:none">
		<ul>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_default_sort}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=author&orderby=dateline$forumdisplayadd[author]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_post_time}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=replies$forumdisplayadd[reply]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang replies}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=views$forumdisplayadd[view]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang views}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=lastpost&orderby=lastpost$forumdisplayadd[lastpost]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang lastpost}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=heat&orderby=heats$forumdisplayadd[heat]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang order_heats}</a></li>
		<ul>
	</div>
	<!--{/if}-->
<!--{/if}-->

<div class="tt_tiezi_box_bottom cl">
	$multipage
	<div class="tt_fatie_btn_box z">
	<!--{if !$_GET['archiveid']}--><a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"{if !$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']} onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')"{else} onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]';return false;"{/if} title="{lang send_posts}">发表新帖</a><!--{/if}-->
	</div>
	<!--{hook/forumdisplay_postbutton_bottom}-->
</div>