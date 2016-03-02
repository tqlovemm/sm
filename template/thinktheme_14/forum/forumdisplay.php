<?PHP exit('Access Denied');?>
<!--{subtemplate common/header}-->
<style type="text/css">
	.tt_list_info .bm .bm_h{ border:none; height:auto; }
	.tt_list_info .bm .bm_h h2{border-bottom:2px solid #eaeaea; margin-bottom:10px;}
	.tt_list_info .bm .bm_h h2 a{ font-size: 18px;color: #ff6600;display: inline-block;border-bottom: 2px solid #ff6600;position: relative;line-height: 150%; top:2px; z-index:2; padding-bottom:5px;}
	.forum_banner{margin:10px 0;clear:both;}
	.forum_banner img{max-width: 100%;}
	.forum_extra{padding:20px;}
	.forum_rules{clear:both;}
	.tt_list_info{overflow: hidden;}
	.rss_dingyue{
		position: absolute;
		right: 20px;
		top: 16px;
		color: #ff6600;		
	}
	.rss_dingyue img{
		position: relative;
		top: 2px;
		margin-right: 3px;		
	}
	.tt_list_info .tt_shoucang{right:75px;top:16px;}
	.tt_list_info .tt_list_info_des{padding-top:0;}
	
</style>
<!--{if $_G['forum']['ismoderator']}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}forum_moderate.js?{VERHASH}"></script>
<!--{/if}-->
	<script type="text/javascript">
	function changeclass(){
		if(!jQuery("#a_favorite").hasClass("tt_yishoucang")){
			jQuery("#a_favorite").addClass("tt_yishoucang");
		}
	}
	</script>
<style id="diy_style" type="text/css"></style>

    <div id="tt_content" class="cl">
	
		<div class="tt_mianbaoxie">您现在的位置：<a href="forum.php">论坛</a> > {$_G[forum]['name']}</div>
		
		<div class="tt_list_info cl">
			<div id="" class="forum_extra">
			<div>
			<!-- <div class="z tt_list_info_icon">{if $_G[forum]['icon']}<img src="data/attachment/common/$_G[forum]['icon']" />{/if}</div> -->
			<dl class="z tt_list_info_des">
				<dt>{$_G[forum]['name']}</dt>
				<dd>主题：{$_G[forum]['threads']}<span class="pipe">|</span> 帖数：{$_G[forum]['posts']} <span class="pipe">|</span> 最后发表：{eval $lastpostime = explode('	',$_G['forum']['lastpost']); echo dgmdate($lastpostime[2], 'u' , '9999','m-d');}</dd>
				<dd><!--{if $moderatedby}--><font>{lang forum_modedby}: $moderatedby</font><!--{/if}--></dd>
			</dl>
			<a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum" id="a_favorite" class="tt_shoucang {if $favorited}tt_yishoucang{/if}" onclick="changeclass();showWindow(this.id, this.href, 'get', 0);"><img src="$_G['style']['styleimgdir']/shoucang.png" class="tt_shoucang_1" /><img src="$_G['style']['styleimgdir']/shoucang2.png" class="tt_shoucang_2" />{lang forum_favorite}</a>
			<!--{if rssforumperm($_G['forum']) && $_G[setting][rssstatus] && !$_GET['archiveid'] && !$subforumonly}--> <a href="forum.php?mod=rss&fid=$_G[fid]&auth=$rssauth" class="rss_dingyue" target="_blank" title="RSS"><img src="$_G['style']['styleimgdir']/rss.png">{lang rss_subscribe_this}</a><!--{/if}-->	
				<br style="clear:both;" />
				</div>
				<!--{if $_G[forum][banner] && !$subforumonly}--><div id="" class="forum_banner"><img class="" src="$_G[forum][banner]" alt="$_G['forum'][name]" /></div><!--{/if}-->
                <!--{if $subexists && $_G['page'] == 1}--><!--{template forum/forumdisplay_subforum}--><!--{/if}-->
				<!--[diy=tt_forumlist]--><div id="tt_forumlist" class="area"></div><!--[/diy]-->
				<!--{if $_G['page'] == 1 && $_G['forum']['rules']}-->
							<div id="forum_rules_{$_G[fid]}" class="forum_rules" style="">
								<div class="ptn xg2">$_G['forum'][rules]</div>
							</div>
				<!--{/if}-->
				</div>
		</div>
        
            <div class="tt_in_content_list">        
			
				<!--{hook/forumdisplay_threadtype_inner}-->
				<ul class="tt_list_tab_t cl">
					<a id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="tt_hover"{/if} href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang forum_viewall}</a>
					<!--{if $_G['forum']['threadtypes']}-->
						<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
							<!--{if $_GET['typeid'] == $id}-->
							<span class="pipe">|</span> <a class="tt_hover" href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name</a>
							<!--{else}-->
							<span class="pipe">|</span> <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name</a>
							<!--{/if}-->
						<!--{/loop}-->
					<!--{/if}-->
				</ul>                                                    
               	<!--{hook/forumdisplay_threadtype_extra}-->
				<!--{if empty($_G['forum']['sortmode'])}-->
					<!--{subtemplate forum/forumdisplay_list}-->
				<!--{else}-->
					<!--{subtemplate forum/forumdisplay_sort}-->
				<!--{/if}-->              
                            
            </div> 
			
    </div>
<!--{subtemplate common/footer}-->