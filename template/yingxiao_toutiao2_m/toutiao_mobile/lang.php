<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

//����, ���޸�ע�������
function m_lang($f) {	
$m_lang = array(
	'home' => '��ҳ',
	'portal' => '�Ż�',
	'forum' => '��̳',
	'pic' => '��ͼ',
	'guide' => '����',
	'tag' => '��ǩ',
	'channel' => 'Ƶ��',
	'me' => '��',
	'mdoing' => '��¼',
	'mfollow' => '�㲥',
	'mfriend' => '����',
	'mfriendall' => 'ȫ��',
	'mfriendol' => '���ߺ���',
	'mfriendbl' => '������',
	'mfriendrq' => '��������',
	'mfriendprofile' => '����',
	'mfriendgroup' => '����',
	'mefriend_doing' => '�Һͺ���',
	'friend_feed' => '���Ѷ�̬',
	'mblog' => '��־',
	'mfeed' => '��̬',
	'photo' => '���',
	'subfrm' => '�Ӱ��',
	'thtys' => '����',
	'pta' => '������',
	'acom' => '�鿴����',
	'od' => '��',
	'tt' => '����',
	'tlock' => '�ر�',
	'ts1' => 'ͶƱ',
	'ts2' => '��Ʒ',
	'ts3' => '����',
	'ts4' => '�',
	'ts5' => '����',
	'tdis' => '�ö�',
	'tdig' => '����',
	'tatt' => 'ͼƬ',
	'post' => '����',
	'mthread' => '����',
	'mforum' => '���',
	'profile' => '��������',
	'favorite' => '�ҵ��ղ�',
	'mypm' => '�ҵ���Ϣ',
	'arc' => '����',	
	'back' => '����',
	'search' => '����',
	'searchportal' => '��������',
	'new_remind' => '��������',	
	'tthread' => '����',
	'noid' => 'û���˺�?',
	'yesid' => '�����˺�?',	
	'load' => '���ظ���',
	'load_photo' => '�鿴����ͼƬ',
	'load_pic' => '������...',
	'ucspeed' => '��ر�UC������ļ���ģʽ��<br />�ٳ���ˢ�´�ҳ��',			
	'openhome' => '�������',			
	'indextopnav' => '��վ����'			
    );
	if($m_lang[$f]) $f = $m_lang[$f]; 
	if(CHARSET =='gbk'){
		return $f;
	}else{
		return diconv($f,'GBK',CHARSET);
	}
}

?>