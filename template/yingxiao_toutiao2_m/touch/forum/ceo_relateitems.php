<?php exit;?>
<!--{if $post['relateitem'] && $post['first']}-->
<div class="relateitem mbn br3">
    <h3>{lang related_thread}:</h3>
    <ul>
        <!--{eval $rel = 0;}--> 
        <!--{loop $post['relateitem'] $var}--> 
        <!--{if $rel < $ceo_relateitems}-->
        <li><a href="forum.php?mod=viewthread&tid=$var[tid]">{echo cutstr(strip_tags($var[subject]),40)}</a></li>
        <!--{/if}--> 
        <!--{eval $rel++;}--> 
        <!--{/loop}-->
    </ul>
</div>
<!--{/if}--> 
