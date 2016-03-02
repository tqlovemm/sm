<?php
if ( !defined( "IN_DISCUZ" ) )
{
		exit( "Access Denied" );
}
if ( !isset( $_G['cache']['plugin'] ) )
{
		loadcache( "plugin" );
}
if( $_G['cache']['plugin']['yingxiao_mobile_set'])
{
	@extract( $_G['cache']['plugin']['yingxiao_mobile_set'] );

}
else
{
	$ceo_mbtoolopen = 1;
}

if ( $ceo_indexdiyopen == 1 )
{
	if ( $ceo_indexdefault == 1 )
	{
			$indexurl = "forum.php?forumlist=1&mobile=2";
	}
	else if ( $ceo_indexdefault == 2 )
	{
			$indexurl = "forum.php?mod=portal&mobile=2";
	}
	else if ( $ceo_indexdefault == 3 )
	{
		$indexurl = "forum.php?mod=piclist&mobile=2";
	}
	else if ( $ceo_indexdefault == 4 )
	{
			$indexurl = "forum.php?mod=guide&view=newthread&mobile=2";
	}
	else if ( $ceo_indexdefault == 5 )
	{
			$indexurl = "forum.php?mod=forumdisplay&fid=" . $ceo_indexforum . "&mobile=2";
	}
	else if ( $ceo_indexdefault == 6 )
	{
			$indexurl = "forum.php?mod=photo&mobile=2";
	}
}
else
{
	$indexurl = "forum.php?forumlist=1&mobile=2";
}

/*if ( $ceo_indexdefault == 1 )
{
		$indexurl = "forum.php?mod=portal&mobile=2";
}
else if ( $ceo_indexdefault == 2 )
{
		$indexurl = "forum.php?mod=guide&view=newthread&mobile=2";
}
else if ( $ceo_indexdefault == 3 )
{
		$indexurl = "forum.php?mod=piclist&mobile=2";
}
else
{
		$indexurl = "forum.php?forumlist=1&mobile=2";
}
*/
$useragent = $_SERVER['HTTP_USER_AGENT'];
preg_match( "/UCWEB/", $useragent, $match );
if ( $match && ( strpos( $useragent, "iPh" ) || strpos( $useragent, "wds" ) ) )
{
		header( "location:forum.php?mobile=1" );
}

$php_uri = substr($_SERVER['REQUEST_URI'],strrpos($_SERVER['REQUEST_URI'],'/')+1);
$php_self = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
$php_indexurl = strrpos($php_uri, $indexurl);


?>
