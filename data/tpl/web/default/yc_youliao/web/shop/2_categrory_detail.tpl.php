<?php defined('IN_IA') or exit('Access Denied');?><form  method="post" class="form-horizontal form" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php  echo $category['id'];?>" />
    <div class="panel panel-info">
        <div class="panel-heading">分类详细设置</div>
        <div class="panel-body  table-responsive">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分类名称</label>
                <div class="col-sm-9 col-xs-12">
                    <input type="text" name="catename" class="form-control" value="<?php  echo $category['name'];?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分类图片</label>
                <div class="col-sm-9 col-xs-12">
                    <?php  echo tpl_form_field_image('images',$category['thumb']);?>
                    <span class="help-block">列表的缩略图</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分类外链</label>
                <div class="col-sm-9 col-xs-12">
                    <input type="text" name="cate_url" class="form-control" value="<?php  echo $category['cate_url'];?>"
                           placeholder="格式：http:www.xxxx.com"/>
                </div>
            </div>


            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
                <div class="col-sm-3">
                    <input type="text" name="displayorder" class="form-control" value="<?php  echo $category['displayorder'];?>" />
                </div>
            </div>
            <div class="form-group">

                <div class="width100 marginbottom15p">
                    <input name="submit" type="submit" value="提交" class="btn btn-primary span3 cate-btn">
                    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                </div>
            </div>
        </div>
    </div>
</form>