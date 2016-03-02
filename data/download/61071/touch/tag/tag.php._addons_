<?php exit;?>
<!--{template common/header}-->
<!--{if $type != 'countitem'}-->

  <div class="pt"> <a href="forum.php?mod=forum">{echo m_lang('forum')}</a> <em> &gt; </em> <a href="misc.php?mod=tag">{lang tag}</a> </div>
<section>
    <div class="search">
      <form method="post" action="misc.php?mod=tag" class="pns">
		<table width="100%" cellspacing="0" cellpadding="0">
		<tbody>
		<tr>
		<td><input type="text" name="name" class="input" placeholder="{lang tag}" /></td>
        <td width="84" align="right" class="scbar_btn_td"><div><button type="submit" class="button2">{lang search}</button></div></td>
		</tr>
		</tbody>
		</table>
      </form>
      </div>
      <!--{if $tagarray}-->
      <div class="taglist"> 
        <!--{loop $tagarray $tag}--> 
        <a href="misc.php?mod=tag&id=$tag[tagid]" >$tag[tagname]</a> 
        <!--{/loop}--> 
      </div>
      <!--{else}-->
  <div class="wmt brtb notb">{lang no_tag}</div>
  <!--{/if}--> 

<!--{else}--> 
$num 
<!--{/if}--> 
</section>

<!--{template common/footer}-->