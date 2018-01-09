<?php defined('IN_IA') or exit('Access Denied');?><div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否前台页面展示</label>
	<div class="col-sm-9 col-xs-12">
		<label for="ison1" class="radio-inline"><input type="radio" name="ison" value="1" id="ison1" <?php  if($item['ison'] == 1) { ?>checked="true"<?php  } ?> /> 展示</label>
		&nbsp;&nbsp;&nbsp;
		<label for="ison2" class="radio-inline"><input type="radio" name="ison" value="0" id="ison2"  <?php  if($item['ison'] == 0) { ?>checked="true"<?php  } ?> /> 不展示</label>
	</div>
</div>

<div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否允许发布信息</label>
	<div class="col-sm-9 col-xs-12">

		<label for="canrelease1" class="radio-inline"><input type="radio" onclick="$('#minscore').show();" name="canrelease" value="1" id="canrelease1" <?php  if($item['canrelease'] == 1) { ?>checked="true"<?php  } ?> /> 允许</label>
		&nbsp;&nbsp;&nbsp;
		<label for="canrelease2" class="radio-inline"><input type="radio" onclick="$('#minscore').hide();" name="canrelease" value="0" id="canrelease2"  <?php  if($item['canrelease'] == 0) { ?>checked="true"<?php  } ?> /> 不允许</label>
		<span class="help-block"></span>
	</div>
</div>

<div class="form-group" id="minscore" <?php  if($item['canrelease'] == 0) { ?>style="display:none;"<?php  } ?>>
	<label class="col-xs-12 col-sm-3 col-md-2 control-label" style="color:#2F9833;">发布信息奖励积分</label>
	<div class="col-sm-2 col-xs-12">
		<div class="input-group">
			<input class="form-control" name="minscore" value="<?php  echo $item['minscore'];?>" type="number" />
			<span class="input-group-addon">积分</span>
		</div>
		<span class="help-block" style="color:#900;">0代表不奖励积分</span>
	</div>
</div>

<div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">发布信息是否支付</label>
	<div class="col-sm-9 col-xs-12">
		<label for="isneedpay1" class="radio-inline"><input type="radio" onclick="$('#needpay').show();" name="isneedpay" value="1" id="isneedpay1" <?php  if($item['isneedpay'] == 1) { ?>checked="true"<?php  } ?> /> 是</label>
		&nbsp;&nbsp;&nbsp;
		<label for="isneedpay2" class="radio-inline"><input type="radio" onclick="$('#needpay').hide();" name="isneedpay" value="0" id="isneedpay2"  <?php  if($item['isneedpay'] == 0) { ?>checked="true"<?php  } ?> /> 否</label>
	</div>
</div>

<div class="form-group" id="needpay" <?php  if($item['isneedpay'] == 0) { ?>style="display:none;"<?php  } ?>>
	<label class="col-xs-12 col-sm-3 col-md-2 control-label" style="color:#2F9833;">发布信息支付费用</label>
	<div class="col-sm-2 col-xs-12">
		<div class="input-group">
			<input class="form-control" name="needpay" value="<?php  echo $item['needpay'];?>" type="text" />
			<span class="input-group-addon">元</span>
		</div>
		<span class="help-block" style="color:#900;">0代表不需要支付</span>
	</div>
</div>

<div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启信息审核</label>
	<div class="col-sm-9 col-xs-12">
		<label for="isshenhe1" class="radio-inline"><input type="radio" name="isshenhe" value="1" id="isshenhe1" <?php  if($item['isshenhe'] == 1) { ?>checked="true"<?php  } ?> /> 开启</label>
		&nbsp;&nbsp;&nbsp;
		<label for="isshenhe2" class="radio-inline"><input type="radio" name="isshenhe" value="0" id="isshenhe2"  <?php  if($item['isshenhe'] == 0) { ?>checked="true"<?php  } ?> /> 关闭</label>
		<span class="help-block"></span>
	</div>
</div>

<div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否允许用户收藏</label>
	<div class="col-sm-9 col-xs-12">
		<label for="iscang1" class="radio-inline"><input type="radio" name="iscang" value="1" id="iscang1" <?php  if($item['iscang'] == 1) { ?>checked="true"<?php  } ?> /> 允许</label>
		&nbsp;&nbsp;&nbsp;
		<label for="iscang2" class="radio-inline"><input type="radio" name="iscang" value="0" id="iscang2"  <?php  if($item['iscang'] == 0) { ?>checked="true"<?php  } ?> /> 不允许</label>
		<span class="help-block"></span>
	</div>
</div>

<div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否使用默认列表页面</label>

		<div class="col-sm-9 col-xs-12">
			<label for="iscang1" class="radio-inline"><input type="radio" name="defult_list" value="1" id="defult_list" <?php  if($item['defult_list'] == 1) { ?>checked="true"<?php  } ?> /> 是</label>
			&nbsp;&nbsp;&nbsp;
			<label for="iscang2" class="radio-inline"><input type="radio" name="defult_list" value="2" id="defult_list"  <?php  if($item['defult_list'] == 2) { ?>checked="true"<?php  } ?> /> 否</label>

			<span class="help-block"></span>
		</div>

</div>

<div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否使用默认详情页面</label>
	<div class="col-sm-9 col-xs-12">
		<label for="iscang1" class="radio-inline"><input type="radio" name="defult_detail" value="1" id="defult_detail" <?php  if($item['defult_detail'] == 1) { ?>checked="true"<?php  } ?> /> 是</label>
		&nbsp;&nbsp;&nbsp;
		<label for="iscang2" class="radio-inline"><input type="radio" name="defult_detail" value="2" id="defult_detail2"  <?php  if($item['defult_detail'] == 2) { ?>checked="true"<?php  } ?> /> 否</label>

		<span class="help-block"></span>
	</div>
</div>

<div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启评论</label>
	<div class="col-sm-9 col-xs-12">
		<label for="iscang1" class="radio-inline"><input type="radio" name="show_comment" value="1" <?php  if($item['show_comment'] == 1) { ?>checked="true"<?php  } ?> /> 是</label>
		&nbsp;&nbsp;&nbsp;
		<label for="iscang2" class="radio-inline"><input type="radio" name="show_comment" value="2" <?php  if($item['show_comment'] == 2) { ?>checked="true"<?php  } ?> /> 否</label>
	</div>
</div>

<div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示发布位置</label>
	<div class="col-sm-9 col-xs-12">
		<label for="iscang1" class="radio-inline"><input type="radio" name="show_location" value="1" <?php  if($item['show_location'] == 1) { ?>checked="true"<?php  } ?> /> 是</label>
		&nbsp;&nbsp;&nbsp;
		<label for="iscang2" class="radio-inline"><input type="radio" name="show_location" value="2" <?php  if($item['show_location'] == 2) { ?>checked="true"<?php  } ?> /> 否</label>
	</div>
</div>