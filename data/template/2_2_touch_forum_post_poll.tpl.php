<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="pd2">
    <input type="hidden" name="polls" value="yes" />
    <input type="hidden" name="fid" value="<?php echo $_G['fid'];?>" />

    <?php if($_GET['action'] == 'newthread') { ?>
        <input type="hidden" name="tpolloption" value="2" />
        <p class="mbm" style="margin-right:14px;">
        <textarea name="polloptions" class="txt"  rows="3"  placeholder="投票选项: 每行填写 1 个选项,最多可填写 <?php echo $_G['setting']['maxpolloptions'];?> 个选项" /></textarea>
        </p>
        
    <?php } else { ?>
        <?php if(is_array($poll['polloption'])) foreach($poll['polloption'] as $key => $option) { ?>            <p class="mbm">
                <input type="hidden" name="polloptionid[<?php echo $poll['polloptionid'][$key];?>]" value="<?php echo $poll['polloptionid'][$key];?>" />
                <input type="text" name="displayorder[<?php echo $poll['polloptionid'][$key];?>]" class="txt_s" autocomplete="off"  value="<?php echo $poll['displayorder'][$key];?>" />
                <input type="text" name="polloption[<?php echo $poll['polloptionid'][$key];?>]" class="txt_s" autocomplete="off" style="width:290px;"  value="<?php echo $option;?>"<?php if(!$_G['group']['alloweditpoll']) { ?> readonly="readonly"<?php } ?> />
            </p>
        <?php } ?>
    <?php } ?>


    <div >
        <p class="mbm">
            <input type="text" name="maxchoices" id="maxchoices" class="txt_s" placeholder="最多可选 <?php if($_GET['action'] == 'edit' && $poll['maxchoices']) { ?><?php echo $poll['maxchoices'];?><?php } else { ?>1<?php } ?>"  /> 项
        </p>
        <p class="mbm">
            <input type="text" name="expiration" id="polldatas" class="txt_s" placeholder="记票天数" /> 天
        </p>
        <p class="mbm">
            <input type="checkbox" name="visibilitypoll" id="visibilitypoll" class="pc" value="1"<?php if($_GET['action'] == 'edit' && !$poll['visible']) { ?> checked<?php } ?>  />
            <label for="visibilitypoll">投票后结果可见</label>
        </p>
        <p class="mbm">
            <input type="checkbox" name="overt" id="overt" class="pc" value="1"<?php if($_GET['action'] == 'edit' && $poll['overt']) { ?> checked<?php } ?>  />
            <label for="overt">公开投票参与人</label>
        </p>
    </div>
</div>