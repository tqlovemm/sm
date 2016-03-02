<?PHP exit('Access Denied');?>
<!--{if CURMODULE != 'logging'}-->
<div class="tt_before_login" style="">
				<script type="text/javascript" src="{$_G[setting][jspath]}logging.js?{VERHASH}"></script>
  <form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&action=login&loginsubmit=yes&infloat=yes&lssubmit=yes" onsubmit="{if $_G['setting']['pwdsafety']}pwmd5('ls_password');{/if}return lsSubmit();">
					<span id="return_ls" style="display:none"></span>
					<input type="hidden" name="formhash" value="{FORMHASH}" />
					<input type="hidden" name="handlekey" value="ls">
					<input type="hidden" name="quickforward" value="yes">
					<!--{if $auth}-->
						<input type="hidden" name="auth" value="$auth" />
					<!--{/if}-->
                    <table width="0" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td colspan="2"><div class="tt_header_login_txt"><h6>用户名/邮箱</h6><input name="username" id="ls_username" autocomplete="off" value="" class="tt_txt tt_login_txt tt_login_focus" /></div></td>
                      </tr>
                      <tr>
                        <td colspan="2"><div class="tt_header_login_txt"><h6>请输入您的密码</h6><input id="ls_password" name="password" onFocus="" type="password" value="" class="tt_txt tt_login_password tt_login_focus" /></div></td>
                      </tr>
                      <tr>
                        <td><label><input type="checkbox" class="" name="cookietime" id="cookietime_$loginhash" tabindex="1" value="2592000" $cookietimecheck />自动登录</label></td>
                        <td align="right"><a href="javascript:;" target="" onClick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">忘记密码？</a></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="submit" class="tt_btn" value="登录" /></td>
                      </tr>
                    </table>
                    <table width="0" border="0" cellspacing="0" cellpadding="0" class="tt_other_login">
                      <tr>
                        <th valign="middle"><a href="connect.php?mod=login&op=init&referer=forum.php&statfrom=login_simple" target=""><img src="$_G['style']['styleimgdir']/login_icon_1.png" />QQ账号登录</a></th>
                        <td valign="middle"><a href="member.php?mod=register" target="">立即注册>></a></td>
                      </tr>
                    </table>
  </form>
<!--{if $_G['setting']['pwdsafety']}-->
		<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
	<!--{/if}-->
                </div>

<!--{/if}-->