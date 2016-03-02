<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('tag');?><?php include template('common/header'); if($type != 'countitem') { ?>

  <div class="pt"> <a href="forum.php?mod=forum"><?php echo m_lang('forum'); ?></a> <em> &gt; </em> <a href="misc.php?mod=tag">标签</a> </div>
<section>
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
      <?php if($tagarray) { ?>
      <div class="taglist"> 
        <?php if(is_array($tagarray)) foreach($tagarray as $tag) { ?> 
        <a href="misc.php?mod=tag&amp;id=<?php echo $tag['tagid'];?>" ><?php echo $tag['tagname'];?></a> 
        <?php } ?> 
      </div>
      <?php } else { ?>
  <div class="wmt brtb notb">还没有任何标签</div>
  <?php } ?> 

<?php } else { ?> 
<?php echo $num;?> 
<?php } ?> 
</section><?php include template('common/footer'); ?>