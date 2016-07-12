<?php exit;?>
<div class="threadlist">
	<h2 class="thread_tit"><!--{if $keyword}-->{lang search_result_keyword} <!--{if $modfid}--><a href="forum.php?mod=modcp&action=thread&fid=$modfid&keywords=$modkeyword&submit=true&do=search&page=$page" target="_blank">{lang goto_memcp}</a><!--{/if}--><!--{else}-->{lang search_result}<!--{/if}--></h2>
	<!--{if empty($threadlist)}-->
        <ul><li class="wmt"><a href="javascript:;">{lang search_nomatch}</a></li></ul>
	<!--{else}-->
        <ul id="alist">
            <!--{loop $threadlist $thread}-->
            <li class="solist">
                <a href="forum.php?mod=viewthread&tid=$thread[realtid]&highlight=$index[keywords]" $thread[highlight]>$thread[subject]</a>
            </li>
            <!--{/loop}-->
        </ul>
	<!--{/if}-->
 
<!--{if $ceo_norepages == 1}--> 
<!--{if $index['num'] > $_G['tpp']}-->
<div id="ajaxshow"></div> 
<div class="a_pg" id="a_pg"> 
<div id="ajaxld"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="search.php?mod=forum&searchid={$searchid}&orderby={$orderby}&ascdesc={$ascdesc}&searchsubmit=yes" onclick="return ajaxpage(this.href, first1, last1, first2, last2);">{echo m_lang('load')}</a></div>
</div> 
<script src="template/yingxiao_toutiao2_m/toutiao_mobile/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script>        
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($index['num'] / $_G['tpp']);};
var first1 = "<ul id=\"alist\"";
var last1 = "<div id=\"ajaxshow\"></div>";
var first2 = ">";
var last2 = "</ul>";
</script>
<!--{/if}-->
<!--{else}-->
<!--{if $multipage}--><div class="pgbox">$multipage</div><!--{/if}-->
<!--{/if}-->

</div>
