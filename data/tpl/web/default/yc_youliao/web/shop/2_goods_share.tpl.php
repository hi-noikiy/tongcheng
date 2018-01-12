<?php defined('IN_IA') or exit('Access Denied');?><div class="panel panel-default">
    <div class="panel-heading">分享设置</div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享标题</label>
            <div class="col-sm-9 col-xs-12">
                <input type="text"  name="share_title"  class="form-control" value="<?php  echo $item['share_title'];?>" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享图片</label>
            <div class="col-sm-9 col-xs-12">
                <?php  echo tpl_form_field_image('share_img', $item['share_img'], '', array('extras' => array('text' => 'readonly')))?>

            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享描述</label>
            <div class="col-sm-9 col-xs-12">
                <input type="text"  name="share_info"  class="form-control" value="<?php  echo $item['share_info'];?>" />

            </div>
        </div>

