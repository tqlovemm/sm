<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('ajax_secondgroup');?><?php include template('common/header'); if(!empty($groupselect['second'])) { ?>
<select id="fup" name="fup" class="ps">
<?php echo $groupselect['second'];?>
</select>
<?php } include template('common/footer'); ?>