<?php exit;?>
<!--{template common/header}-->
<!--{if $_GET['mod'] == 'piclist'}-->
        <!--{template portal/indexpiclist}-->
<!--{elseif $_GET['mod'] == 'photo'}-->
        <!--{template portal/photo}-->
<!--{elseif $_GET['mod'] == 'portal'}-->
    <!--{if $ceo_indexdefault == 2}-->
        <!--{eval tplhtmlcode('portal_code',$ceo_portalcode);}-->
    <!--{else}-->
        <!--{eval dheader("location: $indexurl");exit; }-->
    <!--{/if}-->
<!--{else}-->
    <!--{if $ceo_indexdiyopen != 0 && $_GET['forumlist'] != 1}-->
        <!--{eval dheader("location: $indexurl");exit; }-->
    <!--{/if}-->

<!--{if $_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1}-->
	<!--{eval dheader('Location:forum.php?mod=guide&view=hot');exit;}-->
<!--{/if}-->

<script type="text/javascript">
	function getvisitclienthref() {
		var visitclienthref = '';
		if(ios) {
			visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
		} else if(andriod) {
			visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
		}
		return visitclienthref;
	}
</script>

<!--{hook/index_top_mobile}-->
<!-- main forumlist start -->

	<!--{loop $catlist $key $cat}-->
	<div class="catlist">
		<div class="subforumshow cl" href="#sub_forum_$cat[fid]">        			
		<h1><span class="iconfont i_cathead">&#xe816;</span> $cat[name]<span class="y"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/collapsed_<!--{if !$_G[setting][mobile][mobileforumview]}-->yes<!--{else}-->no<!--{/if}-->.png"></span></h1>
        </div>
			<ul class="s_forum" id="sub_forum_$cat[fid]">
            <!--{eval $i=1;}-->
            <!--{loop $cat[forums] $forumid}-->
                <!--{eval $sum=count($cat[forums]);}-->
                <li class="<!--{if $i!=$sum}-->brtb<!--{/if}-->">              
                <!--{eval $i++;}-->
                    <!--{eval $forum=$forumlist[$forumid];}-->
                    <!--{if $forum[icon]}-->
					$forum[icon]
					<!--{else}-->
					<a href="forum.php?mod=forumdisplay&fid={$forum['fid']}"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/forum{if $forum[folder]}_new{/if}.png"/></a>
					<!--{/if}-->                    
                    <a href="forum.php?mod=forumdisplay&fid={$forum['fid']}" class="a">
                    <p class="f_nm f15">{$forum[name]}</p>
                    <!--{if $ceo_forumdesorpos == 1}-->
                    <!--{if $forum[description]}--><p class="f11 xg1 f_dp">{echo cutstr(strip_tags($forum[description]),40)}</p><!--{/if}-->
                    <!--{else}-->
                    <!--{if empty($forum[redirect])}--><p class="f11 xg1 f_dp"><em>{lang forum_threads}: <!--{echo dnumber($forum[threads])}--></em><em>{lang forum_posts}: <!--{echo dnumber($forum[posts])}--></em></p><!--{/if}-->
                    <!--{/if}-->
                    </a>
                </li>
            <!--{/loop}-->
			</ul>

	</div>
	<!--{/loop}-->

<!-- main forumlist end -->
<!--{hook/index_middle_mobile}-->
<script type="text/javascript">
	(function() {
		<!--{if !$_G[setting][mobile][mobileforumview]}-->
			$('.s_forum').css('display', 'block');
		<!--{else}-->
			$('.s_forum').css('display', 'none');
		<!--{/if}-->
		$('.subforumshow').on('click', function() {
			var obj = $(this);
			var subobj = $(obj.attr('href'));
			if(subobj.css('display') == 'none') {
				subobj.css('display', 'block');
				obj.find('img').attr('src', 'template/yingxiao_toutiao2_m/toutiao_mobile/img/collapsed_yes.png');
			} else {
				subobj.css('display', 'none');
				obj.find('img').attr('src', 'template/yingxiao_toutiao2_m/toutiao_mobile/img/collapsed_no.png');
			}
		});
	 })();
</script>
<!--{/if}-->
<!--{template common/footer}-->
