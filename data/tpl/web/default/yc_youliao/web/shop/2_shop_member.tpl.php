<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/shop_header', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/shop_header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/shop/shop_left', TEMPLATE_INCLUDEPATH)) : (include template('web/shop/shop_left', TEMPLATE_INCLUDEPATH));?>

   <style>
table th, table td{
	text-align:center;
}
   </style>
      <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
              <li class="active"><a href="<?php  echo $this->createWebUrl("index")?>"><i class="fa fa-home"></i>首页</a></li>
              <li class="active">会员管理</li>          
            </ul> 

    <div class="main">
		<div class="stat">
    <div class="panel panel-info">
        <div class="panel-heading">筛选</div>
        <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form" id="form">
				<input type="hidden" name="a" value="entry" />
				<input type="hidden" name="c" value="site" />
				<input type="hidden" name="m" value="yc_youliao" />
				<input type="hidden" name="do" value="shop_member" />
				<input type="hidden" name="submit" value="搜索" />

                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">昵称</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <input class="form-control" name="nickname" id="" type="text" value="<?php  echo $nickname;?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">手机</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <input class="form-control" name="mobile" id="" type="text" value="<?php  echo $mobile;?>" >
                    </div>
                </div>
                <div class="form-group">
                	  <div class="col-sm-4 col-xs-12"> </div>
                    <div class="col-sm-4 col-xs-12">
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                        <button type="button" class="btn btn-default">总记录数：<?php  echo $total;?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
			<div class="stat-div">
				<div class="sub-item" id="table-list">
                    <div class="panel panel-info" style="overflow:hidden;border-color:#ddd">
                        <div class="panel-heading" style="background:#f5f5f5;border-bottom:1px solid #ddd;color:#333;">筛选</div>
                        <div class="panel-body  table-responsive" style="padding:15px;background:#fff;">
					<div class="sub-content">
						<table class="table table-hover">
							<thead class="navbar-inner">
								<tr>
									<th class="row-hover"style="width:20%">昵称</th>
									<th class="row-hover"style="width:10%">头像</th>
									<th class="row-hover"style="width:14%">电话</th>
									<th class="row-hover" style="width:10%"> 账户余额</th>
									<th class="row-hover"style="width:8%">积分</th>

									<!--<th class="row-hover" style="width:30%">操作</th>-->
								</tr>
							</thead>
							<tbody>
								<?php  if(is_array($list)) { foreach($list as $v) { ?>
								<tr class="txcenter">
									<td>
										<?php  if(!empty($v['realname'])) { ?><?php  echo $v['realname'];?><?php  } else { ?><?php  echo $v['nickname'];?><?php  } ?>
									</td>
									<td><img src="<?php  echo $v['avatar'];?>" width='60'></td>

									<td >
										<?php  echo $v['mobile'];?>
									</td>
									<td >
										<?php  echo $v['balance'];?>
									</td>
									<td>
									<?php  echo $v['credit'];?>
									</td>

									<!--<td  class="charge">-->

										<!--<a class="btn btn-default" href="<?php  echo $this->createWebUrl('member',array('op' =>'postAdmin','mid' =>$v['id']))?>"-->
										 <!--title="设为管理员"><i class="fa fa-user" ></i></a>-->
										<!---->


									<!--</td>-->
								</tr>
									
								<?php  } } ?>
							</tbody>
						</table>
					</div>
				</div>
                        </div>
					<?php  echo $pager;?>
				</div>
			</div>
		</div>
    </div>

</section>
</section>
</section>
<script>
    function deleteconfirm(info,url)
    {
        var r=confirm(info);
        if (r==true)
        {
            window.location.href = url;
        }
    }
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/footer', TEMPLATE_INCLUDEPATH)) : (include template('web/footer', TEMPLATE_INCLUDEPATH));?>