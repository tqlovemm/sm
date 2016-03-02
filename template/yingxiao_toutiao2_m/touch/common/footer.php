<?php exit;?>
<!--{hook/global_footer_mobile}-->
<!--{eval $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);$clienturl = ''}-->
<!--{if strpos($useragent, 'iphone') !== false || strpos($useragent, 'ios') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=ios' : 'http://www.discuz.net/mobile.php?platform=ios';}-->
<!--{elseif strpos($useragent, 'android') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=android' : 'http://www.discuz.net/mobile.php?platform=android';}-->
<!--{elseif strpos($useragent, 'windows phone') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=windowsphone' : 'http://www.discuz.net/mobile.php?platform=windowsphone';}-->
<!--{/if}-->

<div id="mask" style="display:none;"></div>
<!--{if !$nofooter}-->
<div class="ceo_ad"><!--{$ceo_footer_ad}--></div>

<div class="footer">
	<div>
		<!--{if !$_G[uid] && !$_G['connectguest']}-->
		<a href="forum.php">{lang mobilehome}</a> | <a href="member.php?mod=logging&action=login" title="{lang login}">{lang login}</a> | <a href="<!--{if $_G['setting']['regstatus']}-->member.php?mod={$_G[setting][regname]}<!--{else}-->javascript:;" style="color:#D7D7D7;<!--{/if}-->" title="{$_G['setting']['reglinkname']}">{lang register}</a>
		<!--{else}-->
		<a href="home.php?mod=space&uid={$_G[uid]}&do=profile&mycenter=1">{$_G['member']['username']}</a> , <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}" title="{lang logout}" class="dialog">{lang logout}</a>
		<!--{/if}-->
	</div>
    <div>
		<a href="{$_G['setting']['mobile']['simpletypeurl'][0]}">{lang no_simplemobiletype}</a> |  
		<a href="javascript:;" style="color:#D7D7D7;">{lang mobile2version}</a> | 
		<a href="{$_G['setting']['mobile']['nomobileurl']}">{lang nomobiletype}</a> | 
		<!--{if $clienturl}--><a href="$clienturl">{lang clientversion}</a><!--{/if}-->
    </div>
	<p>&copy; Comsenz Inc.</p>
    <div class="mfb"></div>
</div>
<!--{/if}-->
<!--{subtemplate common/ceo_btoolbar}-->
</div>
<!--{subtemplate common/ceo_sidemenus}-->
</div>

<script type="text/javascript">
<!--{if $_G['basescript'] == 'forum' && CURMODULE == forumdisplay || $_G['basescript'] == 'portal' && $_GET['mod'] == 'list' }-->
function mys(id){
    return !id ? null : document.getElementById(id);
}

function dbox(id,classname){
	if(mys(id+'_menu').style.display == 'block'){
		mys(id+'_menu').style.display = 'none';
		mys(id).className = '';
	} else {
		mys(id+'_menu').style.display = 'block';
		mys(id).className = classname;
	}
}
<!--{/if}-->
if(window.onload!=null){   
    window.onload=function(){auto_height();<!--{if $_G['basescript'] == 'forum' && CURMODULE == post }-->setTimeout(function(){
$('#fastsmilies').html('<table cellspacing="0" cellpadding="0" class="smilies"><tr>' + smilies_fastdata + '</tr></table>');},0);<!--{/if}-->};  
}

</script>

</body>
</html>
<!--{eval updatesession();}-->
<!--{if defined('IN_MOBILE')}-->
	<!--{eval output();}-->
<!--{else}-->
	<!--{eval output_preview();}-->
<!--{/if}-->
