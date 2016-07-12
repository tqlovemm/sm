<?php exit;?>
<!--{subtemplate common/header}-->
<!-- header start -->

<div class="pt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> {echo m_lang('search')}</div>
<!-- header end -->
<div class="mmt"> <a href="search.php?mod=forum" >{echo m_lang('mthread')}</a> <a href="search.php?mod=portal" class="a" >{echo m_lang('arc')}</a> </div>
  
<div class="search">
      <form id="mod_portal" method="post" action="search.php">
        <input type="hidden" id="mod_portal" name="mod" value="portal" checked="checked" />
        <input type="hidden" value="yes" name="searchsubmit">
		<table width="100%" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td>						
                        <input type="text" name="srchtxt" value="" autocomplete="off" class="input" placeholder="{echo m_lang('searchportal')}">
					</td>
					<td width="84" align="right" class="scbar_btn_td">
						<div><input type="submit" name="btnG" value="{lang search}" class="button2" ></div>
					</td>
				</tr>
			</tbody>
		</table>
        </form>
</div>
  
<div class="threadlist">
  <!--{if $keyword}-->  
  <h2 class="thread_tit">{lang search_result_keyword}</h2>
  <!--{/if}--> 
  
  <!--{if !empty($searchid) && submitcheck('searchsubmit', 1)}-->
  <ul id="alist"> 
    <!--{if empty($articlelist)}-->
    <li class="wmt"><a href="javascript:;">{lang search_nomatch}</a></li>
    <!--{else}--> 
    <!--{loop $articlelist $article}-->
    <li class="solist"><a href="portal.php?mod=view&aid=$article[aid]">$article[title]</a></li>
    <!--{/loop}--> 
    <!--{/if}--> 
  </ul>  
  <!--{/if}-->

<!--{if $ceo_norepages == 1}--> 
<!--{if $index['num'] > $_G['tpp']}-->
<div id="ajaxshow"></div> 
<div class="a_pg" id="a_pg"> 
<div id="ajaxld"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="search.php?mod=portal&searchid={$searchid}&orderby={$orderby}&ascdesc={$ascdesc}&searchsubmit=yes" onclick="return ajaxpage(this.href, first1, last1, first2, last2);">{echo m_lang('load')}</a></div>
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

<!--{subtemplate common/footer}-->