<?php exit;?>
<div class="pd2">
    <input type="hidden" name="polls" value="yes" />
    <input type="hidden" name="fid" value="$_G[fid]" />

    <!--{if $_GET[action] == 'newthread'}-->
        <input type="hidden" name="tpolloption" value="2" />
        <p class="mbm" style="margin-right:14px;">
        <textarea name="polloptions" class="txt"  rows="3"  placeholder="{lang post_poll_options}: {lang post_poll_comment_s},{lang post_poll_comment}" /></textarea>
        </p>
        
    <!--{else}-->
        <!--{loop $poll['polloption'] $key $option}-->
            <p class="mbm">
                <input type="hidden" name="polloptionid[{$poll[polloptionid][$key]}]" value="$poll[polloptionid][$key]" />
                <input type="text" name="displayorder[{$poll[polloptionid][$key]}]" class="txt_s" autocomplete="off"  value="$poll[displayorder][$key]" />
                <input type="text" name="polloption[{$poll[polloptionid][$key]}]" class="txt_s" autocomplete="off" style="width:290px;"  value="$option"{if !$_G['group']['alloweditpoll']} readonly="readonly"{/if} />
            </p>
        <!--{/loop}-->
    <!--{/if}-->


    <div >
        <p class="mbm">
            <input type="text" name="maxchoices" id="maxchoices" class="txt_s" placeholder="{lang post_poll_allowmultiple} {if $_GET[action] == 'edit' && $poll[maxchoices]}$poll[maxchoices]{else}1{/if}"  /> {lang post_option}
        </p>
        <p class="mbm">
            <input type="text" name="expiration" id="polldatas" class="txt_s" placeholder="{lang post_poll_expiration}" /> {lang days}
        </p>
        <p class="mbm">
            <input type="checkbox" name="visibilitypoll" id="visibilitypoll" class="pc" value="1"{if $_GET[action] == 'edit' && !$poll[visible]} checked{/if}  />
            <label for="visibilitypoll">{lang poll_after_result}</label>
        </p>
        <p class="mbm">
            <input type="checkbox" name="overt" id="overt" class="pc" value="1"{if $_GET[action] == 'edit' && $poll[overt]} checked{/if}  />
            <label for="overt">{lang post_poll_overt}</label>
        </p>
    </div>
</div>