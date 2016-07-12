<?php exit;?>
<!--{template common/header}--> 
<!-- header start -->
<div class="pt">
<!--{if $_G['forum']['type'] == 'forum'}-->
<a href="forum.php?forumlist=1">{echo m_lang('forum')}</a>
 <em> &gt; </em> <a href="forum.php?mod=forumdisplay&fid=$_G[fid]">{echo cutstr(strip_tags($_G['forum']['name']),20)}</a>
<!--{else}-->
<a href="forum.php?forumlist=1">{echo m_lang('forum')}</a>
 <em> &gt; </em> <a href="$upnavlink">{echo cutstr(strip_tags($_G['forum']['name']),20)}</a>
<!--{/if}-->
<span class="y v_pst" ><button class="btn_pn btn_pn_blue br3" id="replyid"><span>{lang reply}</span></button></span>
</div>
<!-- header end -->

<!--{hook/viewthread_top_mobile}-->
<!-- main postlist start -->
<div class="postlist">
<div class="at_avat">
	<h2>
	<a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]">$_G[forum_thread][subject]</a>
    <!--{if $_G['forum_thread'][displayorder] == -2}--> <span>({lang moderating})</span>
    <!--{elseif $_G['forum_thread'][displayorder] == -3}--> <span>({lang have_ignored})</span>
    <!--{elseif $_G['forum_thread'][displayorder] == -4}--> <span>({lang draft})</span>
    <!--{/if}-->
	</h2>    
    <div class="fh">
    <div class="favt"><img src="<!--{avatar($_G[forum_thread][authorid], small, true)}-->" />	</div>	
        <!--{if $_G[forum_thread][authorid] && $_G[forum_thread][author]}--> 
        <a href="home.php?mod=space&uid=$_G[forum_thread][authorid]" title="$_G[forum_thread][author]">$_G[forum_thread][author]</a> 
        <!--{else}--> 
        <!--{if $_G['forum']['ismoderator']}--> 
        <a href="home.php?mod=space&uid=$_G[forum_thread][authorid]">{lang anonymous}</a> 
        <!--{else}--> 
        {lang anonymous} 
        <!--{/if}--> 
        <!--{/if}--> 
        <p id="authorposton$post[pid]" class="xg1"> {echo date('Y-m-d H:i',$_G[forum_thread][dateline]);}</p>            
    
        <span class="btn_manages grey rela">
        <!--{if $_G['uid']}--><em><a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]" class="favbtn blue" style="margin-left:10px;">{lang favorite}</a></em><!--{/if}-->
        <!--{if $_G['forum']['ismoderator']}-->
        <!-- manage start -->
        <!--{if $post[first]}-->
            <em><a href="#moption_$post[pid]" class="popup blue">{lang manage}</a></em>
            <div id="moption_$post[pid]" popup="true" class="manages" style="display:none;">
                <!--{if !$_G['forum_thread']['special']}-->
                <input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]<!--{if $_G[forum_thread][sortid]}--><!--{if $post[first]}-->&sortid={$_G[forum_thread][sortid]}<!--{/if}--><!--{/if}-->{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
                <!--{/if}-->
                <input type="button" value="{lang delete}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&operation=delete&optgroup=3&from={$_G[tid]}">
                <input type="button" value="{lang close}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&from={$_G[tid]}&optgroup=4">
                <input type="button" value="{lang admin_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
                <input type="button" value="{lang topicadmin_warn_add}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
            </div>
        <!--{else}-->
            <em><a href="#moption_$post[pid]" class="popup blue">{lang manage}</a></em>
            <div id="moption_$post[pid]" popup="true" class="manages" style="display:none;">
                <input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
                <!--{if $_G['group']['allowdelpost']}--><input type="button" value="{lang modmenu_deletepost}" class="dialog button" href="forum.php?mod=topicadmin&action=delpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
                <!--{if $_G['group']['allowbanpost']}--><input type="button" value="{lang modmenu_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
                <!--{if $_G['group']['allowwarnpost']}--><input type="button" value="{lang modmenu_warn}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
            </div>
        <!--{/if}-->
        <!-- manage end -->					
        <!--{/if}-->					
        </span>
             
    </div>
</div>

	<div id="alist">
    <!--{eval $postcount = 0;}-->
    <!--{loop $postlist $post}-->
	<!--{eval $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);}-->
	<!--{hook/viewthread_posttop_mobile $postcount}-->
   <div class="plc cl" id="pid$post[pid]">
	   <!--{if !$post[first]}--><span class="avatar"><img src="<!--{if !$post['authorid'] || $post['anonymous']}--><!--{avatar(0, small, true)}--><!--{else}--><!--{avatar($post[authorid], small, true)}--><!--{/if}-->" style="width:28px;height:28px;" /></span><!--{/if}-->
       <div class="display pi" href="#replybtn_$post[pid]" {if $post[first]}style=" margin-left:10px;"{/if}>
		   <ul class="authi">
           <!--{if !$post[first]}-->
				<li class="grey mbn">
					<em>
						<!--{if isset($post[isstick])}-->
							<img src ="{IMGDIR}/settop.png" title="{lang replystick}" class="vm" /> {lang from} {$post[number]}{$postnostick}
						<!--{elseif $post[number] == -1}-->
							{lang recommend_post}
						<!--{else}-->
							<!--{if !empty($postno[$post[number]])}-->$postno[$post[number]]<!--{else}-->{$post[number]}{$postno[0]}<!--{/if}-->
						<!--{/if}-->
					</em><b>
					<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
						<a href="home.php?mod=space&uid=$post[authorid]" class="blue">$post[author]</a></b>

					<!--{else}-->
						<!--{if !$post['authorid']}-->
						<a href="javascript:;">{lang guest} <em>$post[useip]{if $post[port]}:$post[port]{/if}</em></a>
						<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous']}-->
						<!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$post[authorid]" target="_blank">{lang anonymous}</a><!--{else}-->{lang anonymous}<!--{/if}-->
						<!--{else}-->
						$post[author] <em>{lang member_deleted}</em>
						<!--{/if}-->
					<!--{/if}-->
                    $post[dateline] 
				</li>
                <!--{/if}-->				
				
            </ul>
			<div class="message">
                	<!--{if $post['warned']}-->
                        <span class="grey quote">{lang warn_get}</span>
                    <!--{/if}-->
                    <!--{if !$post['first'] && !empty($post[subject])}-->
                        <h2><strong>$post[subject]</strong></h2>
                    <!--{/if}-->
                    <!--{if $_G['adminid'] != 1 && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || $post['status'] == -1 || $post['memberstatus'])}-->
                        <div class="grey quote">{lang message_banned}</div>
                    <!--{elseif $_G['adminid'] != 1 && $post['status'] & 1}-->
                        <div class="grey quote">{lang message_single_banned}</div>
                    <!--{elseif $needhiddenreply}-->
                        <div class="grey quote">{lang message_ishidden_hiddenreplies}</div>
                    <!--{elseif $post['first'] && $_G['forum_threadpay']}-->
						<!--{template forum/viewthread_pay}-->
					<!--{else}-->

                    	<!--{if $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5))}-->
                            <div class="grey quote">{lang admin_message_banned}</div>
                        <!--{elseif $post['status'] & 1}-->
                            <div class="grey quote">{lang admin_message_single_banned}</div>
                        <!--{/if}-->
                        <!--{if $_G['forum_thread']['price'] > 0 && $_G['forum_thread']['special'] == 0}-->
                            {lang pay_threads}: <strong>$_G[forum_thread][price] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]} </strong> <a href="forum.php?mod=misc&action=viewpayments&tid=$_G[tid]" >{lang pay_view}</a>
                        <!--{/if}-->

                        <!--{if $post['first'] && $threadsort && $threadsortshow && $ceo_sortopen}-->
                            <!--{template forum/viewthread_viewsort}-->
                        <!--{/if}-->
                        <!--{if $post['first']}-->
                            <!--{if !$_G[forum_thread][special]}-->
                                $post[message]
                            <!--{elseif $_G[forum_thread][special] == 1}-->
                                <!--{template forum/viewthread_poll}-->
                            <!--{elseif $_G[forum_thread][special] == 2}-->
                                <!--{template forum/viewthread_trade}-->
                            <!--{elseif $_G[forum_thread][special] == 3}-->
                                <!--{template forum/viewthread_reward}-->
                            <!--{elseif $_G[forum_thread][special] == 4}-->
                                <!--{template forum/viewthread_activity}-->
                            <!--{elseif $_G[forum_thread][special] == 5}-->
                                <!--{template forum/viewthread_debate}-->
                            <!--{elseif $threadplughtml}-->
                                $threadplughtml
                                $post[message]
                            <!--{else}-->
                            	$post[message]
                            <!--{/if}-->
                        <!--{else}-->
                            $post[message]
                        <!--{/if}-->                       

					<!--{/if}-->
			</div>
			<!--{if $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
			<!--{if $post['attachment']}-->
               <div class="grey quote">
               {lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em>
               </div>
            <!--{elseif $post['imagelist'] || $post['attachlist']}-->
               <!--{if $post['imagelist']}-->
				<!--{if count($post['imagelist']) == 1}-->
				<ul class="img_list cl vm">{echo showattach($post, 1)}</ul>
				<!--{else}-->
				<ul class="img_list cl vm">{echo showattach($post, 1)}</ul>
				<!--{/if}-->
				<!--{/if}-->
                <!--{if $post['attachlist']}-->
				<ul>{echo showattach($post)}</ul>
				<!--{/if}-->
			<!--{/if}-->
			<!--{/if}-->
			<!--{if $_G[uid] && $allowpostreply && !$post[first]}-->
			<div id="replybtn_$post[pid]" class="replybtn" display="true" style="display:none;position:absolute;right:0px;top:5px;">
				<input type="button" class="redirect button" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&repquote=$post[pid]&extra=$_GET[extra]&page=$page" value="{lang reply}">
			</div>
			<!--{/if}-->       
        <!--{if $post['first'] && ($post[tags] || $relatedkeywords) && $_GET['from'] != 'preview'}-->
        <div class="tags mbm"> 
          <!--{if $post[tags]}--> 
          <!--{eval $tagi = 0;}--> 
          <!--{loop $post[tags] $var}--> 
          <!--{if $tagi}-->, <!--{/if}--><a title="$var[1]" href="misc.php?mod=tag&id=$var[0]" target="_blank">$var[1]</a> 
          <!--{eval $tagi++;}--> 
          <!--{/loop}--> 
          <!--{/if}--> 
        </div>
        <!--{/if}--> 
        
<!--{subtemplate forum/ceo_relateitems}-->

        <!--{if $post['first']}--><!--{$ceo_mshare}--><div class="ceo_ad"><!--{$ceo_viewthread_ad}--></div><!--{/if}--> 
        </div>
       
   </div>
   <!--{if $post['first']}-->
    <div class="titls brtb f14">
    <!--{if $_G['page'] > 1}-->
    <a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]" class="xi2">&laquo;{echo m_lang('tthread')}</a>
    <!--{else}-->
	<!--{if $ordertype != 1}-->
	<a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype=1" class="xi2">{lang post_descview}</a>
	<!--{else}-->
	<a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype=2" class="xi2">{lang post_ascview}</a>
	<!--{/if}--> 
    <!--{/if}-->   
    <span class="y">{echo m_lang('tt')}{$_G[forum_thread][replies]}{echo m_lang('od')}{lang reply}</span>
    </div>
    <!--{/if}-->
   <!--{hook/viewthread_postbottom_mobile $postcount}-->
   <!--{eval $postcount++;}-->
   <!--{/loop}-->
  <div id="post_new"></div>
 
   </div>   
<!--{if $_G['forum']['ismoderator']}-->
<!--{if $multipage}--><div class="pgbox">$multipage</div><!--{/if}-->
<!--{else}-->
<!--{if $ceo_norepages == 1}-->    
<!--{if $_G['forum_thread']['replies'] > $_G['ppp']}-->
<div id="ajaxshow"></div> 
<div id="post_ajax"><div id="post_new"></div></div> 
<div class="a_pg" id="a_pg"> 
<div id="ajaxld"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype={if $ordertype != 1}2{else}1{/if}&threads=thread" onclick="return ajaxpage(this.href, first1, last1, first2, last2);">{echo m_lang('load')}</a></div>
</div> 
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script>        
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($_G['forum_thread']['replies'] / $_G['ppp']);};
var first1 = "<div id=\"alist\"";
var last1 = "<div id=\"ajaxshow\"></div>";
var first2 = ">";
var last2 = "</div>";
</script>
<!--{/if}-->
<!--{else}-->
<!--{if $multipage}--><div class="pgbox">$multipage</div><!--{/if}-->
<!--{/if}-->
<!--{/if}-->

<!--{subtemplate forum/forumdisplay_fastpost}-->

</div>
<!-- main postlist end -->

<!--{hook/viewthread_bottom_mobile}-->

<script type="text/javascript">
	$('.favbtn').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=favbtn&inajax=1',
			data:{'favoritesubmit':'true', 'formhash':'{FORMHASH}'},
			dataType:'xml',
		})
		.success(function(s) {
			popup.open(s.lastChild.firstChild.nodeValue);
			evalscript(s.lastChild.firstChild.nodeValue);
		})
		.error(function() {
			window.location.href = obj.attr('href');
			popup.close();
		});
		return false;
	});
</script>

<a href="javascript:;" title="{lang scrolltop}" class="scrolltop bottom"></a>
<!--{template common/footer}-->
