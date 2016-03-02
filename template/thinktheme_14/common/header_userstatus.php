<?PHP exit('Access Denied');?>
<div class="tt_header_nav_right y">
        	<div class="tt_header_nav_right_btn">
			<!--{if $_G['uid']}-->
			$_G[username]
			<!--{else}-->
                登录/注册
			<!--{/if}-->
                <img src="$_G['style']['styleimgdir']/tt_narrow1.png" class="img_1" /><img src="$_G['style']['styleimgdir']/tt_narrow2.png" class="img_2" />
            </div>
            <div class="tt_login_box">
                <!--{if $_G['uid']}-->
                <div class="tt_after_login">
                	<div class="tt_after_login_info cl">
                    	<a href="home.php?mod=space&uid=$_G[uid]" target="" class="tt_after_login_info_img z"><!--{avatar($_G[uid],middle)}--></a>
                        <div class="tt_after_login_info_des z">
                        	<a href="home.php?mod=space&uid=$_G[uid]" target="" class="tt_info_des_name">$_G[username]</a>
                            <span class="tt_info_des_level">$_G[group][grouptitle]</span>
                            <ul class="tt_info_des_list cl">

		<!--{loop $_G['setting']['extcredits'] $extcreditid $extcredit}--><!--{if empty($extcredit['hiddeninheader'])}-->
			<li><a><span id="hcredit_$extcreditid"><!--{echo getuserprofile('extcredits'.$extcreditid);}-->{$extcredit[unit]}</span><br />{$extcredit[img]} $extcredit[title]</a></li><!--{/if}-->
		<!--{/loop}-->
                                
                            </ul>
                        </div>
                    </div>
                    <div class="tt_after_login_center">
                    	<div class="tt_after_login_center_top">
                        	<a href="home.php?mod=space&do=pm" target=""><img src="$_G['style']['styleimgdir']/icon_1.png" />消息<div id="newpmcount"></div></a>
                            <a href="home.php?mod=space&do=notice" target=""><img src="$_G['style']['styleimgdir']/icon_2.png" />提醒<!--{if $_G[member][newprompt]}--><div><span>$_G[member][newprompt]</span><br /><img src="$_G['style']['styleimgdir']/header_tips.png" /></div><!--{/if}--></a>
                            <a href="home.php?mod=spacecp" target=""><img src="$_G['style']['styleimgdir']/icon_3.png" />设置</a>
                            <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}" target="" style="margin-right:0;"><img src="$_G['style']['styleimgdir']/icon_4.png" />退出</a>
                        </div>
                        <div class="tt_after_login_center_bottom cl">
                        	<!--{hook/global_usernav_extra1}-->
                            
                        </div>
                    </div>
                    <div class="tt_after_login_bottom">
                    	<h3>快捷导航</h3>
						<ul class="cl">
						<!--{loop $_G['setting']['mynavs'] $nav}-->
				<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->
					<li>$nav[code]</li>
				<!--{/if}-->
			<!--{/loop}-->
					</ul>
                    </div>
                </div>
				<!--{else}-->
	<!--{template member/login_simple}-->
                
                
				<!--{/if}-->
				
            </div>
        </div>