<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('tagitem');?><?php include template('common/header'); if($tagname) { ?>

<div class="ct">
  <div class="pt"> <a href="forum.php?mod=forum"><?php echo m_lang('forum'); ?></a> <em> &gt; </em> <a href="misc.php?mod=tag">标签</a> 
    <?php if($tagname) { ?> 
    <em> &gt; </em> <a href="misc.php?mod=tag&amp;id=<?php echo $id;?>"><?php echo $tagname;?></a> 
    <?php } ?> 
    <?php if($showtype == 'thread') { ?> 
    <em> &gt; </em> 相关帖子 
    <?php } ?> 
    <?php if($showtype == 'blog') { ?> 
    <em> &gt; </em> 相关日志 
    <?php } ?> 
  </div>
  
  <?php if(empty($showtype) || $showtype == 'thread') { ?> 
<div class="threadlist">
  <?php if($threadlist) { ?>
  <ul id="alist">
    <?php if(is_array($threadlist)) foreach($threadlist as $thread) { ?>    <li class="thlist"> <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>">
      <h1> 
      <?php if($thread['folder'] == 'lock') { ?> 
      <span class="t_att"><?php echo m_lang('tlock'); ?></span> 
      <?php } elseif($thread['special'] == 1) { ?> 
      <span class="t_att"><?php echo m_lang('ts1'); ?></span> 
      <?php } elseif($thread['special'] == 2) { ?> 
      <span class="t_att"><?php echo m_lang('ts2'); ?></span> 
      <?php } elseif($thread['special'] == 3) { ?> 
      <span class="t_att"><?php echo m_lang('ts3'); ?></span> 
      <?php } elseif($thread['special'] == 4) { ?> 
      <span class="t_att"><?php echo m_lang('ts4'); ?></span> 
      <?php } elseif($thread['special'] == 5) { ?> 
      <span class="t_att"><?php echo m_lang('ts5'); ?></span> 
      <?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?> 
      <span class="t_att"><?php echo m_lang('tdis'); ?></span> 
      <?php } elseif($thread['digest'] > 0) { ?> 
      <span class="t_att"><?php echo m_lang('tdig'); ?></span> 
      <?php } elseif($thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0) { ?> 
      <span class="t_att"><?php echo m_lang('tatt'); ?></span> 
      <?php } else { ?> 
      <?php } ?> 
        <?php echo $thread['subject'];?> </h1>
      <p> 
        <?php if($thread['authorid'] && $thread['author']) { ?> 
        <?php echo $thread['author'];?><?php } else { if($_G['forum']['ismoderator']) { ?>匿名<?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } } ?><span class="pipe">-</span><?php echo $thread['dateline'];?> <span class="num"><?php if($thread['replies'] > 0) { ?><?php echo $thread['replies'];?><?php } else { ?>0<?php } ?></span></p>
      </a> </li>
    <?php } ?>
  </ul>
</div>
  <?php if(empty($showtype)) { ?>
  <div class="a_pg"><a href="misc.php?mod=tag&amp;id=<?php echo $id;?>&amp;type=thread">更多...</a></div>
  <?php } else { ?> 
  <?php if($multipage) { ?>
  <div class="pgbox"><?php echo $multipage;?></div>
  <?php } ?> 
  <?php } ?> 
  <?php } else { ?>
  <div class="wmt brtb">没有相关内容</div>
  <?php } ?> 
  
  <?php } ?> 
  
</div>
<?php } else { ?>
  <div class="pt"> <a href="forum.php?mod=forum"><?php echo m_lang('forum'); ?></a> <em> &gt; </em> <a href="misc.php?mod=tag">标签</a> </div>
    <div class="search">
      <form method="post" action="misc.php?mod=tag" class="pns">
<table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td><input type="text" name="name" class="input" placeholder="标签" /></td>
        <td width="84" align="right" class="scbar_btn_td"><div><button type="submit" class="button2">搜索</button></div></td>
</tr>
</tbody>
</table>
      </form>
      </div>
  <div class="wmt brtb notb">没有此标签，您可以继续搜索或者<a href="misc.php?mod=tag" title="返回标签首页">返回标签首页</a></div>

<?php } ?> <?php include template('common/footer'); ?>