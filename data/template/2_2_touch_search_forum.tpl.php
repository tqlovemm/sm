<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forum');
0
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/search/forum.htm', './template/yingxiao_toutiao2_m/touch/search/pubsearch.htm', 1458636733, '2', './data/template/2_2_touch_search_forum.tpl.php', './template/yingxiao_toutiao2_m', 'touch/search/forum')
|| checktplrefresh('./template/yingxiao_toutiao2_m/touch/search/forum.htm', './template/yingxiao_toutiao2_m/touch/search/thread_list.htm', 1458636733, '2', './data/template/2_2_touch_search_forum.tpl.php', './template/yingxiao_toutiao2_m', 'touch/search/forum')
;?><?php include template('common/header'); ?><!-- header start -->

<div class="pt"><a href="forum.php"><?php echo m_lang('home'); ?></a> <em> &gt; </em> <?php echo m_lang('search'); ?></div>
<?php if(helper_access::check_module('portal') && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><div class="mmt"> <a href="search.php?mod=forum" class="a" ><?php echo m_lang('mthread'); ?></a> <a href="search.php?mod=portal" ><?php echo m_lang('arc'); ?></a> </div><?php } ?> 
<!-- header end -->
<form id="searchform" class="searchform" method="post" autocomplete="off" action="search.php?mod=forum&amp;mobile=2">
  <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
  
  <?php if(!empty($srchtype)) { ?><input type="hidden" name="srchtype" value="<?php echo $srchtype;?>" /><?php } ?>
<div class="search">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<input value="<?php echo $keyword;?>" autocomplete="off" class="input" name="srchtxt" id="scform_srchtxt" value="" placeholder="搜索帖子">
</td>
<td width="84" align="right" class="scbar_btn_td">
<div><input type="hidden" name="searchsubmit" value="yes"><input type="submit" value="搜索" class="button2" id="scform_submit"></div>
</td>
</tr>
</tbody>
</table>
</div>
 
  
  <?php $policymsgs = $p = '';?> 
  <?php if(is_array($_G['setting']['creditspolicy']['search'])) foreach($_G['setting']['creditspolicy']['search'] as $id => $policy) { ?> 
  <?php
$policymsg = <<<EOF

EOF;
 if($_G['setting']['extcredits'][$id]['img']) { 
$policymsg .= <<<EOF
{$_G['setting']['extcredits'][$id]['img']} 
EOF;
 } 
$policymsg .= <<<EOF
{$_G['setting']['extcredits'][$id]['title']} {$policy} {$_G['setting']['extcredits'][$id]['unit']}
EOF;
?> 
  <?php $policymsgs .= $p.$policymsg;$p = ', ';?> 
  <?php } ?> 
  <?php if($policymsgs) { ?>
  <p>每进行一次搜索将扣除 <?php echo $policymsgs;?></p>
  <?php } ?>
</form>
<?php if(!empty($searchid) && submitcheck('searchsubmit', 1)) { ?> 
<?php } else { ?> 
<?php if($_G['setting']['srchhotkeywords']) { ?>
<div class="bm_c hot_search mbm"> <?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { ?> 
<?php if($val=trim($val)) { ?> <?php $valenc=rawurlencode($val);?> <?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF
 

EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF
 
<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}">{$val}</a> 

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF
 
<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch">{$val}</a> 

EOF;
 } 
$srchhotkeywords[] .= <<<EOF
 

EOF;
?> 
<?php } ?> 
<?php } ?> <?php echo implode('', $srchhotkeywords);; ?> 
</div>
<?php } ?> 
<?php } ?> 

<?php if(!empty($searchid) && submitcheck('searchsubmit', 1)) { ?> <div class="threadlist">
<h2 class="thread_tit"><?php if($keyword) { ?>结果: <em>找到 “<span class="emfont"><?php echo $keyword;?></span>” 相关内容 <?php echo $index['num'];?> 个</em> <?php if($modfid) { ?><a href="forum.php?mod=modcp&amp;action=thread&amp;fid=<?php echo $modfid;?>&amp;keywords=<?php echo $modkeyword;?>&amp;submit=true&amp;do=search&amp;page=<?php echo $page;?>" target="_blank">进入管理面板</a><?php } } else { ?>结果: <em>找到相关主题 <?php echo $index['num'];?> 个</em><?php } ?></h2>
<?php if(empty($threadlist)) { ?>
        <ul><li class="wmt"><a href="javascript:;">对不起，没有找到匹配结果。</a></li></ul>
<?php } else { ?>
        <ul id="alist">
            <?php if(is_array($threadlist)) foreach($threadlist as $thread) { ?>            <li class="solist">
                <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['realtid'];?>&amp;highlight=<?php echo $index['keywords'];?>" <?php echo $thread['highlight'];?>><?php echo $thread['subject'];?></a>
            </li>
            <?php } ?>
        </ul>
<?php } ?>
 
<?php if($ceo_norepages == 1) { ?> 
<?php if($index['num'] > $_G['tpp']) { ?>
<div id="ajaxshow"></div> 
<div class="a_pg" id="a_pg"> 
<div id="ajaxld"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/load.gif" /> <?php echo m_lang('load_pic'); ?></div>
<div id="ajnt"><a href="search.php?mod=forum&amp;searchid=<?php echo $searchid;?>&amp;orderby=<?php echo $orderby;?>&amp;ascdesc=<?php echo $ascdesc;?>&amp;searchsubmit=yes" onclick="return ajaxpage(this.href, first1, last1, first2, last2);"><?php echo m_lang('load'); ?></a></div>
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

</div>
 
<?php } ?> <?php include template('common/footer'); ?> 
