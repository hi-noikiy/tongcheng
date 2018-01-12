<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/shop_header', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/shop_header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/shop_left', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/shop_left', TEMPLATE_INCLUDEPATH));?>

   <section id="content">
        <section class="vbox">
          <section class="padder">
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
              <li><a href="<?php  echo $this->createWebUrl('index')?>"><i class="fa fa-home"></i>首页</a></li>
              <li class="active">基础设置</li>
              
            </ul>  


<div class="margin-10 setting">
      <form action="" method="post" class="form-horizontal form">
          <!--基础设置开始-->
          <a name="fabu" id="fabu"></a>
          <div class="panel panel-info none" <?php  if($op=='basic') { ?>style="display:block;"<?php  } ?>>
              <div class="panel-heading setting-header">基础设置</div>


              <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">退货退款说明</label>
                  <div class="col-sm-9 col-xs-12">
                      <div>支持退货退款时间为<?php  echo $this->getRefundtime()?>天</div>
                      <?php  echo tpl_ueditor('refundDetail', $settings['refundDetail']);?>

                  </div>

              </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">退货地址</label>
                  <div class="col-sm-9 col-xs-12 col-sm-input">
                      <input type="text" name="address" class="form-control" value="<?php  echo $settings['address'];?>" />
                      <div>如商品无须退货请忽略</div>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">退货联系电话</label>
                  <div class="col-sm-4 col-sm-input">
                      <input type="text" onkeyup="clearNoNum(this);"name="mobile"  class="form-control" value="<?php  echo $settings['mobile'];?>" />
                      <div>如商品无须退货请忽略</div>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">退货联系人</label>
                  <div class="col-sm-4 col-sm-input">
                      <input type="text" name="man" class="form-control" value="<?php  echo $settings['man'];?>" />
                      <div>如商品无须退货请忽略</div>
                  </div>
              </div>
          </div>
          <div class="width100 ">
              <input name="submit" type="submit" value="提交" class="btn btn-primary">
              <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
          </div>
      </form>
</div>
          </section>
        </section>
   </section>



<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/footer', TEMPLATE_INCLUDEPATH)) : (include template('web/footer', TEMPLATE_INCLUDEPATH));?>