<?php echo 'Ä§¿Í°É www.moke8.com ';exit;?>
<!--{if $_G['uid']}-->

    <div id="header_user">
      <ul id="header_nav">
        <li>
          <!--{hook/global_usernav_extra1}-->
          <!--{hook/global_usernav_extra2}-->
          <!--{hook/global_usernav_extra3}-->
          <span><a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}<!--{if $_G[member][newpm]}-->({$_G[member][newpm]})<!--{/if}--></a></span>
          <div id="newprompter" style="float:left;"><span><a href="home.php?mod=space&do=notice" id="myprompt"{if $_G[member][newprompt]} class="new showmenu"{else}class="showmenu"{/if}onMouseOver="showMenu({'ctrlid':this.id,'ctrlclass':'a'})">{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}-->
          </a></span></div>
          <!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}-->
          <span><a href="home.php?mod=task&item=doing" id="task_ntc" class="new" title="{lang task_doing}">{lang task_doing}</a></span>
          <!--{/if}-->
		  <span><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}" id="sm" class="showmenu" onMouseOver="showMenu({'ctrlid':this.id,'ctrlclass':'a'})">{$_G[member][username]}</a></span>
          <span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></span>
        </li>
      </ul>
    </div>
    
<!--{elseif !empty($_G['cookie']['loginuser'])}-->

    <div id="header_user">
      <ul id="header_nav">
        <li> <span><a id="loginuser" class="username">
          <!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}-->
          </a></span> <span><a href="member.php?mod=logging&action=login" onClick="showWindow('login', this.href)">{lang activation}</a></span> <span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></span> </li>
      </ul>
    </div>
    
<!--{elseif !$_G[connectguest]}-->

	<div id="header_user">
      <ul id="header_nav" style="margin-right:-7px;">
      	<li class="login_list" style="width:30px;"><a href="plugin.php?id=ljxlwb&opp=in" title="$week_lang[0]"><span class="i_wb">$week_lang[0]</span></a></li>
        <li class="login_list" style="width:30px;"><a href="plugin.php?id=wechat:login" title="$week_lang[1]"><span class="i_wx">$week_lang[1]</span></a></li>		  
        <li class="login_list" style="width:34px;"><a href="connect.php?mod=login&amp;op=init&amp;referer=forum.php&amp;statfrom=login" title="$week_lang[2]"><span class="i_qq">$week_lang[2]</span></a></li>			
		<li class="login_list"><a class="login_block" href="member.php?mod=register" class="btn-register" title="$week_lang[3]">$week_lang[3]</a></li>			
		<li class="login_list"><a class="login_block" href="javascript:;" onClick="javascript:lsSubmit();" class="nousername" title="$week_lang[4]">$week_lang[4]</a></li>	
      </ul>
    </div>
    <div style="display:none">
      <!--{template member/login_simple}-->
    </div>
    
<!--{else}-->

    <div id="header_user">
      <ul id="header_nav">
        <li id="shopping_cart"> <span><a href="home.php?mod=spacecp&ac=usergroup" class="nousername">{$_G[member][username]}</a></span> <span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></span> </li>
      </ul>
    </div>
    
<!--{/if}-->