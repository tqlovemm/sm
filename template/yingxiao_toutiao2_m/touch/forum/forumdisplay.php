<?php exit;?>
<!--{template common/header}-->
<!-- header start -->

<div class="forumhead">
	<div class="fh">
    	<h1>$_G['forum']['name']</h1>
    	<p><span class="mr20">{lang index_today} $_G[forum][todayposts]</span><span class="mr20">{lang index_threads} $_G[forum][threads]</span></p>
        
<div class="fbt">
<a href="{if $_G['group']['allowpost']}forum.php?mod=post&action=newthread&fid=$_G[fid]{else}{if $_G['uid']}forum.php?mod=post&action=newthread&fid=$_G[fid]{else}member.php?mod=logging&action=login{/if}{/if}" class="z f_pst" >{lang send_threads}</a>
<!--{if $_G['uid']}--><a href="home.php?mod=spacecp&ac=favorite&type=forum&id={$_G[fid]}" class="favorite" >{lang favorite}</a><!--{/if}--> 
</div>
        <div class="flogo">
<a href="forum.php?mod=forumdisplay&fid=$_G[fid]" title="$_G['forum'][name]"><img alt="$_G['forum'][name]" src="<!--{if $_G['forum'][icon]}-->data/attachment/common/$_G['forum'][icon]<!--{else}-->template/yingxiao_toutiao2_m/toutiao_mobile/img/forum.png<!--{/if}-->"><span class="img-shadow"></span></a>
        </div>
    </div>
</div>
<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || $_G['forum']['threadsorts'] || $subexists}-->
<div class="nmt">
<div class="z">
<!--{if $ceo_sortopen}-->
  <!--{if !$_G[setting][mobile][mobilesimpletype]}--><!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || $_G['forum']['threadsorts']}--><a href="javascript:;" id="thtys" onclick="dbox('thtys','thtys');">{echo m_lang('thtys')}</a><!--{/if}--><!--{/if}--> 
<!--{/if}-->
  <!--{if $subexists}--><a href="javascript:;" id="subfrm" onclick="dbox('subfrm','subfrm');"{if $ceo_subopen == 1 && $_G['page'] == 1} class="subfrm"{/if}>{echo m_lang('subfrm')}</a><!--{/if}--> 
</div>
</div>
<!--{/if}--> 
<!--{if $subexists}-->
<div class="catlist clnb" id="subfrm_menu" style="display:{if $ceo_subopen == 1 && $_G['page'] == 1}block{else}none{/if}">
  <ul>
    <!--{loop $sublist $sub}-->
    <li class="brtb"> 
      <!--{if $sub[icon]}--> 
      $sub[icon] 
      <!--{else}--> 
      <a href="forum.php?mod=forumdisplay&fid={$sub[fid]}"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/forum{if $sub[folder]}_new{/if}.png" alt="$sub[name]" /></a> 
      <!--{/if}--> 
      <a href="forum.php?mod=forumdisplay&fid={$sub[fid]}" class="a">
      <p class="f_nm f15">{$sub['name']}</p>
      <!--{if $sub[description]}-->
      <p class="f11 xg1 f_dp">{echo cutstr(strip_tags($sub[description]),30)}</p>
      <!--{/if}--> 
      <!--{if $sub[todayposts]}--><span class="l yy f12">$sub[todayposts]</span><!--{/if}-->
      </a> </li>
    <!--{/loop}-->
  </ul>
</div>
<!--{/if}--> 
<!--{if $ceo_sortopen}-->
    <!--{subtemplate forum/forumdisplay_sort}-->
<!--{/if}-->
<!-- header end --> 

	<!--{if $quicksearchlist && !$_GET['archiveid']}-->
		<!--{subtemplate forum/search_sortoption}-->
	<!--{/if}-->

<!--{hook/forumdisplay_top_mobile}--> 

<!-- main threadlist start --> 
<!--{if !$subforumonly}--> 
<div class="threadlist">
<!--{if $_G['forum_threadcount']}--> <!--如果 帖子总数不为 false 或 0-->
    <!--{if $ceo_piclistopen == 1}--> <!--如果 图文列表打开状态-->
        <!--如果打开图文列表-->
		<!--{subtemplate forum/forumdisplay_piclist}-->
    <!--{else}-->
        <!--如果未打开图文列表-->
		<!--{subtemplate forum/forumdisplay_list}-->
    <!--{/if}--> 
<!--{else}-->  <!--如果 帖子总数是 false 或 0-->
<li class="wmt brtb">{lang forum_nothreads}</li>
<!--{/if}--> 
</div>

<!--{/if}-->

<!--{if $ceo_norepages == 1}--> 
<!--{if $_G['forum_threadcount'] > $_G['tpp']}-->
<div id="ajaxshow"></div>
<div class="a_pg" id="a_pg">
  <div id="ajaxld"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/load.gif" /> {echo m_lang('load_pic')}</div>
  <div id="ajnt"><a href="forum.php?mod=forumdisplay&fid={$_G[fid]}&filter={$filter}&orderby={$_GET[orderby]}{$forumdisplayadd[page]}&{$multipage_archive}" onclick="return ajaxpage(this.href, first1, last1, first2, last2);">{echo m_lang('load')}</a></div>
</div>
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script> 
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($_G['forum_threadcount'] / $_G['tpp']);};
var first1 = "<ul id=\"alist\"";
var last1 = "<div id=\"ajaxshow\"></div>";
var first2 = ">";
var last2 = "</ul>";
</script> 
<!--{/if}--> 
<!--{else}--> 
<!--{if $multipage}-->
<div class="pgbox">$multipage</div>
<!--{/if}--> 
<!--{/if}-->

<script type="text/javascript">
	$('.favorite').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=favorite&inajax=1',
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

<!-- main threadlist end --> 
<!--{hook/forumdisplay_bottom_mobile}-->
<div class="pullrefresh" style="display:none;"></div>
<!--{template common/footer}--> 
