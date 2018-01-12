<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/shop_header', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/shop_header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/shop_left', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/shop_left', TEMPLATE_INCLUDEPATH));?>
        <section class="vbox">
          <section class="padder">
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
              <li><a href="<?php  echo $this->createWebUrl('index')?>"><i class="fa fa-home"></i>首页</a></li>
              <li class="active">商品设置</li>
               <li class="active">商品管理</li>
            </ul>
<ul class="nav nav-tabs">
	<li <?php  if($op =='display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('shop_goods', array('op' => 'display'))?>">管理商品</a></li>
	<?php  if($op == 'post') { ?><li class="active"><a href="<?php  echo $this->createWebUrl('shop_goods', array('op' => 'post'))?>">添加商品</a></li><?php  } ?>


</ul>

<?php  if($op == 'display') { ?>
              <link rel="stylesheet" href="../addons/yc_youliao/public/css/common.css" type="text/css" />
			  <div class="main">
				  <div class="goods">
					  <div class="selectNr" >
						  <div class="left">
							  <a href="<?php  echo $this->createWebUrl('shop_goods',array('op' =>'post'))?>">
								  添加商品</a>
						  </div>
					  </div>
					  <div class="list_body">
						  <div class="list_top">
							  <form action="./index.php" method="get" class="form-horizontal search_box" role="form" id="form1" style="margin-right:10px;">
								  <input type="hidden" name="c" value="site" />
								  <input type="hidden" name="a" value="entry" />
								  <input type="hidden" name="m" value="yc_youliao" />
								  <input type="hidden" name="do" value="shop_goods" />
								  <input type="hidden" name="op" value="display" />
								  <div class="col-xs-3" style="padding:0;margin-right: 10px;">
									  <div class="input-group">
										  <input type="text" class="form-control" name="keyword" placeholder="商品标题">
										  <span class="input-group-btn">
						<button class="btn btn-default" type="submit" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					  </span>
									  </div>
								  </div>
							  </form>
							  <?php  if($shop['is_hot'] ==1) { ?>
							  <div class="input-group select_btn">
								  <div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  <?php  if($_GPC['is_group']=='1') { ?>已开启
										  <?php  } else if($_GPC['is_group']=='0') { ?>未开启
										  <?php  } else { ?>首页推荐
										  <?php  } ?>
										  <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array( 'is_hot' => '1'))?>">已参与</a></li>
										  <li role="separator" class="divider"></li>
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array( 'is_hot' => '0'))?>"> 未参与</a></li>

									  </ul>
								  </div>
							  </div>
							  <?php  } ?>

							  <?php  if($shop['is_time'] ==1) { ?>
							  <div class="input-group select_btn">
								  <div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  <?php  if($_GPC['is_time']=='1') { ?>已参与
										  <?php  } else if($_GPC['is_time']=='0') { ?>未参与
										  <?php  } else { ?>是否参与秒杀
										  <?php  } ?>

										  <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array( 'is_time' => '1'))?>"> 已参与</a></li>
										  <li role="separator" class="divider"></li>
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array( 'is_time' => '0'))?>"> 未参与</a></li>

									  </ul>
								  </div>
							  </div>
							  <?php  } ?>
							  <?php  if($shop['is_group'] ==1) { ?>
							  <div class="input-group select_btn">
								  <div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  <?php  if($_GPC['is_group']=='1') { ?>已参与
										  <?php  } else if($_GPC['is_group']=='0') { ?>未参与
										  <?php  } else { ?>是否参与拼团
										  <?php  } ?>
										  <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array( 'is_group' => '1'))?>">已参与</a></li>
										  <li role="separator" class="divider"></li>
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array( 'is_group' => '0'))?>"> 未参与</a></li>

									  </ul>
								  </div>
							  </div>
							  <?php  } ?>
							  <div class="input-group select_btn">
								  <div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  <?php  if($_GPC['is_group']=='0') { ?>上架中
										  <?php  } else if($_GPC['is_group']=='1') { ?>已下架
										  <?php  } else { ?>商品状态
										  <?php  } ?>
										  <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array( 'is_group' => '1'))?>">上架中</a></li>
										  <li role="separator" class="divider"></li>
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array( 'is_group' => '0'))?>"> 已下架</a></li>

									  </ul>
								  </div>
							  </div>
							  <div class="input-group select_btn">
								  <div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  <?php  if($_GPC['orderby']== 1) { ?>正序
										  <?php  } else { ?>倒序
										  <?php  } ?>
										  <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array('orderby' => '1'))?>">正序</a></li>
										  <li role="separator" class="divider"></li>
										  <li><a href="<?php  echo $this->createWebUrl('shop_goods', array('orderby' => '0'))?>">倒序</a></li>
									  </ul>
								  </div>
							  </div>

						  </div>

						  <div class="panel panel-info" >
							  <div class=" table-responsive">

								  <form action="index.php" method="post" class="form-horizontal">
									  <input type="hidden" name="c" value="site" />
									  <input type="hidden" name="a" value="entry" />
									  <input type="hidden" name="do" value="goods" />
									  <input type="hidden" name="op" value="change" />
									  <input type="hidden" name="m" value="yc_youliao" />

										  <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/goods_list', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/goods_list', TEMPLATE_INCLUDEPATH));?>


							  <div class="list_bottom item_cell_box good_list good_list_bot">
								  <div class="item_cell_flex">

									  <label>

										  <input class="" type="checkbox" name="" onclick="var ck = this.checked;$('.goodid_check input').each(function(){this.checked = ck});">全选
									  </label>&nbsp;&nbsp;
									  <span class="btn_44b549  orderblock"  >排序</span>
									  <input type="submit" name="suborder" class="btn_44b549 order-by-input" value="提交排序">
									  <input type="submit" name="delete" class="btn_44b549" value="删除所选" onclick="return confirm('此操作不可恢复，确定要删除所选商品吗？');">
									  <input type="submit" name="upgood" class="btn_44b549" value="上架所选" onclick="return confirm('确认对所选商品批量上架吗？');">
									  <input type="submit" name="downgood" class="btn_44b549" value="下架所选" onclick="return confirm('确认对所选商品批量下架吗？');">




									  <input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
								  </div>
								  <div class=""><?php  echo $pager;?></div>
							  </div>
							  </form>
						  </div>

					  </div>




				  </div>
			  </div>

