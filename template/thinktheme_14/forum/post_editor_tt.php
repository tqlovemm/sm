<?PHP exit('Access Denied');?>
<div id="psd" class="appl">
	<h3 class="tt_right_side_box_t ptm">{lang post_additional_options}</h3>
	<div class="bn ptw">
		<!--{hook/post_side_top}-->
		<!--{if ($_G['forum']['allowhtml'] || ($_GET[action] == 'edit' && ($orig['htmlon'] & 1))) && $_G['group']['allowhtml']}-->
			<p class="mbn"><input type="checkbox" name="htmlon" id="htmlon" class="pc" value="1" $htmloncheck /><label for="htmlon">{lang post_html}</label></p>
		<!--{else}-->
			<p class="mbn"><input type="checkbox" name="htmlon" id="htmlon" class="pc" value="0" $htmloncheck disabled="disabled" /><label for="htmlon">{lang post_html}</label></p>
		<!--{/if}-->
		<p class="mbn"><input type="checkbox" id="allowimgcode" class="pc" disabled="disabled"{if $_G['forum']['allowimgcode']} checked="checked"{/if} /><label for="allowimgcode">{lang post_imgcode}</label></p>
		<!--{if $_G['forum']['allowimgcode']}-->
			<p class="mbn"><input type="checkbox" id="allowimgurl" class="pc" checked="checked" /><label for="allowimgurl">{lang post_imgurl}</label></p>
		<!--{/if}-->
		<p class="mbn"><input type="checkbox" name="parseurloff" id="parseurloff" class="pc" value="1" $urloffcheck /><label for="parseurloff">{lang disable}{lang post_parseurl}</label></p>
		<p class="mbn"><input type="checkbox" name="smileyoff" id="smileyoff" class="pc" value="1" $smileyoffcheck /><label for="smileyoff">{lang disable}{lang smilies}</label></p>
		<p class="mbn"><input type="checkbox" name="bbcodeoff" id="bbcodeoff" class="pc" value="1" $codeoffcheck /><label for="bbcodeoff">{lang disable}{lang discuzcode}</label></p>

		<hr class="bk" />

		<p class="mbn"><input type="checkbox" name="usesig" id="usesig" class="pc" value="1" {if !$_G['group']['maxsigsize']}disabled {else}$usesigcheck {/if}/><label for="usesig">{lang post_show_sig}</label></p>
		<!--{if $_GET[action] != 'edit'}-->
			<!--{if $_G['group']['allowanonymous']}--><p class="mbn"><input type="checkbox" name="isanonymous" id="isanonymous" class="pc" value="1" /><label for="isanonymous">{lang post_anonymous}</label></p><!--{/if}-->
		<!--{else}-->
			<!--{if $_G['group']['allowanonymous'] || (!$_G['group']['allowanonymous'] && $orig['anonymous'])}--><p class="mbn"><input type="checkbox" name="isanonymous" id="isanonymous" class="pc" value="1" {if $orig['anonymous']}checked="checked"{/if} /><label for="isanonymous">{lang post_anonymous}</label></p><!--{/if}-->
		<!--{/if}-->

		<!--{if $_GET[action] == 'newthread' || $_GET[action] == 'edit' && $isfirstpost}-->
			<p class="mbn"><input type="checkbox" name="hiddenreplies" id="hiddenreplies" class="pc"{if $thread['hiddenreplies']} checked="checked"{/if} value="1"><label for="hiddenreplies">{lang hiddenreplies}</label></p>
		<!--{/if}-->
		<!--{if $_G['uid'] && ($_GET[action] == 'newthread' || $_GET[action] == 'edit' && $isfirstpost) && $special != 3}-->
			<p class="mbn"><input type="checkbox" name="ordertype" id="ordertype" class="pc" value="1" $ordertypecheck /><label for="ordertype">{lang post_descviewdefault}</label></p>
		<!--{/if}-->
		<!--{if ($_GET[action] == 'newthread' || $_GET[action] == 'edit' && $isfirstpost)}-->
			<p class="mbn"><input type="checkbox" name="allownoticeauthor" id="allownoticeauthor" class="pc" value="1"{if $allownoticeauthor} checked="checked"{/if} /><label for="allownoticeauthor">{lang post_noticeauthor}</label></p>
		<!--{/if}-->
		<!--{if $_GET[action] != 'edit' && helper_access::check_module('feed') && $_G['forum']['allowfeed']}-->
			<p class="mbn"><input type="checkbox" name="addfeed" id="addfeed" class="pc" value="1" $addfeedcheck><label for="addfeed">{lang addfeed}</label></p>
		<!--{/if}-->

		<!--{if $_GET[action] == 'newthread' && $_G['forum']['ismoderator'] && ($_G['group']['allowdirectpost'] || !$_G['forum']['modnewposts'])}-->
			<hr class="bk" />

			<!--{if $_GET[action] == 'newthread' && $_G['forum']['ismoderator'] && ($_G['group']['allowdirectpost'] || !$_G['forum']['modnewposts'])}-->
				<!--{if $_G['group']['allowstickthread']}-->
					<p class="mbn"><input type="checkbox" name="sticktopic" id="sticktopic" class="pc" value="1" $stickcheck /><label for="sticktopic">{lang post_stick_thread}</label></p>
				<!--{/if}-->
				<!--{if $_G['group']['allowdigestthread']}-->
					<p class="mbn"><input type="checkbox" name="addtodigest" id="addtodigest" class="pc" value="1" $digestcheck /><label for="addtodigest">{lang post_digest_thread}</label></p>
				<!--{/if}-->
			<!--{/if}-->
		<!--{elseif $_GET[action] == 'edit' && $_G['forum_auditstatuson']}-->
			<hr class="bk" />

			<p class="mbn"><input type="checkbox" name="audit" id="audit" class="pc" value="1"><label for="audit">{lang auditstatuson}</label></p>
		<!--{/if}-->
	</div>
	<!--{hook/post_side_bottom}-->
	<!--{if $_GET[action] == 'edit' && $isorigauthor && ($isfirstpost && $thread['replies'] < 1 || !$isfirstpost) && !$rushreply && $_G['setting']['editperdel']}-->
		<div class="ptm hm">
			<input type="hidden" name="delete" id="delete" value="0" />
			<hr class="l" />
			<p class="ptm pbn"><button type="button" class="pn" onclick="deleteThread();"><span style="white-space: nowrap">{lang post_delpost}</span></button></p>
			<p class="xw1 xi1">{lang del_thread_warning}<!--{if $thread[special] == 3}-->, {lang reward_price_back}<!--{/if}--></p>
		</div>
	<!--{/if}-->
</div>