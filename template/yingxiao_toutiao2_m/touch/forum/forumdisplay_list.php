<?php exit;?>

<ul id="alist">
  <!--{loop $_G['forum_threadlist'] $key $thread}-->
    <li class="thlist"> <a href="forum.php?mod=viewthread&tid=$thread[tid]" $thread[highlight]>
    <h1> 
      <!--{if $thread[folder] == 'lock'}--> 
      <span class="t_att">{echo m_lang('tlock')}</span> 
      <!--{elseif $thread['special'] == 1}--> 
      <span class="t_att">{echo m_lang('ts1')}</span> 
      <!--{elseif $thread['special'] == 2}--> 
      <span class="t_att">{echo m_lang('ts2')}</span> 
      <!--{elseif $thread['special'] == 3}--> 
      <span class="t_att">{echo m_lang('ts3')}</span> 
      <!--{elseif $thread['special'] == 4}--> 
      <span class="t_att">{echo m_lang('ts4')}</span> 
      <!--{elseif $thread['special'] == 5}--> 
      <span class="t_att">{echo m_lang('ts5')}</span> 
      <!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}--> 
      <span class="t_att">{echo m_lang('tdis')}</span> 
      <!--{elseif $thread['digest'] > 0}--> 
      <span class="t_att">{echo m_lang('tdig')}</span> 
      <!--{elseif $thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0}--> 
      <span class="t_att">{echo m_lang('tatt')}</span> 
      <!--{else}--> 
      <!--{/if}--> 
      {$thread[subject]} </h1>
    <p> 
      <!--{if $thread['authorid'] && $thread['author']}--> 
      {$thread[author]}<!--{else}--><!--{if $_G['forum']['ismoderator']}-->{lang anonymous}<!--{else}-->{$_G[setting][anonymoustext]}<!--{/if}--><!--{/if}--><span class="pipe">-</span>{$thread[dateline]} <span class="num"><!--{if $thread[replies] > 0}-->{$thread[replies]}<!--{else}-->0<!--{/if}--></span> </p>
    </a> </li>
  <!--{/loop}--> 
</ul>