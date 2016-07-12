<?php exit;?>
<!--{template common/header}-->
<div class="ct">
    <div class="pt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="forum.php?mod=guide&view=newthread">{echo m_lang('guide')}</a></div>
    <div class="mmt mmt_gd">				
        <a href="forum.php?mod=guide&view=newthread" class="lb{if $view == 'newthread'} a{/if}">{lang guide_newthread}</a>				
        <a href="forum.php?mod=guide&view=hot" class="nb{if $view == 'hot'} a{/if}">{lang guide_hot}</a>
        <a href="forum.php?mod=guide&view=digest" class="rb{if $view == 'digest'} a{/if}">{lang guide_digest}</a>
    </div>
    <div class="threadlist">
<!--{if $view == 'index'}-->
<!--{eval dheader("location: forum.php?mod=guide&view=newthread");exit; }-->
<!--{elseif $view == 'hot'}-->
    <!--{loop $data $key $list}-->
            <ul>                      
                <!--{if $list['threadcount']}-->					 			
                    <!--{loop $list['threadlist'] $thread}-->
                    <!--{if $key == 'hot'}-->
                    <li class="thlist thlist_gd">
                    <a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" class="guide">
                    <span class="rep">{$thread[replies]}</span>
                    <h1>$thread[subject]</h1>
                    <p>$list['forumnames'][$thread[fid]]['name']<span class="pipe">-</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="pipe">-</span>$thread['lastpost']</p>                                
                    </a>
                    </li>
                    <!--{/if}-->
                    <!--{/loop}-->
                <!--{else}-->
                <li class="wmt brtb">{lang guide_nothreads}</li>					 		
                <!--{/if}-->                            
            </ul>
    <!--{/loop}-->				
<!--{elseif $view == 'digest'}-->
    <!--{loop $data $key $list}-->
            <ul>                      
                <!--{if $list['threadcount']}-->					 			
                    <!--{loop $list['threadlist'] $thread}-->
                    <!--{if $key == 'digest'}-->
                    <li class="thlist thlist_gd">
                    <a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" class="guide">
                    <span class="rep">{$thread[replies]}</span>
                    <h1>$thread[subject]</h1>
                    <p>$list['forumnames'][$thread[fid]]['name']<span class="pipe">-</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="pipe">-</span>$thread['lastpost']</p>                                
                    </a>
                    </li>
                    <!--{/if}-->
                    <!--{/loop}-->
                <!--{else}-->
                <li class="wmt brtb">{lang guide_nothreads}</li>					 		
                <!--{/if}-->                            
            </ul>
    <!--{/loop}-->
    <!--{elseif $view == 'newthread'}-->   
    <!--{loop $data $key $list}-->
    <!--{eval //var_dump($list['threadlist']);}-->
            <ul>                      
                <!--{if $list['threadcount']}-->					 			
                    <!--{loop $list['threadlist'] $thread}-->
                    <!--{if $key == 'newthread'}-->
                    <li class="thlist thlist_gd">
                    <a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" class="guide">
                    <span class="rep">{$thread[replies]}</span>
                    <h1>$thread[subject]</h1>
                    <p>$list['forumnames'][$thread[fid]]['name']<span class="pipe">-</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="pipe">-</span>$thread['lastpost']</p>                                
                    </a>
                    </li>
                    <!--{/if}-->
                    <!--{/loop}-->
                <!--{else}-->
                <!--{if $key == 'newthread'}-->
                <li class="wmt brtb">{lang guide_nothreads}</li>	
                <!--{/if}-->  				 		
                <!--{/if}-->                            
            </ul>
    <!--{/loop}-->  
<!--{/if}-->
    </div>
</div>
<!--{template common/footer}-->
