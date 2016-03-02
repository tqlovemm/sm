<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

//语言, 如修改注意标点符号
function m_lang($f) {	
$m_lang = array(
	'home' => '首页',
	'portal' => '门户',
	'forum' => '论坛',
	'pic' => '美图',
	'guide' => '导读',
	'tag' => '标签',
	'channel' => '频道',
	'me' => '我',
	'mdoing' => '记录',
	'mfollow' => '广播',
	'mfriend' => '好友',
	'mfriendall' => '全部',
	'mfriendol' => '在线好友',
	'mfriendbl' => '黑名单',
	'mfriendrq' => '好友请求',
	'mfriendprofile' => '资料',
	'mfriendgroup' => '分组',
	'mefriend_doing' => '我和好友',
	'friend_feed' => '好友动态',
	'mblog' => '日志',
	'mfeed' => '动态',
	'photo' => '相册',
	'subfrm' => '子版块',
	'thtys' => '分类',
	'pta' => '发表于',
	'acom' => '查看评论',
	'od' => '条',
	'tt' => '共有',
	'tlock' => '关闭',
	'ts1' => '投票',
	'ts2' => '商品',
	'ts3' => '悬赏',
	'ts4' => '活动',
	'ts5' => '辩论',
	'tdis' => '置顶',
	'tdig' => '精华',
	'tatt' => '图片',
	'post' => '发帖',
	'mthread' => '帖子',
	'mforum' => '版块',
	'profile' => '个人资料',
	'favorite' => '我的收藏',
	'mypm' => '我的消息',
	'arc' => '文章',	
	'back' => '返回',
	'search' => '搜索',
	'searchportal' => '搜索文章',
	'new_remind' => '有新提醒',	
	'tthread' => '正文',
	'noid' => '没有账号?',
	'yesid' => '已有账号?',	
	'load' => '加载更多',
	'load_photo' => '查看更多图片',
	'load_pic' => '加载中...',
	'ucspeed' => '请关闭UC浏览器的急速模式后<br />再尝试刷新此页面',			
	'openhome' => '进入官网',			
	'indextopnav' => '网站导航'			
    );
	if($m_lang[$f]) $f = $m_lang[$f]; 
	if(CHARSET =='gbk'){
		return $f;
	}else{
		return diconv($f,'GBK',CHARSET);
	}
}

?>