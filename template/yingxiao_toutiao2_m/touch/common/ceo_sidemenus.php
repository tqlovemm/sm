<?php exit;?>
<div id="side_nv" class="side_nv"><div class="nv"><ul>
<!--{if ( $ceo_sidemenus)}-->
{$ceo_sidemenus}
<!--{else}-->
<li><a href="forum.php?mod=portal"><i class="iconfont i_portal">&#xe820;</i>{echo m_lang('portal')}</a></li>
<li><a href="forum.php?forumlist=1"><i class="iconfont i_forum">&#xe807;</i>{echo m_lang('forum')}</a></li>
<li><a href="forum.php?mod=photo"><i class="iconfont i_photo">&#xe803;</i>{echo m_lang('pic')}</a></li>
<li><a href="forum.php?mod=guide&view=newthread"><i class="iconfont i_guide">&#xe808;</i>{echo m_lang('guide')}</a></li>
<li><a href="misc.php?mod=tag"><i class="iconfont i_tag">&#xe802;</i>{echo m_lang('tag')}</a></li>
<li><a href="search.php?mod=forum&mobile=2"><i class="iconfont i_search">&#xe805;</i>{echo m_lang('search')}</a></li>
<li><a href="portal.php?mod=list&catid=1&mobile=2"><i class="iconfont i_channel">&#xe821;</i>{echo m_lang('channel')}</a></li>
<!--{/if}-->
</ul></div></div>
