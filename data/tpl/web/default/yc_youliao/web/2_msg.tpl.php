<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/header', TEMPLATE_INCLUDEPATH)) : (include template('web/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/left', TEMPLATE_INCLUDEPATH)) : (include template('web/left', TEMPLATE_INCLUDEPATH));?>

<style>
.edui-editor{
width: auto !important;
}

</style>
 <script type="text/javascript" src="<?php echo MODULE_URL;?>recouse/js/webutil.js"></script>
 <link href="<?php echo MODULE_URL;?>recouse/css/webpage.css" rel="stylesheet">
 <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
              <li><a href="<?php  echo $this->createWebUrl("index")?>"><i class="fa fa-home"></i>首页</a></li>
              <li class="active">商城设置</li>
               <li class="active">公告管理</li>
            </ul>  
<ul class="nav nav-tabs">
    <li <?php  if($op == 'display') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('msg',array('op' =>'display'))?>">公告列表</a></li>
    <li <?php  if($op == 'new') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('msg',array('op' =>'new'))?>">添加公告</a></li>
    <?php  if($op=='edit') { ?>
    <li class="active" ><a href="<?php  echo $this->createWebUrl('msg',array('op' =>'edit'))?>">编辑公告</a></li>
    <?php  } ?>
</ul>
<?php  if($op=='display') { ?>
<div class="main">
    <div class="panel panel-info">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="yc_youliao" />
			<input type="hidden" name="do" value="msg" />
			<div class="form-group">
				<label class="col-xs-3 col-sm-2 col-md-2 col-lg-1 control-label">状态</label>
				<div class="col-xs-3 col-sm-3 col-lg-3">
					<select name="status" class='form-control'>
						<option value='0'>全部</option>
						<option value="1" <?php  if($_GPC['status'] == '1') { ?> selected<?php  } ?>>正常</option>
						<option value="2" <?php  if($_GPC['status'] == '2') { ?> selected<?php  } ?>>关闭</option>
					</select>
				</div>
					<label class="col-xs-3 col-sm-2 col-md-2 col-lg-1 control-label">通知对象</label>
					<div class="col-xs-3 col-sm-3 col-lg-3">
						<select name="type" class='form-control'>
							<option value='0'>全部</option>
							<option value="1" <?php  if($_GPC['type'] == '1') { ?> selected<?php  } ?>>用户</option>
							<option value="2" <?php  if($_GPC['type'] == '2') { ?> selected<?php  } ?>>商户</option>
						</select>
					</div>
			</div>
			<div class="form-group fr mar_right_10">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					<button class="btn btn-default" type="button">总记录数：<?php  echo $num;?></button>				
			</div>
		</form>
	</div>
</div>
<div class="panel panel-default" style='min-width:1100px;'>
	<div class="panel-body table-responsive">
		<table class="table table-hover">
			<thead class="navbar-inner">
				<tr>
					<th style="width:5%;">ID</th>
					<th style="width:8%;">通知对象</th>
					<th style="width:25%;">标题</th>
					<th style="width:10%;">添加时间</th>
					<th style="width:5%;">状态</th>
					<th style="text-align:right; width:10%;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					<td><?php  echo $item['msg_id'];?></td>
					<td><?php  if($item['type']==1) { ?>用户<?php  } else { ?>商户<?php  } ?></td>
					<td><?php  echo $item['msg_title'];?></td>
					<td><?php  echo date("Y-m-d H:i:s",$item['add_time'])?></td>
					<td>
						<?php  if($item['status'] ==1) { ?>正常<?php  } else { ?>关闭<?php  } ?>
					</td>
					</td>
					<td style="text-align:right;">
						<div class="copy_url">

                        </div>
						<a href="<?php  echo $this->createWebUrl('msg', array('id' => $item['msg_id'],'op'=>'edit'))?>"class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
						<a href="<?php  echo $this->createWebUrl('msg', array('id' => $item['msg_id'], 'op'=>'delete'))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="删除"><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
	</div>
  </div>
</div>	
<?php  } ?>
<?php  if($op=='new' || $op=='edit') { ?>
	<div class="main">
	<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="form1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php  if($ac=='new') { ?>新增公告<?php  } else { ?>修改<?php  } ?>
			</div>
			<div class="panel-body">
				<div class="tab-content">					
				<div class="form-group margin_0">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>标题</label>
					<div class="col-sm-9 col-xs-8">
						<input type="text" name="msg_title" id="msg_title" class="form-control" value='<?php  echo $result['msg_title'];?>' />
						<?php  if($ac=='edit') { ?>
						<input type="hidden" name="id"  class="form-control" value='<?php  echo $result['msg_id'];?>' />
						<?php  } ?>
					</div>
				</div>
					<div class="form-group margin_0" >
						<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>公告对象</label>
						<div class="col-sm-9 col-xs-8">
					<select name="type" class="hour form-control" >
						<option value='1' <?php  if(1 ==$result['type']) { ?> selected <?php  } ?>>用户</option>
						<option value='2' <?php  if(2 ==$result['type']) { ?> selected <?php  } ?>>商户</option>
					</select>
						</div>
					</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>消息（请控制字数）</label>
					<div class="col-sm-9 col-xs-8">
						<?php  echo tpl_ueditor('msg_content',$result['msg_content']);?>
					</div>
				</div>															
				<?php  if($op=='edit') { ?>
					<div class='form-group'>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>状态</label>
					<div class="col-sm-9 col-xs-8">
					<select name='status'>
							<option value='1' <?php  if(1 ==$result['status']) { ?> selected <?php  } ?>>正常</option>
							<option value='0' <?php  if(0 ==$result['status']) { ?> selected <?php  } ?>>关闭</option>
					</select>
					</div>							
					</div>
				<?php  } ?>
				</div>
			</div>
		</div>		
		<div class="form-group col-sm-12">
			
			 <div class="width100 ">
	    <input name="submit" type="submit" value="提交" class="btn btn-primary span3 submit5 inline marginbottom15p">
		</div>
			
		</div>
	</form>
</div>		
<?php  } ?>
</section>
</section>
</section>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/footer', TEMPLATE_INCLUDEPATH)) : (include template('web/footer', TEMPLATE_INCLUDEPATH));?>