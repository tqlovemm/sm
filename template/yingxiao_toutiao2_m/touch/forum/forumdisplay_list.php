<?php exit;?>

<ul id="alist">
  <!--{loop $_G['forum_threadlist'] $key $thread}-->
    <li class="thlist"> <a href="forum.php?mod=viewthread&tid=$thread[tid]" $thread[highlight]>
    <h1> 

      <!--{else}--> 
      <!--{/if}--> 
      {$thread[subject]} </h1>
    <p> 
      <!--{if $thread['authorid'] && $thread['author']}--> 
      {$thread[author]}<!--{else}--><!--{if $_G['forum']['ismoderator']}-->{lang anonymous}<!--{else}-->{$_G[setting][anonymoustext]}<!--{/if}--><!--{/if}--><span class="pipe">-</span>{$thread[dateline]} <span class="num"><!--{if $thread[replies] > 0}-->{$thread[replies]}<!--{else}-->0<!--{/if}--></span> </p>
    </a> </li>
  <!--{/loop}--> 
</ul>