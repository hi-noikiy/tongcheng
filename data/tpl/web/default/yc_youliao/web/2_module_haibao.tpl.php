<?php defined('IN_IA') or exit('Access Denied');?><div class="form-group">
	<label class="col-xs-12 col-sm-3 col-md-2 control-label">
		海报背景</label>
	<div class="col-sm-9 col-xs-12">
		<?php  echo tpl_form_field_image('haibaobg', $item['haibaobg'], '', array('extras' => array('text' => 'readonly')))?>
		<span class="help-block" style="color:#900;"></span>
	</div>
</div>
<div class="clearfix"></div>
<div class="form-group nature qrset" style="margin-left: 15%">
	<label class="col-md-4 control-label" style=" line-height: 47px;">二维码位置</label>
	<div class="col-sm-9 col-xs-12">
		<label for="qrleft" class="checkbox-inline" >左边距(px)</label>
		<input type="text" class="span1" placeholder="" name="qrleft" value="<?php  echo $bg['qrleft'];?>">
		<label for="qrtop" class="checkbox-inline" >上边距(px)</label>
		<input type="text" class="span1" placeholder="" name="qrtop" value="<?php  echo $bg['qrtop'];?>">
		<label for="qrwidth" class="checkbox-inline" >宽度(px)</label>
		<input type="text" class="span1" placeholder="" name="qrwidth" value="<?php  echo $bg['qrwidth'];?>">
		<label for="qrheight" class="checkbox-inline" >高度(px)</label>
		<input type="text" class="span1" placeholder="" name="qrheight" value="<?php  echo $bg['qrheight'];?>">
	</div>
</div>

<!--<div class="form-group nature">-->
	<!--<label class="col-md-4 control-label">头像位置</label>-->
	<!--<div class="col-sm-9 col-xs-12">-->
		<!--<div class="col-sm-9 col-xs-12">-->
		<!--<label for="avatarenable"  class="mr5">是否显示</label>-->
		<!--<input type="checkbox" name="avatarenable" value="1" <?php  if($bg['avatarenable']) { ?> checked<?php  } ?>></label>-->
		<!--</div>-->
		<!--<label for="avatarleft" class="checkbox-inline" >左边距(px)</label>-->
		<!--<input type="text" class="span1" placeholder="" name="avatarleft" value="<?php  echo $bg['avatarleft'];?>">-->
		<!--<label for="avatartop" class="checkbox-inline" >上边距(px)</label>-->
		<!--<input type="text" class="span1" placeholder="" name="avatartop" value="<?php  echo $bg['avatartop'];?>">-->
		<!--<label for="avatarwidth" class="checkbox-inline" >宽度(px)</label>-->
		<!--<input type="text" class="span1" placeholder="" name="avatarwidth" value="<?php  echo $bg['avatarwidth'];?>">-->
		<!--<label for="avatarheight" class="checkbox-inline" >高度(px)</label>-->
		<!--<input type="text" class="span1" placeholder="" name="avatarheight" value="<?php  echo $bg['avatarheight'];?>">-->
	<!--</div>-->
<!--</div>-->

<!--<div class="form-group nature">-->
	<!--<label class="col-md-4 control-label">用户名位置</label>-->
	<!--<div class="col-sm-9 col-xs-12">-->
		<!--<div class="col-sm-9 col-xs-12">-->
		<!--<label for="nameenable" class="mr5">是否显示</label>-->
		<!--<input type="checkbox" name="nameenable" value="1" <?php  if($bg['nameenable']) { ?> checked<?php  } ?>></label>-->
		<!--</div>-->
		<!--<label for="nameleft" class="checkbox-inline" >左边距(px)</label>-->
		<!--<input type="text" class="span1" placeholder="" name="nameleft" value="<?php  echo $bg['nameleft'];?>">-->
		<!--<label for="nametop" class="checkbox-inline" >上边距(px)</label>-->
		<!--<input type="text" class="span1" placeholder="" name="nametop" value="<?php  echo $bg['nametop'];?>">-->
		<!--<label for="namesize" class="checkbox-inline" >字体大小(pt)</label>-->
		<!--<input type="text" class="span1" placeholder="" name="namesize" value="<?php  echo $bg['namesize'];?>">-->
		<!--<label for="namecolor" class="checkbox-inline" >字体颜色</label>-->
		<!--<input type="color" class="span1" placeholder="" name="namecolor" value="<?php  echo $bg['namecolor'];?>">-->
	<!--</div>-->
<!--</div>-->