<?php  } else if($op == 'post') { ?>
              <script type="text/javascript">
                  $(function () {

                      window.optionchanged = false;
                      $('#myTab a').click(function (e) {
                          e.preventDefault();//阻止a链接的跳转行为
                          $(this).tab('show');//显示当前选中的链接及关联的content
                      })
                  });
                  function formcheck(){

                      if($("#goodsname").isEmpty()) {
                          $('#myTab a[href="#tab_basic"]').tab('show');
                          Tip.focus("goodsname","请输入商品名称!","right");
                          return false;
                      }
                      <?php  if(empty($id)) { ?>
                      if ($.trim($(':file[name="thumb"]').val()) == '') {
                          $('#myTab a[href="#tab_basic"]').tab('show');
                          $('#myTab a[href="#tab_basic"]').tab('show');
                          Tip.focus('thumb_div', '请上传缩略图.', 'right');
                          return false;
                      }
                      <?php  } ?>

                      if($("#goodsname").isEmpty()) {
                          $('#myTab a[href="#tab_basic"]').tab('show');
                          Tip.focus("goodsname","请输入商品名称!","right");
                          return false;
                      }
                      var full =  checkoption();
                      if(!full){return false;}
                      if(optionchanged){
                          $('#myTab a[href="#tab_option"]').tab('show');
                          message('规格数据有变动，请重新点击 [刷新规格项目表] 按钮!','','error');
                          return false;
                      }
                      return true;

                  }
                  function checkoption(){
                      var full = true;
                      if( $("#hasoption").get(0).checked){
                          $(".spec_title").each(function(i){
                              if( $(this).isEmpty()) {
                                  $('#myTab a[href="#tab_option"]').tab('show');
                                  Tip.focus(".spec_title:eq(" + i + ")","请输入规格名称!","top");
                                  full =false;
                                  return false;
                              }

                          });
                          $(".spec_item_title").each(function(i){
                              if( $(this).isEmpty()) {
                                  $('#myTab a[href="#tab_option"]').tab('show');
                                  Tip.focus(".spec_item_title:eq(" + i + ")","请输入规格项名称!","top");
                                  full =false;
                                  return false;
                              }

                          });
                      }
                      if(!full) { return false; }
                      return full;

                  }
                  var url= "<?php  echo $this->createWebUrl('ajax_req')?>";
                  function changeline(value1){
                      $('select[name="ccate_id"]').find("option").remove();
                      var op='changeline';
                      fetchbyajax1(url,value1,op);



                  }
              </script>
<style type='text/css'>
    .tab-pane { padding:20px 0 20px 0;}
</style>
<div class="main">
	<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" onsubmit="return formcheck();">
        <input type="hidden" name="id" value="<?php  echo $item['goods_id'];?>" />
		<div class="panel panel-info" >
			<div class="panel-body  table-responsive">
    <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#tab_basic">基本信息</a></li>
          <li><a href="#tab_des">商品描述</a></li>
           <li><a href="#tab_option">商品规格</a></li>

			<?php  if($shop['is_group']==1) { ?>
           <li><a href="#tab_group">拼团设置</a></li>
			<?php  } ?>
			<?php  if($shop['is_time']==1) { ?>
           <li><a href="#tab_activity">秒杀专场</a></li>
			<?php  } ?>
		<li><a href="#tab_share">分享设置</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane  active" id="tab_basic"><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/goods_basic', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/goods_basic', TEMPLATE_INCLUDEPATH));?></div>
            <div class="tab-pane" id="tab_des"><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/goods_des', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/goods_des', TEMPLATE_INCLUDEPATH));?></div>
            <div class="tab-pane" id="tab_param"><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/goods_param', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/goods_param', TEMPLATE_INCLUDEPATH));?></div>
            <div class="tab-pane" id="tab_option"><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/goods_option', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/goods_option', TEMPLATE_INCLUDEPATH));?></div>
			<?php  if($shop['is_group']==1) { ?>
            <div class="tab-pane" id="tab_group"><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/goods_group', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/goods_group', TEMPLATE_INCLUDEPATH));?></div>
			<?php  } ?>
			<?php  if($shop['is_time']==1) { ?>
            <div class="tab-pane" id="tab_activity"><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/goods_activity', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/goods_activity', TEMPLATE_INCLUDEPATH));?></div>
			<?php  } ?>
			<div class="tab-pane" id="tab_share"><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/goods_share', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/goods_share', TEMPLATE_INCLUDEPATH));?></div>

        </div>
            </div>
        </div>

 <div class="width100 marginbottom15p">
    <input name="submit" type="submit" value="提交" class="btn btn-primary span3 submit5">

  <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
</div>
    </form>
</div>
<div id="specWin" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<table class="table table-hover">
		<thead class="navbar-inner">
			<tr>
				<th style="width:100px;" class="row-hover">名称<i></i></th>
				<th style="text-align:right;">操作</th>
			</tr>
		</thead>
		<tbody id="spec-items">
		<?php  if(is_array($specs)) { foreach($specs as $field) { ?>
			<?php  $json = json_encode($field);?>
			<tr>
				<td><input  name="spec[]" type="text" value="<?php  echo $field['title'];?>"></td>
				<td style="text-align:right;">
					<?php  if(is_array($field['content'])) { foreach($field['content'] as $item) { ?>
					<span class="label label-info"><?php  echo $item;?></span>
					<?php  } } ?>
				</td>
				<td><a href="javascript:;" onclick='addSpec(<?php  echo $json;?>)'>添加</a></td>
			</tr>
		<?php  } } ?>
		</tbody>
	</table>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/footer', TEMPLATE_INCLUDEPATH)) : (include template('web/footer', TEMPLATE_INCLUDEPATH));?>
<?php  } ?>



