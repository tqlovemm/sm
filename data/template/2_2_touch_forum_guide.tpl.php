<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('guide');?><?php include template('common/header'); ?><div class="ct">
    <div class="pt"><a href="forum.php"><?php echo m_lang('home'); ?></a> <em> &gt; </em> <a href="forum.php?mod=guide&amp;view=newthread"><?php echo m_lang('guide'); ?></a></div>
    <div class="mmt mmt_gd">				
        <a href="forum.php?mod=guide&amp;view=newthread" class="lb<?php if($view == 'newthread') { ?> a<?php } ?>">最新发表</a>				
        <a href="forum.php?mod=guide&amp;view=hot" class="nb<?php if($view == 'hot') { ?> a<?php } ?>">最新热门</a>
        <a href="forum.php?mod=guide&amp;view=digest" class="rb<?php if($view == 'digest') { ?> a<?php } ?>">最新精华</a>
    </div>
    <div class="threadlist">
<?php if($view == 'index') { dheader("location: forum.php?mod=guide&view=newthread");exit;?><?php } elseif($view == 'hot') { ?>
    <?php if(is_array($data)) foreach($data as $key => $list) { ?>            <ul>                      
                <?php if($list['threadcount']) { ?>					 			
                    <?php if(is_array($list['threadlist'])) foreach($list['threadlist'] as $thread) { ?>                    <?php if($key == 'hot') { ?>
                    <li class="thlist thlist_gd">
                    <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>" class="guide">
                    <span class="rep"><?php echo $thread['replies'];?></span>
                    <h1><?php echo $thread['subject'];?></h1>
                    <p><?php echo $list['forumnames'][$thread['fid']]['name'];?><span class="pipe">-</span><?php if($thread['authorid'] && $thread['author']) { ?><?php echo $thread['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?><span class="pipe">-</span><?php echo $thread['lastpost'];?></p>                                
                    </a>
                    </li>
                    <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                <li class="wmt brtb">暂时还没有帖子</li>					 		
                <?php } ?>                            
            </ul>
    <?php } ?>				
<?php } elseif($view == 'digest') { ?>
    <?php if(is_array($data)) foreach($data as $key => $list) { ?>            <ul>                      
                <?php if($list['threadcount']) { ?>					 			
                    <?php if(is_array($list['threadlist'])) foreach($list['threadlist'] as $thread) { ?>                    <?php if($key == 'digest') { ?>
                    <li class="thlist thlist_gd">
                    <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>" class="guide">
                    <span class="rep"><?php echo $thread['replies'];?></span>
                    <h1><?php echo $thread['subject'];?></h1>
                    <p><?php echo $list['forumnames'][$thread['fid']]['name'];?><span class="pipe">-</span><?php if($thread['authorid'] && $thread['author']) { ?><?php echo $thread['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?><span class="pipe">-</span><?php echo $thread['lastpost'];?></p>                                
                    </a>
                    </li>
                    <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                <li class="wmt brtb">暂时还没有帖子</li>					 		
                <?php } ?>                            
            </ul>
    <?php } ?>
    <?php } elseif($view == 'newthread') { ?>   
    <?php if(is_array($data)) foreach($data as $key => $list) { ?>    <?php //var_dump($list['threadlist']);?>            <ul>                      
                <?php if($list['threadcount']) { ?>					 			
                    <?php if(is_array($list['threadlist'])) foreach($list['threadlist'] as $thread) { ?>                    <?php if($key == 'newthread') { ?>
                    <li class="thlist thlist_gd">
                    <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>" class="guide">
                    <span class="rep"><?php echo $thread['replies'];?></span>
                    <h1><?php echo $thread['subject'];?></h1>
                    <p><?php echo $list['forumnames'][$thread['fid']]['name'];?><span class="pipe">-</span><?php if($thread['authorid'] && $thread['author']) { ?><?php echo $thread['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?><span class="pipe">-</span><?php echo $thread['lastpost'];?></p>                                
                    </a>
                    </li>
                    <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                <?php if($key == 'newthread') { ?>
                <li class="wmt brtb">暂时还没有帖子</li>	
                <?php } ?>  				 		
                <?php } ?>                            
            </ul>
    <?php } ?>  
<?php } ?>
    </div>
</div><?php include template('common/footer'); ?>