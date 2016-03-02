<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');?><?php include template('common/header'); if($_GET['mod'] == 'piclist') { ?>
        <?php include template('portal/indexpiclist'); } elseif($_GET['mod'] == 'photo') { ?>
        <?php include template('portal/photo'); } elseif($_GET['mod'] == 'portal') { ?>
    <?php if($ceo_indexdefault == 2) { ?>
        <?php tplhtmlcode('portal_code',$ceo_portalcode);?>    <?php } else { ?>
        <?php dheader("location: $indexurl");exit;?>    <?php } } else { ?>
    <?php if($ceo_indexdiyopen != 0 && $_GET['forumlist'] != 1) { ?>
        <?php dheader("location: $indexurl");exit;?>    <?php } if($_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1) { dheader('Location:forum.php?mod=guide&view=hot');exit;?><?php } ?>

<script type="text/javascript">
function getvisitclienthref() {
var visitclienthref = '';
if(ios) {
visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
} else if(andriod) {
visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
}
return visitclienthref;
}
</script>

<?php if(!empty($_G['setting']['pluginhooks']['index_top_mobile'])) echo $_G['setting']['pluginhooks']['index_top_mobile'];?>
<!-- main forumlist start --><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><div class="catlist">
<div class="subforumshow cl" href="#sub_forum_<?php echo $cat['fid'];?>">        			
<h1><span class="iconfont i_cathead">&#xe816;</span> <?php echo $cat['name'];?><span class="y"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/collapsed_<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>yes<?php } else { ?>no<?php } ?>.png"></span></h1>
        </div>
<ul class="s_forum" id="sub_forum_<?php echo $cat['fid'];?>">
            <?php $i=1;?>            <?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { ?>                <?php $sum=count($cat[forums]);?>                <li class="<?php if($i!=$sum) { ?>brtb<?php } ?>">              
                <?php $i++;?>                    <?php $forum=$forumlist[$forumid];?>                    <?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><img src="template/yingxiao_toutiao2_m/toutiao_mobile/img/forum<?php if($forum['folder']) { ?>_new<?php } ?>.png"/></a>
<?php } ?>                    
                    <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>" class="a">
                    <p class="f_nm f15"><?php echo $forum['name'];?></p>
                    <?php if($ceo_forumdesorpos == 1) { ?>
                    <?php if($forum['description']) { ?><p class="f11 xg1 f_dp"><?php echo cutstr(strip_tags($forum['description']),40); ?></p><?php } ?>
                    <?php } else { ?>
                    <?php if(empty($forum['redirect'])) { ?><p class="f11 xg1 f_dp"><em>主题: <?php echo dnumber($forum['threads']); ?></em><em>回: <?php echo dnumber($forum['posts']); ?></em></p><?php } ?>
                    <?php } ?>
                    </a>
                </li>
            <?php } ?>
</ul>

</div>
<?php } ?>

<!-- main forumlist end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?>
<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.s_forum').css('display', 'block');
<?php } else { ?>
$('.s_forum').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
obj.find('img').attr('src', 'template/yingxiao_toutiao2_m/toutiao_mobile/img/collapsed_yes.png');
} else {
subobj.css('display', 'none');
obj.find('img').attr('src', 'template/yingxiao_toutiao2_m/toutiao_mobile/img/collapsed_no.png');
}
});
 })();
</script>
<?php } include template('common/footer'); ?>